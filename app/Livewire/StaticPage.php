<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Team;
use Livewire\Component;

class StaticPage extends Component
{
    public $page;
    public function mount($slug)
    {
        $this->page = Page::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        $teames = Team::all();
        return view('livewire.static-page', [
            'page' => $this->page,
            'teames' => $teames
        ]);
    }
}
