<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\faq;
use App\models\System;

class Dropdowns extends Component
{
    public $states;
    public $cities;
   
    public $selectedState = NULL;

    public function mount()
    {
        $this->states = system::all();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.test-dropdowns');
    }
    public function updatedSelectedState($state)
    {
        if (!is_null($state)) {
            $this->cities = faq::where('s_id', $state)->get();
        }
        else{
            $this->citites =faq::all();
        }
    }
}