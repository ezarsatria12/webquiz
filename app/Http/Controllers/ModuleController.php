<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.modul2', [
            'moduls' => module::where('user_id', auth()->user()->id)->paginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addmodul');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'moduletitle'=>'required',
            'moduledesc'=>'required',
            'media'=>'required|file'
        ]);
        if($request->file('media')){
            $validatedData['media'] = $request->file('media')->store('modulemedia');
        }
        $validatedData['user_id'] = Auth::id();
        module::create($validatedData);
        return redirect('/module');
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
    public function edit($module)
    {
        $modul = module::find($module);
        return View('admin.editmodul', [
            'moduls' => $modul
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,module $module)
    {
        $rules=[
            'moduletitle'=>'required',
            'moduledesc'=>'required',
            'media'=>'required|file'
        ];
        $validatedData = $request->validate($rules);
        storage::delete($module->media);
        $validatedData['media'] = $request->file('media')->store('modulemedia');
        module::where('id', $module)
            ->update($validatedData);

        return redirect('/module');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(module $module)
    { 
        Storage::delete($module->media);
        $module->delete();
        return redirect('/module')->with('success', 
        'Data telah dihapus.'); 
    }
}