<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\models\faq;
use App\models\System;

class Search extends Component
{
    use WithPagination;
    public $searchTerm;
    
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search',[
            'users' => faq::where('question','like', $searchTerm)->paginate(5)
        ]);
    }
    /* 
    public function render()
    {
        $searchTerm = term::trim();
        $searchTerm = term::idf($searchTerm);
        return view('livewire.idf',[
            'data' => $searchTerm->paginate(5);
        ])
        foreach($searchTerm as $data){
            echo($data->question);
            echo($data->answer);
        }
    }
    
    */
}