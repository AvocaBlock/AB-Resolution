<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\faq;

class SearchController extends Controller
{
    //
    public function testSearch(Request $request){
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

    public function faqSearch(Request $request){
        
    }
}
