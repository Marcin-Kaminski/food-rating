<?php

namespace App\Livewire;

use App\Models\Meal;
use Livewire\Component;

class BreakfastComponent extends Component
{
    public function index()
    {
        $meals = Meal::where('category', 'breakfast')->get();
        return view('livewire.breakfast-component', compact('meals'));
    }
}
