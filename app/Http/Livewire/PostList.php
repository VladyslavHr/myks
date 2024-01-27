<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{PostCategory, Post};
// use App\Services\Cart;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';

    public $category;
    public $categories;
    public $choosenCategorySlug = 'all';
    public $sortingSelectValue = null;
    public $sortingBy = 'title';
    public $sortingDirection = 'asc';
    public $queryParams = [];

    public function updatedSortingSelectValue()
    {
        $this->sortingBy = explode('/', $this->sortingSelectValue)[0];
        $this->sortingDirection = explode('/', $this->sortingSelectValue)[1] ?? 'asc';
        $this->setQueryParams(['sortingBy' => $this->sortingBy, 'sortingDirection' => $this->sortingDirection]);

    }

    public function changeCategory($categorySlug)
    {
        $this->choosenCategorySlug = $categorySlug;

        $this->setQueryParams(['category' => $categorySlug]);

    }

    public function setQueryParams($params = [])
    {
        $this->queryParams = array_merge($this->queryParams, $params);

        $queryString = '?' . http_build_query($this->queryParams);

        $this->emit('urlChange', $queryString);

        $this->resetPage();

    }

    public function mount()
    {
        $this->queryParams = $_GET;
        $this->sortingBy = request('sortingBy') ?? 'title';
        $this->sortingDirection = request('sortingDirection') ?? 'asc';
        $this->sortingSelectValue = $this->sortingBy . '_' . $this->sortingDirection;
    }


    public function render()
    {
        if (request('category')) {
            $this->choosenCategorySlug = request('category');
        }

        $this->category = PostCategory::where('slug', $this->choosenCategorySlug)->first();

        $this->categories = PostCategory::all();

        $posts = $this->category?->posts() ?? Post::query();

        $posts = $posts->orderBy($this->sortingBy, $this->sortingDirection)->paginate(10);

        return view('livewire.post-list', [
            'posts' => $posts,
        ]);
    }
}
