<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-header-footer">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home.index') }}">
        @include('layouts.blocks.logo')
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto" id="header_menu_main">
            <li class="nav-item dropdown ">
                <a class="nav-link link-menu dropdown-toggle {{ (request()->is(['o-spolecnosti', 'o-zakladatelce', 'kontakt'])) ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    O nás
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item link-style" href="{{ route('home.companyInfo') }}">O společnosti</a></li>
                    <li><a class="dropdown-item link-style" href="{{ route('home.founderInfo') }}">O zakladatelce</a></li>
                    <li><a class="dropdown-item link-style" href="{{ route('contact.index') }}">Kontakt</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a class="nav-link link-menu dropdown-toggle {{ (request()->is(['triky', 'video-lekce', 'blog'])) ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Databáze znalostí
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item link-style" href="{{ route('trick.index') }}">Triky</a></li>
                    <li><a class="dropdown-item link-style" href="{{ route('videoLectureCategory.index') }}">Video Lekce</a></li>
                    <li><a class="dropdown-item link-style" href="{{ route('post.index') }}">Blog</a></li>
                </ul>
            </li>
          <li class="nav-item active">
            <a class="nav-link link-menu" href="#">Služby </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link link-menu" href="#">Kurzy</a>
          </li>
          {{-- <li class="nav-item active">
            <a class="nav-link link-menu" href="{{ route('post.index') }}">Blog</a>
          </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link link-menu" href="{{ route('videoLectureCategory.index') }}">Video Lekce</a>
          </li> --}}

          {{-- <li class="nav-item">
            <a class="nav-link link-menu" href="{{ route('contact.index') }}">Kontakt</a>
          </li> --}}
        </ul>
        <script>
            document.querySelectorAll('#header_menu_main a[href="'+location.href+'"]').forEach(link => link.classList.add('active'));
        </script>
      </div>
    </div>
</nav>
