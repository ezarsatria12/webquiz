<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\esay;
use App\Models\multichoise;
use App\Models\quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class quizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quizadmin', [
            'quizs' => quiz::where('user_id', auth()->user()->id)->paginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quiz = new quiz();
        $categories = category::all();
        return view('admin.addsoals', compact('categories','quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        
        $validatedData = $request->validate([
            'quiztitle'=>'required',
            'quizdesc'=>'required',
            'category_id'=>'required',
            'media'=>'required|file'
        ]);
        if($request->file('media')){
            $validatedData['media'] = $request->file('media')->store('tumbnailquizmedia');
        }
        $validatedData['user_id'] = Auth::id();
        quiz::create($validatedData);
        return redirect()->route('quiz.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = quiz::find($id);
        $categories = category::all();
        return redirect()->route('quiz.pilgan.index', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = category::all();
        $quiz = quiz::find($id);
        return view('admin.addsoals', compact('quiz', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, quiz $quiz)
    {
        $validatedData = $request->validate([
            'quiztitle' => 'required',
            'quizdesc' => 'required',
            'category_id' => 'required',
            'media' => 'required|file'
        ]);
        !is_null($quiz->media) && Storage::delete($quiz->media);
        $validatedData['media'] = $request->file('media')->store('tumbnailquizmedia');
        quiz::where('id', $quiz->id)->update($validatedData);

        return redirect()->route('quiz.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(quiz $quiz)
    {
        $quest = quiz::with('student')->find($quiz);
        $question = multichoise::with('mutichoisechoise')->find($quiz);
        $questionesay = esay::with('studentesayaswer')->find($quiz);
        if ($question != null) {
            foreach ($question as $pilgan) {
                foreach($pilgan->mutichoisechoise as $jawaban){
                    $jawaban->delete();
                }
                !is_null($pilgan->media) && Storage::delete($pilgan->media);
                $pilgan->delete();
            }
        }
        if($questionesay != null){
            foreach ($questionesay as $esay) {
                foreach ($esay->studentesayaswer as $jawaban) {
                    $jawaban->delete();
                }
            }
            foreach($questionesay as $esay){
                !is_null($esay->media) && Storage::delete($esay->media);
                $esay->delete();
            }
        }
        if ($quest != null) {
            foreach ($quest as $student) {
                foreach ($student->student as $jawaban) {
                    $jawaban->delete();
                }
            }
            !is_null($quiz->media) && Storage::delete($quiz->media);
            $quiz->delete();
        }
        return redirect()->route('quiz.index');
    }
}