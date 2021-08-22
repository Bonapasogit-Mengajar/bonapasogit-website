@extends('layout/main')

@section('title', 'Bonapasogit Mengajar - Relawan')

@section('container')
<section class="page-section bg-primary" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Content Creator Volunteer</h2>
                <hr class="divider divider-light" />
            </div>
        </div>
    </div>

    <!-- Testimoni -->
    <section class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="volunteer">
                            <div class="volunter-content">
                                <div class="pic"><img src="{{ asset('assets/img/volunteer/kotrel_manurung.jpg') }}" alt=""></div>
                                <h3 class="title">Kotrel Manurung</h3>
                                <span class="post"></span>
                            </div>
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                "Tertarik untuk mengajarkan bahasa pemrograman kepada siswa SMA, dan karena belum banyak yang mengetahuinya"
                            </p>
                            <a href="https://www.instagram.com/cottrell_manurung/"><i class="bi bi-instagram"></i></a>
                        </div>
                        <div class="volunteer">
                            <div class="volunter-content">
                                <div class="pic"><img src="{{ asset('assets/img/volunteer/moilan_panjaitan.jpg') }}" alt=""></div>
                                <h3 class="title">Moilan Panjaitan</h3>
                                <span class="post"></span>
                            </div>
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                "Saya cukup tertarik dengan visi dan misi komunitas "Bonapasogit Mengajar" ini. Sehingga, sebagai seorang mahasiswa, penting bagi saya untuk mengambil peran dalam berbagi dengan sekitar. Karena kalau bukan sekarang kapan lagi, kalau bukan kita siapa lagi"
                            </p>
                            <a href="https://www.instagram.com/moilano_obcp/"><i class="bi bi-instagram"></i></a>
                        </div>
                        <div class="volunteer">
                            <div class="volunter-content">
                                <div class="pic"><img src="{{ asset('assets/img/volunteer/boy_purba.jpg') }}" alt=""></div>
                                <h3 class="title">Boy Josapat Purba</h3>
                                <span class="post"></span>
                            </div>
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                "Memberikan edukasi seputar IT untuk masyarakat bona pasogit, dan memberikan dampak signifikan untuk kemajuan dan taraf hidup di bona pasogit dengan memaksimalkan potensi IT yang dimiliki anak-anak dari bona pasogit"
                            </p>
                            <a href="https://www.instagram.com/boyjhopurba//"><i class="bi bi-instagram"></i></a>
                        </div>
                        <div class="volunteer">
                            <div class="volunter-content">
                                <div class="pic"><img src="{{ asset('assets/img/volunteer/ernestia_manurung.jpg') }}" alt=""></div>
                                <h3 class="title">Ernestia Manurung</h3>
                                <span class="post"></span>
                            </div>
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                "Membantu menyediakan konten yang mengedukasi & menarik sehingga banyak yang mengikuti konten Bonapasogit Mengajar"
                            </p>
                            <a href=""><i class="bi bi-instagram"></i></a>
                        </div>
                        <div class="volunteer">
                            <div class="volunter-content">
                                <div class="pic"><img src="{{ asset('assets/img/volunteer/olvi_silalahi.jpg') }}" alt=""></div>
                                <h3 class="title">Olvi Lora Silalahi</h3>
                                <span class="post"></span>
                            </div>
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                "Ingin memberikan kontribusi yang bermanfaat buat teman-teman terutama yang di Bonapasogit dan ingin belajar tentang video & foto editing"
                            </p>
                            <a href="https://www.instagram.com/olviloraa"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>






@endsection