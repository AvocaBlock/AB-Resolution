<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\models\faq;

class Tf extends Component
{
    use WithPagination;
    public $searchTerm;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.tf',[
            'data' => faq::where('question','like', $searchTerm)->paginate(5)
        ]);
    }
}
