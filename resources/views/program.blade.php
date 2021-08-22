@extends('layout/main')

@section('title', 'Bonapasogit Mengajar - Program Kerja')

@section('container')
<section class="page-section bg-primary" id="proker">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Berikut adalah Program Kerja Kami</h2>
                <hr class="divider divider-light" />
            </div>
        </div>
    </div>
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 d-flex justify-content-center">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-white"></i></div>
                    <a class="btn btn-light btn-xl" href="#sharing">Sharing Session</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-white"></i></div>
                    <a class="btn btn-light btn-xl" href="#qna">QnA</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-white"></i></div>
                    <a class="btn btn-light btn-xl" href="#belajar-gratis">Pembelajaran Gratis</a>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="page-section" id="sharing">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-black mt-0">Sharing Session</h2>
                <hr class="divider" />
                <p class="text-black-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-grey" id="qna">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-black mt-0">QnA</h2>
                <hr class="divider" />
                <p class="text-black-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="belajar-gratis">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-black mt-0">Pembelajaran Gratis</h2>
                <hr class="divider" />
                <p class="text-black-75 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
            </div>
        </div>
    </div>
</section>
@endsection