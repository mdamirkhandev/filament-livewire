<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class AllServices extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'ASC')->get();
        return view('livewire.all-services', [
            'services' => $services
        ]);
    }
}
