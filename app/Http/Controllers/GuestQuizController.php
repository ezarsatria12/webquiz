<?php

namespace App\Http\Controllers;

use App\Models\esay;
use App\Models\matching;
use App\Models\matchinganswer;
use App\Models\matchingansweranswer;
use App\Models\multichoise;
use App\Models\mutichoisechoise;
use App\Models\quiz;
use App\Models\student;
use App\Models\studentesayaswer;
use Illuminate\Http\Request;

class GuestQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizs = quiz::paginate(9);
        return view('quiz', compact('quizs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user($quiz)
    {
        return view('identitycard', compact('quiz'));
    }
    public function usersave(Request $request, $quiz)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'class' => 'required'
        ]);
        $validatedData['quiz_id'] = $quiz;
        $multichoise = student::create($validatedData);
        $student = $multichoise->id;
        return redirect()->route('play', compact('quiz','student'));
    }
    public function play($quiz, $student)
    {
        $quizz = Quiz::find($quiz);
        $question = quiz::with('multichoise.mutichoisechoise')->find($quiz);
        $questiona = quiz::with('matching')->find($quiz);
        $questionb = quiz::with('esay')->find($quiz);
        $questiond = multichoise::with('mutichoisechoise')->find($question->id);
        $questionnn = quiz::with('matching')->find($quiz);
        /*cek adap quiz apa ga*/
        if($question->multichoise != null){
            foreach($question->multichoise as $pilgan){
            return redirect()->route('showpilgan', compact('quiz','student','pilgan'));
            }
        }
        elseif($questiona->matching != null){
            foreach ($question->multichoise as $pilgan) {
                return redirect()->route('showpilgan', compact('quiz', 'student', 'pilgan'));
            }
        } elseif ($questionb->esay != null) {
            foreach ($questionb->esay as $esay) {
                return redirect()->route('showpilgan', compact('quiz', 'student', 'esay'));
            }
        }
    }

    public function showpilgan(Request $request, $quiz,$student, $pilgan)
    {
        $pilgans = multichoise::with(['mutichoisechoise'])->find($pilgan);
        return view('pilgan',compact('quiz','student','pilgans'));
    }

    public function pilganvalid(Request $request,$quiz,$student, $pilgan)
    {
        // Mendapatkan soal dan jawaban yang dipilih oleh user
        $question = mutichoisechoise::find($request->pilgan);

        $selectedAnswer = $request->answer;
        $correct = mutichoisechoise::where('multichoise_id',$pilgan)->where('correct',1)->first();
        // Validasi jawaban yang dipilih user
        if ($question->correct == 1) {
            // Menambahkan skor jika jawaban benar
           $skor = student::find($student);
           $skor->score += 10;
           $skor->save();
           
         //return redirect()->back()->with('success', 'Jawaban anda benar! Klik OK untuk melanjutkan soal berikutnya.'.'\n jawaban yang benar adalah : '.$correct->answer);
        }
        $questiond = matching::with('matchinganswer.matchingansweranswer')->find($quiz);
        $questione = quiz::with('esay')->find($quiz);
        
        //return redirect()->back()->with('error', 'Jawaban anda salah. Klik OK untuk melanjutkan soal berikutnya.');
        $nextsoal = multichoise::where('quiz_id', $quiz)->where('id', '>', $pilgan)->first();
        if($nextsoal){
            return redirect()->route('showpilgan', ['quiz'=> $quiz, 'student'=>$student, 'pilgan' => $nextsoal->id]);
        }elseif($questiond != null){
            return redirect()->route('showdnd', ['quiz' => $quiz, 'student' => $student, 'dnd' => $questiond->id]);
        }
        elseif($questione != null){
            foreach ($questione->esay as $esay) {
                return redirect()->route('showesay', compact('quiz', 'student', 'esay'));
            }
        }
        return redirect()->route('result', compact('quiz', 'student',)); 
    }

    public function showdnd(Request $request, $quiz, $student, $dnd){
        //$dnd = matching::with('matchinganswer.matchingansweranswer')->find($dnd);
        $questiona = quiz::with('matching')->find($quiz);
        $questionb = quiz::with('esay')->find($quiz);
       
        if($questiona->matching != null){
            foreach ($questiona->matching as $dnd) {
                return view('dnd', compact('quiz', 'student', 'dnd'));
            }
        }
        elseif($questionb->esay != null){
            foreach ($questiona->matching as $esay) {
                return view('essay', compact('quiz', 'student', 'esay'));
            }
        }
    }
    
    public function showdndvalid(Request $request, $quiz, $student, $pilgan)
    {
        
    }

    public function showesay(Request $request, $quiz, $student, $esay)
    {
        $esays = esay::find($esay);
        return view('essay', compact('quiz', 'student', 'esay', 'esays'));
    }
    public function showesayvalid(Request $request, $quiz, $student, $esay)
    {
        
        $validatedData = $request->validate([
            'answer' => 'required',
        ]);
        $validatedData['student_id'] = $student;
        $validatedData['quiz_id'] = $quiz;
        $validatedData['esay_id'] = $esay;
        studentesayaswer::create($validatedData);
        
        $nextsoal = esay::where('quiz_id', $quiz)->where('id', '>', $esay)->first();
        if ($nextsoal) {
            return redirect()->route('showesay', ['quiz' => $quiz, 'student' => $student, 'esay' => $nextsoal->id]);
        }
        return redirect()->route('result', compact('quiz', 'student',));
    }
    public function result(Request $request, $quiz, $student)
    {
        $esays = esay::find($quiz);
        $qq = quiz::find($quiz)->multichoise;
        $esaysd = student::where('quiz_id',$quiz)->where('id', $student)->first();
        $qqq = $qq->count();
        $poin = ($esaysd->score/$qqq)*10;
        $bener = $esaysd->score / 10 ;
        $salah = $qqq-($esaysd->score/10);
        return view('resultcard', compact('quiz', 'student', 'esays','poin', 'bener', 'salah'));
    }

    public function showhasil($quiz)
    {
        $esays = quiz::with('student')->find($quiz);
       
        return view('admin.tabel.hasil', compact('quiz','esays'));
    }
    public function showjawaban($quiz,$student)
    {
        $esays = student::with('studentesayaswer')->find($student); //studentesayaswer::where('quiz_id', $quiz)->where('student_id', $student)->first();
        //dd($esays);
        return view('admin.tabel.hasilesay', compact('quiz', 'esays'));
    }
}