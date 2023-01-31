<?php

namespace App\Http\Controllers;

use App\Models\quiz;
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
        $quizs = quiz::all();
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

    
}