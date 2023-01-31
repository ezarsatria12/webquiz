<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Pilgan;
use App\Models\multichoise;
use App\Models\quiz;
use App\Models\mutichoisechoise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Question\Question;

class AddPilganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($quiz)
    {
        $pilgans = quiz::with(['multichoise.mutichoisechoise'])->find($quiz);
        
        return view('admin.tabel.pilgantabel', compact('pilgans','quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($quiz)
    {
        return view('admin.tabel.form.addpilgan', compact('quiz'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $quiz )
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'media' => 'file'
        ]);
        
        if ($request->file('media')) {
            $validatedData['media'] = $request->file('media')->store('public/pilganquizmedia');
        }
        $validatedData['quiz_id'] = $quiz;
        $multichoise = multichoise::create($validatedData);
        foreach ($request->answerfield as $key => $value) {
            if (!empty($value['question']) && !empty($value['answer'])) {
            $is_active = $value['correct'] ?? 0;
            $data = [
                'multichoise_id' => $multichoise->id,
                'answer' => $value['answer'],
                'correct' => $is_active
            ];
            mutichoisechoise::create($data);
        }
        }
        return redirect()->route('quiz.pilgan.index', compact('quiz'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($quiz, $pilgan)
    {
        return view('admin.tabel.form.editpilgan', compact('pilgan', 'quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $quiz, $pilgan)
    {
        $validatedData = $request->validate([
            'question' => 'required',
            'media' => 'file'
        ]);
        $questionn = multichoise::where($pilgan);
        $question = multichoise::with('mutichoisechoise')->find($pilgan);
        !is_null($question->media) && Storage::delete($question->media);
        if ($request->file('media')) {
            $validatedData['media'] = $request->file('media')->store('public/pilganquizmedia');
        }
        multichoise::where('id', $pilgan)->update($validatedData);
        $question->mutichoisechoise()->delete();
        foreach ($request->answerfield as $key => $value) {
            if (!empty($value['question']) && !empty($value['answer'])) {
            $is_active = $value['correct'] ?? 0;
            $data = [
                'multichoise_id' => $pilgan,
                'answer' => $value['answer'],
                'correct' => $is_active
            ];
            mutichoisechoise::create($data);
        }
        }
        return redirect()->route('quiz.pilgan.index', compact('quiz'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($quiz, $multichoise)
    {
        $question = multichoise::find($multichoise);
        $question->mutichoisechoise()->delete();
        !is_null($question->media) && Storage::delete($question->media);
        $question->delete();
        return redirect()->route('quiz.pilgan.index', compact('quiz'));
    }
}