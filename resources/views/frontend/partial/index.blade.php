@extends('frontend.layout.index')
@section('title', 'Home')

@section('content')
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            {{-- style="background-image: url(storage/images/thumbnail2.jpeg)" --}}
            <!-- Slide 1 -->
            <div class="carousel-item active homepage-bg-1" >
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown"><span>Ceotech_</span>
                        </h2>
                        <p class="animate__animated animate__fadeInUp">CEOTECH adalah Organisasi kemahasiswaan intra perguruan tinggi yang berstatuskan Unit Kegiatan Mahasiswa di STMIK Handayani Makassar.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row content">
                <div class="col-lg-6">
                    <h2>Creative Entrepreneur Of Technology </h2>
                    <h3>CEOTECH didirikan pada tanggal 17 Desember 2014 di Digital Inovation Lounge (DI.LO).
                    </h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h5>
                        Visi
                    </h5>
                    <ul>
                        <li>
                            <i class="ri-check-line"></i>Meningkatkan Ilmu Pengetahuan di bidang Teknologi Informasi dan Komputer serta mengarahkan mahasiswa untuk menciptakan karya-karya inovatif dan kreatif yang siap bersaing di dunia kampus dan dunia Industri.
                        </li>
                    </ul>
                    <h5>
                        Misi
                    </h5>
                    <ul>
                        <li>
                            <i class="ri-check-line"></i>Melaksanakan pendidikan dan pelatihan kepada anggota untuk mengembangkan minat dan bakat di bidang IPTEK dan Ekonomi kreatif.
                        </li>
                        <li>
                            <i class="ri-check-line"></i>Mengembangkan potensi seluruh Anggota.
                        </li>
                        <li>
                            <i class="ri-check-line"></i>Menyiapkan anggota dalam penguasaan pengetahuan, sikap dan keterampilan individual maupun kerjasama kelompok.
                        </li>
                        <li>
                            <i class="ri-check-line"></i>Menghasilkan karya-karya dibidang IPTEK dan Ekonomi kreatif.
                        </li>
                        <li>
                            <i class="ri-check-line"></i>Menjalin dan memperkuat kerjasama dengan organisasi internal maupun eksternal kampus.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

</main><!-- End #main -->
@endsection
