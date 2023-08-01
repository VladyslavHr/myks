<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="row">
        <div class="col-lg-12">
            <ul class="tricky-category-list">
                <li class="category-item">
                    <a href="/tricky-vsechny"
                        class="tricky-category-list-link @if ($choosenCategorySlug === 'all')
                            tricky-categoty-list-link-active
                        @endif"
                        wire:click.prevent="changeCategory('all')">
                            Všechna videa
                        {{-- @if ($choosenCategorySlug === 'all')
                            <i class="bi bi-check-lg"></i>
                        @endif --}}
                    </a>
                </li>
                @foreach ($categories as $category)
                    @if (count($category->videos))
                    <li class="category-list-element">
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
                <option value="created_at/asc">Nový</option>
                <option value="created_at/desc">Starý</option>
            </select>
        </div>
        <div class="col-lg-9">
            {{ $tricks->links() }}
        </div>

    </div>
    <div class="row">
        @foreach ($tricks as $trick)
        <div class="col-lg-4 py-3">
            <h4 class="text-center">{{ $trick->title }}</h4>
            <iframe class="video" style="width:100%; min-height: 400px"
            src="https://www.youtube.com/embed/{{$trick->video}}" allowfullscreen  data-title="{{$trick->seo_title}}" data-keywords="{{$trick->seo_keywords}}" data-description="{{$trick->seo_description}}">
            </iframe>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12">
            {{ $tricks->links() }}
        </div>
    </div>
</div>
