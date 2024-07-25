<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="row">
        <div class="col-lg-12">
            <ul class="tricky-category-list">
                <li class="category-item py-3">
                    <a href="/tricky-vsechny"
                        class="tricky-category-list-link @if ($choosenCategorySlug === 'all')
                            tricky-categoty-list-link-active
                        @endif"
                        wire:click.prevent="changeCategory('all')">
                            Všechny blogy
                        {{-- @if ($choosenCategorySlug === 'all')
                            <i class="bi bi-check-lg"></i>
                        @endif --}}
                    </a>
                </li>
                @foreach ($categories as $category)
                    @if (count($category->posts))
                    <li class="category-list-element py-3">
                        <a href="/tricky?categoria={{$category->slug}}"
                            class="tricky-category-list-link @if ($category->slug == $choosenCategorySlug) tricky-categoty-list-link-active @endif"
                            wire:click.prevent="changeCategory('{{ $category->slug }}')">
                            {{$category->title}}
                            {{-- @if ($category->slug == $choosenCategorySlug)
                                <i class="bi bi-check-lg"></i>
                            @endif --}}
                        </a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row align-items-center pb-3 pt-5">
        <div class="col-lg-3">
            <select wire:model="sortingSelectValue" class="form-select sorting-select">
                <option value="title/asc">A-Z</option>
                <option value="title/desc">Z-A</option>
                <option value="created_at/desc">Nový</option>
                <option value="created_at/asc">Starý</option>
            </select>
        </div>
        <div class="col-lg-9">
            {{ $posts->links() }}
        </div>

    </div>
    <div class="row">
        @foreach ($posts as $post)
        <a href="{{ route('post.show', $post->slug) }}" class="col-lg-3 py-3">
            <div class="">
                <img style="width: 100%" src="{{$post->image}}" alt="">
            </div>
            <h5 class="text-center pt-2">{{ $post->title }}</h5>
        </a>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12">
            {{ $posts->links() }}
        </div>
    </div>
</div>
