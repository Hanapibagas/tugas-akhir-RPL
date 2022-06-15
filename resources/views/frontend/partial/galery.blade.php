@extends('frontend.layout.index')
@section('title', 'Galery')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Karya Pengurus</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>>Karya Pengurus</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row portfolio-container">

          @foreach ( $creations as $item )
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset ('storage/'.$item->picture) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $item->cover }}</h4>
                <p>{{ $item->description }}</p>
                <div class="portfolio-links">
                  <a href="{{ asset ('storage/'.$item->picture) }}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="{{ $item->link }}" target="_blank"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection
