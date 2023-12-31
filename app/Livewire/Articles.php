<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Attributes\Url;

class Articles extends Component
{
    #[Url]
    public $category = null;

    public function render()
    {
        $categories = Category::all();

        if (!empty($this->category)) {
            $categoryUrl = Category::where('slug', $this->category)->first();

            if (empty($categoryUrl)) {
                abort(404);
            }

            $articles = Article::orderBy('created_at', 'DESC')
                ->where('category_id', $categoryUrl->id)
                ->where('status', 1)
                ->paginate(10);
        } else {
            $articles = Article::orderBy('created_at', 'DESC')
                ->where('status', 1)
                ->paginate(10);
        }

        $latestArticles = Article::orderBy('created_at', 'DESC')
            ->where('status', 1)
            ->get()
            ->take(3);
        $tags = Tag::all();
        return view('livewire.articles', [
            'articles' => $articles,
            'categories' => $categories,
            'tags' => $tags,
            'latestArticles' => $latestArticles,
        ]);
    }
}


//



// namespace App\Livewire;

// use App\Models\Article;
// use Livewire\Component;
// use App\Models\Category;
// use Livewire\WithPagination;
// use Livewire\Attributes\Url;

// class Articles extends Component
// {
//     use WithPagination;

//     #[Url]
//     public $category = null;

//     public function render()
//     {
//         $categories = Category::all();

//         $categoryUrl = Category::where('slug', $this->category)->first();

//         if (!empty($categoryUrl)) {
//             $articles = Article::orderBy('created_at', 'DESC')
//                 ->where('category_id', $categoryUrl->id)
//                 ->paginate(2, ['*'], 'page');
//         } else {
//             $articles = Article::orderBy('created_at', 'DESC')
//                 ->paginate(2, ['*'], 'page');
//         }

//         return view('livewire.articles', [
//             'articles' => $articles,
//             'categories' => $categories,
//         ]);
//     }
// }
