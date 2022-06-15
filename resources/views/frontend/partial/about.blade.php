@extends('frontend.layout.index')
@section('title', 'About')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>About</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>About</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <h2>Ceotech_</h2>
        <h3>Creative Entrepreneur Of Technology </h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p style="text-indent: 20px">
            Entrepreneurship atau kewirausahaan adalah sebuah tema yang cukup menarik untuk dibicarakan dan juga ditekuni oleh beberapa orang karena menjanjikan sebuah kesuksesan karir dan finansial bagi yang berhasil menjalaninya. Dunia Teknologi Informasi (IT) adalah sebuah dunia usaha dan teknologi yang paling banyak menghasilkan entrepreneur yang sukses baik secara bisnis maupun keuangan.
        </p>
        <p style="text-indent: 20px">
            Mahasiswa STMIK Handayani Makassar memiliki banyak potensi  untuk bisa berwirausaha dan  bersaing di dunia industri dengan memanfaatkan Teknologi Informasi (IT), dari hal diatas dibentuklah sebuah organisasi yang bernama Ceotech sebagai wadah untuk mewujudkan hal tersebut dengan mamadupadankan Teknologi Informasi (IT) dan Bisnis itu sendiri.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Daftar</h2>
            <p>Pengurus Ceotech_</p>
        </div>

        <div class="row">
            @foreach ( $positions as $item )
            <div class="col-lg-6 mt-lg-4">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset ('storage/'.$item->picture) }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>{{ $item->name }}</h4>
                        <small class="text-secondary">{{ $item->n_induk }}</small>
                        <span><b>{{ $item->position }}</b></span>
                        <p>#maronsquad</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>
<!-- End Team Section -->

</main>
@endsection
