<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class BlogDetail extends Component
{
    public $singleArticle;

    public function mount($id)
    {
        $this->singleArticle = Article::select('articles.*', 'categories.name as category_name')
            ->leftJoin('categories', 'categories.id', 'articles.category_id')
            ->findOrFail($id);
    }
    public function render()
    {

        return view(
            'livewire.blog-detail',
            ['singleArticle' => $this->singleArticle]
        );;
    }
}
