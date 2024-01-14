<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number = 0;
    public function render()
    {
        return view('livewire.counter');
    }

    public function add()
    {
        $this->number++;
    }

    public function substract()
    {
        $this->number--;
    }
}