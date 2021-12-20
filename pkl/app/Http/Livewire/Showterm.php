<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\models\term;

class Showterm extends Component
{
    use WithPagination;
    public $searchTerm;
    
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.showterm',[
            'data' => term::where('word','like', $searchTerm)->paginate(5)
        ]);
    }
}