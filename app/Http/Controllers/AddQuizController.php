<?php

namespace App\Http\Controllers;

use App\Models\multichoise;
use App\Models\quiz;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AddQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($ids)
    {
        $id = quiz::find($ids);
        $quiz = new quiz();
        return view('admin.tabel.pilgantabel', compact('id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpilgan($ids)
    {
        $id = quiz::find($ids);
       
        $quiz = new quiz();
        return view('livewire.addsoal', compact('id'));
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepilgan( Request $request, quiz $quiz,$ids)
    {
        ddd($quiz);
        $id = quiz::find($ids);
        $order = multichoise::create([
            'media'=> $request->media,
            'question' => $request->question,
        ]);
        $validatedData['quiz_id'] = quiz::id();
        foreach ($request->opsi as $opsi) {
            $order->products()->attach(
                $opsi['product_id'],
                ['quantity' => $opsi['quantity']]
            );
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function creatednd($id)
    {

        $quiz = new quiz();
        return view('livewire.addsoal', compact('id', 'quiz'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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