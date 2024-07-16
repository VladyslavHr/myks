<!-- Footer -->
<footer class="text-center text-lg-start bg-header-footer text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        {{-- <span>Get connected with us on social networks:</span> --}}
        <span>Propojte se s námi na sociálních sítích:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        {{-- <a href="" target="_blank" class="me-4 link-secondary">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" target="_blank" class="me-4 link-secondary">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" target="_blank" class="me-4 link-secondary">
          <i class="fab fa-google"></i>
        </a>
        <a href="" target="_blank" class="me-4 link-secondary">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" target="_blank" class="me-4 link-secondary">
          <i class="fab fa-linkedin"></i>
        </a> --}}
        <a href="https://www.youtube.com/@MyksBI" target="_blank" title="YouTube" class="me-4 link-secondary">
          YouTube
          <i class="fa-brands fa-youtube ms-2"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <div class="d-flex">
                <div class="footer-logo">
                    @include('layouts.blocks.logo')
                </div>

                {{-- <h6 class="text-uppercase fw-bold mb-4">
                  Myks.cz
                </h6> --}}
            </div>

            <p>
                Řešíme podnikové úkoly prostřednictvím analýzy
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Databáze znalostí
            </h6>
            <p>
              <a href="{{ route('trick.index') }}" class="text-reset">Triky</a>
            </p>
            <p>
              <a href="{{ route('videoLectureCategory.index') }}" class="text-reset">Video Lekce</a>
            </p>
            <p>
              <a href="{{ route('post.index') }}" class="text-reset">Blog</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                O nás
            </h6>
            <p>
              <a href="{{ route('home.companyInfo') }}" class="text-reset">O společnosti</a>
            </p>
            <p>
              <a href="{{ route('home.founderInfo') }}" class="text-reset">O zakladatelce</a>
            </p>
            <p>
              <a href="{{ route('contact.index') }}" class="text-reset">Kontakt</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Kontakt</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i>Praha, Česka Republika</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              info@myks.cz
            </p>
            <p><i class="fas fa-phone me-3 text-secondary" href="tel:+420703424840"></i> +420 703 424 840</p>
            {{-- <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p> --}}
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      {{-- © 2021 Copyright: --}}
      {{-- <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a> --}}
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
