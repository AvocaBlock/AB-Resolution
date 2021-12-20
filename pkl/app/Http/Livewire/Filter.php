<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\models\faq;

class Search extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.filter',[
            'users' => faq::where('question','like', $searchTerm)->paginate(10)
        ]);
    }
}