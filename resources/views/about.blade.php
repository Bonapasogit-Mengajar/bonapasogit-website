@extends('layout/main')

@section('title', 'Bonapasogit Mengajar - Tentang Kami')

@section('container')
    <section class="page-section bg-primary" id="about" data-aos="fade-zoom-in">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="200"
                        data-aos-offset="0">Apa itu Bonapasogit Mengajar?</h2>
                    <hr class="divider divider-light" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="200"
                        data-aos-offset="0" />
                    <p class="text-white-75 mb-4"></p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="about" data-aos="fade-up" data-aos-delay="400" data-aos-offset="0">
        <div class="container px-12 px-lg-12">
            <div class="row gx-12 gx-lg-12 justify-content-center">
                <div class="col-lg-12 col-xl-12 text-center">
                    <h2 class="mt-0">Tentang Bonapasogit Mengajar</h2>
                    <hr class="divider" />
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 mb-2">
                            <div class="text-justify mb-2">
                                <p class="text-muted" data-aos="fade-right" data-aos-easing="ease-in-sine">Bonapasogit
                                    Mengajar didirikan tanggal 17 September 2020. Tujuan Bonapasogit mengajar adalah sebagai
                                    media untuk membagikan info mengenai pendidikan kepada masyarakat yang ada di
                                    Bonapasogit khususnya SMA dan Mahasiswa. Diharapkan Bonapasogit mengajar ini dapat
                                    mendorong generasi muda untuk tidak takut bermimpi.</p>
                            </div>
                            <div class="text-justify mb-2" data-aos="fade-right" data-aos-offset="200"
                                data-aos-easing="ease-in-sine">
                                <p class="text-muted">Bonapasogit mengajar juga akan membantu mereka memberikan info seputar
                                    dunia pendidikan dan gambaran karir mereka ke depan. Ke depan, Bonapasogit mengajar akan
                                    mengusahakan mencari mentor yang akan bersedia memberikan waktu untuk membantu
                                    teman-teman Bonapasogit dalam meningkatkan pengetahuan mereka.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-6 mb-2">
                            <div class="text-justify mb-2">
                                <p class="text-muted" data-aos="fade-left">Dengan adanya Bonapasogit mengaja diberharap
                                    semakin menambah pengetahuan dan wawasan generasi muda dari Bonapasogit. Dengan memiliki
                                    generasi yang rata-rata pola pikir nya lebih maju maka daerah Bonapasogit kita juga akan
                                    lebih maju dan berkembang.</p>
                            </div>
                            <div class="text-justify mb-2" data-aos="fade-left" data-aos-offset="200"
                                data-aos-easing="ease-in-sine">
                                <p class="text-muted mb-2">Visi dari Bonapasogit Mengajar adalah untuk engajak semua
                                    generasi muda untuk ambil bagian dalam memajukan pendidikan, khususnya di Bonapasogit
                                </p>
                                <p class="text-muted">Misi dari Bonapasogit Mengajar adalah meyelenggarakan kegiatan sharing
                                    dan kelas online dengan teman seputar pendidikan kepada Masyarakat, siswa dan Mahasiswa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-offset="200" data-aos-anchor-placement="top-bottom">
                        <h4 class="mt-0">Video Perkenalan Bonapasogit Mengajar</h4>
                        <iframe width="750" height="400" src="https://www.youtube.com/embed/kNWDg5DbTHY">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-12 px-lg-12">
            <div class="row gx-12 gx-lg-12 justify-content-center">
                <div class="col-lg-12 col-xl-12 text-center">
                    <h2 class="mt-5" data-aos="fade-up" data-aos-offset="200" data-aos-anchor-placement="top-bottom">Crew
                        Bonapasogit Mengajar</h2>
                    <hr class="divider" data-aos="fade-up" data-aos-offset="200" data-aos-anchor-placement="top-bottom" />
                    <div class="row">
                        <div class="col-lg-4 col-xl-4 mb-5" data-aos="fade-right" data-aos-offset="200"
                            data-aos-anchor-placement="top-bottom">
                            <div class="justify">
                                <img class="profil" src="{{ asset('assets/img/mh_fransisca_nadapdap.jpg') }}"
                                    alt="Avatar">
                                <h4 class="mt-3">MH Fransisca Nadapdap</h4>
                                <h6 class="mt-3">Software Engineer at Tiket.com</h6>
                                <h6 class="mt-3">Content Creator Coordinator</h6>
                                <div class="row justify-content-center">
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 mb-5" data-aos="fade-in" data-aos-offset="200"
                            data-aos-anchor-placement="top-bottom">
                            <div class="justify">
                                <img class="profil" src="{{ asset('assets/img/windiany_l_sitorus.jpg') }}" alt="Avatar">
                                <h4 class="mt-3">Windiany L Sitorus</h4>
                                <h6 class="mt-3">Software Engineer in Test at Bukalapak.com</h6>
                                <h6 class="mt-3">Content Creator Coordinator</h6>
                                <div class="row justify-content-center">
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 mb-5" data-aos="fade-left" data-aos-offset="200"
                            data-aos-anchor-placement="top-bottom">
                            <div class="justify">
                                <img class="profil" src="{{ asset('assets/img/ayu_nainggolan.jpg') }}" alt="Avatar">
                                <h4 class="mt-3">Ayu Nainggolan</h4>
                                <h6 class="mt-3">Software Engineer in Test at Bukalapak.com</h6>
                                <h6 class="mt-3">Event Organizer/Facilitator Coordinator</h6>
                                <div class="row justify-content-center">
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 mb-5" data-aos="fade-right" data-aos-offset="200"
                            data-aos-anchor-placement="top-bottom">
                            <div class="justify">
                                <img class="profil" src="{{ asset('assets/img/mei_fanora_samosir.jpg') }}" alt="Avatar">
                                <h4 class="mt-3">Mei Fanora Samosir</h4>
                                <h6 class="mt-3">Software Engineer at Advotics/h6>
                                    <h6 class="mt-3">Digital Marketing Coordinator</h6>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-1">
                                            <a href="#">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="col-xl-1">
                                            <a href="#">
                                                <span class="fa fa-instagram"></span>
                                            </a>
                                        </div>
                                        <div class="col-xl-1">
                                            <a href="#">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-4 mb-2">

                        </div>
                        <div class="col-lg-4 col-xl-4 mb-5" data-aos="fade-left" data-aos-offset="200"
                            data-aos-anchor-placement="top-bottom">
                            <div class="justify">
                                <img class="profil" src="{{ asset('assets/img/lamhot_siagian.jpg') }}" alt="Avatar">
                                <h4 class="mt-3">Lamhot Siagian</h4>
                                <h6 class="mt-3">Software Engineer in Test, Dexcom</h6>
                                <h6 class="mt-3">Digital Marketing Coordinator</h6>
                                <div class="row justify-content-center">
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-instagram"></span>
                                        </a>
                                    </div>
                                    <div class="col-xl-1">
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
