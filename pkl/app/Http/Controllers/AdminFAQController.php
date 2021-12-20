<?php

namespace App\Http\Controllers;
use Livewire\WithPagination;

use App\Models\faq;
use App\Models\System;
use Illuminate\Http\Request;

class AdminFAQController extends Controller
{
    use WithPagination;
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/CRUD/read',[
            'read'  => faq::all()
        ]);
    }
    public function showSearch(Request $request){
        $systems = faq::all();
        
        if($request->keyword != ''){
            $systems = faq::where('question','LIKE','%'.$request->keyword.'%')->orWhere('answer','LIKE','%'.$request->keyword.'%')->orWhere('s_id','LIKE','%'.$request->keyword.'%')->get();
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
        //
        return view('admin.CRUD.create',[
            'category' => System::all()
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
        $validatedData['s_id'] = $request['s_id'];
        $validatedData = $request->validate([
            's_id' => 'required',
            'question' => 'required',
            'answer' => 'required'
        ]);

        faq::create($validatedData);
        return redirect('/Admin/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(faq $faq)
    {
        //
        return view('admin.CRUD.update',[
            "faq" => $faq ,
            'category' => System::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faq $faq)
    {
        //
        $validatedData = $request->validate([
            'answer' => 'required',
            'question' => 'required'
        ]);

        faq::where('id',$faq->id)
            ->update($validatedData);
        return redirect('/Admin')->with('success','Post Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(faq $faq)
    {
        //
        faq::destroy('id',$faq->id);
        return redirect('/Admin');
    }
}
