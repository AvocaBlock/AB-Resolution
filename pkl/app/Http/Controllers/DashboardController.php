<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\faq;

class DashboardController extends Controller
{
    //
    public function index(){
        if (Auth::check()) {
            if(Auth::user()->isAdmin==1){
                return redirect('/Admin');
            }
            else{
                return redirect('/User');
            }
        }
        else{
            return view('dashboard');
        }
    }
    public function showSearch(Request $request){
        $systems = faq::all();
        if($request->keyword != ''){
            $systems = faq::where('question','LIKE','%'.$request->keyword.'%')->orWhere('answer','LIKE','%'.$request->keyword.'%')->orWhere('s_id','LIKE','%'.$request->keyword.'%')->get();
        }
        else{
            $systems = faq::paginate(5);
        }
        return response()->json([
            'read' => $systems
        ]);
    }
}