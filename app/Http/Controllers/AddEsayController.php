<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use App\Models\esay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddEsayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($quiz)
    {
        $esays = quiz::with(['esay'])->find($quiz);
        return view('admin.tabel.esaytabel', compact('esays', 'quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($quiz)
    {
        return view('admin.tabel.form.addesay', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $quiz)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'media' => 'file'
        ]);
        if ($request->file('media')) {
            $validatedData['media'] = $request->file('media')->store('esayquizmedia');
        }
        $validatedData['quiz_id'] = $quiz;
        esay::create($validatedData);
        return redirect()->route('quiz.esay.index', compact('quiz'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($quiz, $esay)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($quiz, $esay)
    {
        return view('admin.tabel.form.editesay', compact('quiz', 'esay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $quiz, $esay)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'media' => 'file'
        ]);
        $question = esay::find($esay);
        !is_null($question->media) && Storage::delete($question->media);
        if ($request->file('media')) {
            $validatedData['media'] = $request->file('media')->store('esayquizmedia');
        }
        esay::where('id', $esay)->update($validatedData);
        return redirect()->route('quiz.esay.index', compact('quiz'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($quiz, $esay)
    {
        $question = esay::find($esay);
        !is_null($question->media) && Storage::delete($question->media);
        $question->delete();
        return redirect()->route('quiz.esay.index', compact('quiz'));
    }
}