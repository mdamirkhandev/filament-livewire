<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;

class Teames extends Component
{
    public function render()
    {
        $teames = Team::all();
        return view('livewire.teames', [
            'teames' => $teames
        ]);
    }
}
