<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\system;
use App\Models\test;
use App\Models\term;
use Illuminate\Http\Request;
use App\Models\stoplist;
use Illuminate\Support\Str;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = faq::paginate(5);
        return view('test.index', [
            compact('data'),'category' => System::all()]);
    }
    public function indexing()
    {
        //TRIMMING WORD USING STOPLIST

        $data = faq::all();
        // CALL TRIM FUNCTION TO TRIM DATA
        if (term::all()->isEmpty()) {
            foreach ($data as $data) {
                // term::trim($data);
                echo ($data);
                // INDEX QUESTION
                $words = $data->question . ' ' . $data->answer;
                //Start Triming by Explode data first
                $words = str::lower(preg_replace("/[^a-zA-Z0-9\s]/", "", $words));
                $words = explode(' ', $words);
                foreach($words as $words) {
                    // WORD TIDAK ADA DI TABEL
                    if (stoplist::where('word', $words)->doesntExist()) {
                        // MAKE FUNCTION TO INSERT WORD TO Term Table
                        $validated['word'] = $words;
                        $validated['faq_id'] = $data->id;
                        // MEMBUAT FREKEUNSI = 1 DAN INPUT
                        if (term::where([['word', '=', $validated['word']], ['faq_id', '=', $validated['faq_id']]])->doesntExist()) {
                            $validated['freq'] = 1;
                            term::create($validated);
                        }
                        // MENAMBAH JUMLAH FREKUENSI DAN INPUT
                        else {
                            $validated['freq'] = term::where([['word', '=', $validated['word']], ['faq_id', '=', $validated['faq_id']]])->first('freq');
                            $validated['freq'] = $validated['freq']->freq;
                            $validated['freq']++;
                            echo ($validated['freq']);
                            term::where([['word', '=', $validated['word']], ['faq_id', '=', $validated['faq_id']]])->update(['freq' => $validated['freq']]);
                        }
                    }
                }
            }
        } else
            return view('handler.error', [
                'error_msg' => 'Term is Already Created. '
            ]);
    }
    public function get_ajax(Request $request)
    {
        if ($request->ajax()) {
            $data = faq::paginate(5);
            return view('pagination_data', compact('data'))->render();
        }
    }
    public function idf()
    {
        // COUNT IDF , idf dihitung dari jumlah kata dibagi total kata tiap tiap dokument jadi nanti akan ada idf1 , idf2 dst:
        // COUNT D , D dihitung dari Jumlah total dokument / dokument yang berisi kata term. 
        // Kemudian dihitung TF * IDF , lalu list dari paling besar kepada paling kecil
        // 

        term::idf('cara daftar akun oase');
    }
    public function tf()
    {
        $data = faq::paginate(5);
        return view('tf.index', compact('data'));
    }

    public function showTest(Request $request)
    {
        $systems = system::all();
        if ($request->keyword != '') {
            $systems = system::where('title', 'LIKE', '%' . $request->keyword . '%')->orWhere('desc', 'LIKE', '%' . $request->keyword . '%')->get();
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
     * @param  \App\Models\test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(test $test)
    {
        //
        $data = term::paginate(5);
        return view('test.termShow', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(test $test)
    {
        //
    }
}
