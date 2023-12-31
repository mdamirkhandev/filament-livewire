<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Team;
use Livewire\Component;

class StaticPage extends Component
{
    public $pageId = null;

    public function mount($id)
    {
        $this->pageId = $id;
    }

    public function render()
    {
        $page = Page::findOrFail($this->pageId);
        $teames = Team::all();
        return view('livewire.static-page', [
            'page' => $page,
            'teames' => $teames
        ]);
    }
}
