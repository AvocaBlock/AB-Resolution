<?php

namespace App\Http\Controllers;

use App\Models\system;
use App\Models\faq;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return System::latest()->get();
        return view('Admin.System.read',[
            'data' => system::all()
        ]);
    }
    public function showSearch(Request $request){
        $systems = system::all();
        if($request->keyword != ''){
            $systems = system::where('title','LIKE','%'.$request->keyword.'%')->orWhere('desc','LIKE','%'.$request->keyword.'%')->get();
        }
        return response()->json([
            'systems' => $systems
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return System::all();
        return view('Admin.System.create',[
        ]);
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
        $validatedData = $request->validate([
            'title' => 'required|unique:systems',
            'desc' => 'required'
        ]);

        System::create($validatedData);
        return redirect('/Admin/System');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function show(System $system)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function edit(System $System)
    {
        //
        return view('admin.system.update',[
            "system" => $System 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, System $System)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);

        System::where('id',$System->id)
            ->update($validatedData);
        return redirect('/Admin')->with('success','Post Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\System  $system
     * @return \Illuminate\Http\Response
     */
    public function destroy(System $System)
    {
        //
        System::destroy('id',$System->id);
        faq::destroy('s_id',$System->id);
        return redirect('/Admin/System');
    }
}
