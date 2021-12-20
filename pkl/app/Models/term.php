<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\stoplist;
use Illuminate\Support\Str;

class term extends Model
{
    use HasFactory;
    protected $guarded = [
        'term_id'
    ];

    public static function trim($words)
    {
        // Word = Cara daftar akun oase
        $words = str::lower(preg_replace("/[^a-zA-Z0-9\s]/", "", $words));
        $words = explode(' ', $words);
        foreach($words as $words){
            if (stoplist::where('word', $words)->doesntExist()){
                $terms = term::where('word',$words)->get();
                $total_d = faq::all()->count();
                $d = $terms->count();
                $idf = log10($total_d / $d);
                foreach($terms as $term){
                    $tf = $term->freq;
                    $total_word = term::where('faq_id',$term->faq_id)->sum('freq');
                    $TF = $tf / $total_word;
                    $TF_IDF = $TF * $idf;
                    echo ($words.' - ID: '.$term->faq_id.'/ Freq: '.$tf.'</br>');
                    echo('Count TF: </br>');
                    echo('Total_Words: '.$total_word.', IDF:'.$tf.'/'.$total_word.'='.$TF.'</br>');
                    echo('Count IDF </br>');
                    echo('d with terms: '.$d.', Total D:'.$total_d.', IDF = log('.$total_d.'/'.$d.')='.$idf.'</br>');
                    echo('TF_IDF VALUE: '.$TF_IDF. '</br>');
                    echo('</br>'); 
                    // echo( /TF-IDF:'.$D.'</br>');
                    // COUNT TOTAL WORD Freq where faq_id = term->faq_id
                }
            }
        }
    }

    public static function trim_faq($id, $word)
    {
        // $words = str::lower(preg_replace("/[^a-zA-Z0-9\s]/", "", $words));
        // $words = explode(' ', $words);
        // foreach($words as $words) {
        //     // WORD TIDAK ADA DI TABEL
        //     if (stoplist::where('word', $words)->doesntExist()) {
        //         // MAKE FUNCTION TO INSERT WORD TO Term Table
        //         $validated['word'] = $words;
        //         $validated['faq_id'] = $data->id;
        //         // MEMBUAT FREKEUNSI = 1 DAN INPUT
        //         if (term::where([['word', '=', $validated['word']], ['faq_id', '=', $validated['faq_id']]])->doesntExist()) {
        //             $validated['freq'] = 1;
        //             term::create($validated);
        //         }
        //         // MENAMBAH JUMLAH FREKUENSI DAN INPUT
        //         else {
        //             $validated['freq'] = term::where([['word', '=', $validated['word']], ['faq_id', '=', $validated['faq_id']]])->first('freq');
        //             $validated['freq'] = $validated['freq']->freq;
        //             $validated['freq']++;
        //             echo ($validated['freq']);
        //             term::where([['word', '=', $validated['word']], ['faq_id', '=', $validated['faq_id']]])->update(['freq' => $validated['freq']]);
        //         }
        //     }
        // }
    }



    public static function idf($words)
    {
        term::trim($words);
        // echo($searchText);
    }
}
