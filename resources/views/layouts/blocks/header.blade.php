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
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('trick.index') }}">Triky</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('videoLectureCategory.index') }}">Video Lekce</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Projekty</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.index') }}">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  {{-- <nav class="navbar navbar-expand-lg bg-light video-bg">
    <div class="container-fluid">
      <a class="navbar-brand main-logo-link" href="{{ route('home.index') }}">
        @include('layouts.blocks.logo')
      </a>
      <button class="navbar-toggler burger-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Tricky</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('videoLectureCategory.index') }}">Video Lekce</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projekty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>

      </div>
    </div>
</nav> --}}
  <!-- Page Content -->
  {{-- <section class="pt-5">
    <div class="container">
      <h1 class="fw-light">Full Page Image Slider</h1>
      <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images
        in this snippet are from <a href="https://unsplash.com">Unsplash</a>, taken by <a href="https://unsplash.com/@joannakosinska">Joanna Kosinska</a>!</p>
    </div>
  </section> --}}
