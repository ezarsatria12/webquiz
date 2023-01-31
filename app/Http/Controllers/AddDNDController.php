<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use App\Models\matching;
use App\Models\matchinganswer;
use App\Models\matchingansweranswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddDNDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($quiz)
    {
        $dnds = quiz::with(['matching.matchinganswer.matchingansweranswer'])->find($quiz);
        return view('admin.tabel.dndtabel', compact('dnds', 'quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($quiz)
    {
        return view('admin.tabel.form.adddnd', compact('quiz'));
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
            $validatedData['media'] = $request->file('media')->store('public/dndquizmedia');
        }
        $validatedData['quiz_id'] = $quiz;
        $maching = matching::create($validatedData);
        foreach ($request->answerfield as $key => $value) {
            if (!empty($value['question']) && !empty($value['answer'])) {
            $data1 = [
                'matching_id' => $maching->id,
                'question' => $value['question'],
            ];
            $machings = matchinganswer::create($data1);
            $data2 = [
                'matchinganswer_id' => $machings->id,
                'answer' => $value['answer'],
            ];
            matchingansweranswer::create($data2);
        }
        }
        return redirect()->route('quiz.dragndrop.index', compact('quiz'));
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
    public function edit($id)
    {
        //
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
        $question = matching::with('mutichoisechoise')->find($pilgan);
        !is_null($question->media) && Storage::delete($question->media);
        if ($request->file('media')) {
            $validatedData['media'] = $request->file('media')->store('public/pilganquizmedia');
        }
        matching::where('id', $pilgan)->update($validatedData);
        $question->mutichoisechoise()->delete();
        foreach ($request->answerfield as $key => $value) {
            if (!empty($value['question']) && !empty($value['answer'])) {
                $data1 = [
                    'matching_id' => $pilgan,
                    'question' => $value['question'],
                ];
                $machings = matchinganswer::create($data1);
                $data2 = [
                    'matchinganswer_id' => $machings->id,
                    'answer' => $value['answer'],
                ];
                matchingansweranswer::create($data2);
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
    public function destroy($id)
    {
        //
    }
}