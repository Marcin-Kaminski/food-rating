<?php

namespace App\Livewire;

use Livewire\Component;

class MealComponent extends Component
{
    public function render()
    {
        return view('livewire.meal-component');
    }
    public function goToBreakfast()
    {
        $this->redirect('/breakfast');
    }
}
