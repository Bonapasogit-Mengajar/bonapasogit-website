@extends('layout/main')

@section('title', 'Bonapasogit Mengajar - Bangun Mimpi Bersama Bonapasogit')

@section('container')
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Bangun Mimpi Bersama Bonapasogit</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Mari kita bersama membangun pendidikan di Indonesia khususnya Bonapasogit!
                </p>
                <a class="btn btn-light btn-xl" href="#about">Siapa Kami?</a>
            </div>
        </div>
    </div>
</header>
<!-- About-->
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Apa itu Bonapasogit Mengajar?</h2>
                <hr class="divider divider-light" />
                <p class="text-white-75 mb-4">Bonapasogit Mengajar adalah komunitas yang dibentuk dengan tujuan sebagai
                    media untuk membagikan info mengenai pendidikan kepada masyarakat yang ada di Bonapasogit khususnya
                    SMA dan Mahasiswa</p>
                <a class="btn btn-light btn-xl" href="#services">Kegiatan Kami</a>
            </div>
        </div>
    </div>
</section>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Yang Kami Lakukan</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5 d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Sharing Session</h3>
                    <p class="text-muted mb-0">Sharing Session dilakukan di IG kami dan juga diupload di youtube kami
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">QnA</h3>
                    <p class="text-muted mb-0">Kami juga menyediakan QnA di IG Story kami terkait pekerjaan atau
                        perkuliahan </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Pembelajaran Gratis</h3>
                    <p class="text-muted mb-0">Tetap cek IG kami untuk informasi seputar kelas gratis yang tersedia</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-->
<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="container">

            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/kegiatan/kegiatan1.jpg') }}" title="Why and How to Study in Taiwan">
                        <img class="img-fluid" src="{{ asset('assets/img/kegiatan/kegiatan1.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">IG Live</div>
                            <div class="project-name">Why and How to Study in Taiwan</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/kegiatan/kegiatan2.jpg') }}" title="Perjalanan Menjadi Pramugari">
                        <img class="img-fluid" src="{{ asset('assets/img/kegiatan/kegiatan2.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">IG Live</div>
                            <div class="project-name">Perjalanan Menjadi Pramugari</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/kegiatan/kegiatan3.jpg') }}" title="TOEFL Class Batch I">
                        <img class="img-fluid" src="{{ asset('assets/img/kegiatan/kegiatan3.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Bimbel Gratis</div>
                            <div class="project-name">TOEFL Class Batch I</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/kegiatan/kegiatan4.jpg') }}" title="IELTS Class Batch I">
                        <img class="img-fluid" src="{{ asset('assets/img/kegiatan/kegiatan4.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Bimbel Gratis</div>
                            <div class="project-name">IELTS Class Batch I</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/kegiatan/kegiatan5.jpg') }}" title="Membidik Beasiswa Part 2">
                        <img class="img-fluid" src="{{ asset('assets/img/kegiatan/kegiatan5.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Webinar</div>
                            <div class="project-name">Membidik Beasiswa Part 2</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/kegiatan/kegiatan6.jpg') }}" title="English Mini Workshop">
                        <img class="img-fluid" src="{{ asset('assets/img/kegiatan/kegiatan6.jpg') }}" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Workshop</div>
                            <div class="project-name">English Mini Workshop</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to action-->
<section class="page-section bg-light text-dark">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Ayo Lebih Dekat Dengan Kami</h2>
        <a class="btn btn-primary btn-xl" href="<?= url('/about') ?>">Tentang Kami</a>
    </div>
</section>
<!-- Testimoni -->
<section class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Bonapasogit Mengajar memiliki tujuan yang jelas yaitu bersama membangun pendidikan di Indonesia khususnya Bonapasogit (kampung halaman). Dengan tujuan tersebut saya termotivasi untuk ikut bergabung disaat situasi yang semakin sulit saat ini dan semakin maraknya pendidikan jarak jauh.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="{{ asset('assets/img/mh_fransisca_nadapdap.jpg') }}" alt=""></div>
                            <h3 class="title">MH Fransisca Nadapdap</h3>
                            <span class="post">Software Engineer at Tiket.com</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Karena hidup bukan untuk diri sendiri, kita hidup harus berbagi dan bermanfaat bagi orang lain. I really hope Bonapasogit Mengajar jadi wadah untuk berbagi informasi kepada masyarakat, terutama adik adik di kampung halaman, supaya mereka dapat informasi dan motivasi untuk mewujudkan mimpi-mimpi mereka.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="{{ asset('assets/img/windiany_l_sitorus.jpg') }}" alt=""></div>
                            <h3 class="title">Windiany L Sitorus</h3>
                            <span class="post">Software Engineer in Test at Bukalapak.com</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Di masa sulit pandemi tahun 2020, kita dihadapkan dengan a new way of life. Kebayang dengan adik-adik yg kesulitan menghadapi sistem belajar secara online. So, Bonapasogit Mengajar bertujuan untuk membantu teman-teman agar memiliki akses ke informasi seputar pendidikan secara GRATIS. Sehingga mereka termotivasi dan semakin semangat untuk mencapai mimpi dan cita-cita mereka.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="{{ asset('assets/img/ayu_nainggolan.jpg') }}" alt=""></div>
                            <h3 class="title">Ayu Nainggolan</h3>
                            <span class="post">Software Engineer in Test at Bukalapak.com</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Akan sangat menyenangkan jika banyak orang yang peduli dengan pendidikan dan semakin banyak orang yang berani untuk mengejar mimpi mereka, tanpa memandang siapa dan dimana mereka. Memotivasi diri saya sendiri dan orang lain untuk tetap belajar, berkembang dan lebih baik lagi adalah alasan kenapa saya bergabung dengan Bonapasogit Mengajar.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="{{ asset('assets/img/mei_fanora_samosir.jpg') }}" alt=""></div>
                            <h3 class="title">Mei Fanora Samosir</h3>
                            <span class="post">Software Engineer at Advotics</span>
                        </div>
                    </div>
                    <div class="testimonial">
                        <span class="icon fa fa-quote-left"></span>
                        <p class="description">
                            Banyak anak-anak yang putus sekolah, tidak kuliah, bahkan pengangguran karena akses & kualitas pendidikan yang minim, serta ekonomi yang kurang mendukung. Hal ini mendorong saya untuk berkontribusi melalui Bonapasogit Mengajar menyediakan akses pendidikan gratis dan memfasilitasi para kaum muda yang rindu untuk berbagi dan belajar.
                        </p>
                        <div class="testimonial-content">
                            <div class="pic"><img src="{{ asset('assets/img/lamhot_siagian.jpg') }}" alt=""></div>
                            <h3 class="title">Lamhot Siagian</h3>
                            <span class="post">Software Engineer in Test, Dexcom</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection