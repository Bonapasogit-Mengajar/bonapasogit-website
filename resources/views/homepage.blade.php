@extends('layout/main')

@section('title', 'Bonapasogit Mengajar - Bangun Mimpi Bersama Bonapasogit')

@section('container')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap
                        framework! Just download a theme and start customizing, no strings attached!</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">We've got what you need!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Start Bootstrap has everything you need to get your new website up and
                        running in no time! Choose one of our open source, free to download, and easy to use themes! No
                        strings attached!</p>
                    <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Sturdy Themes</h3>
                        <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Up to Date</h3>
                        <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Ready to Publish</h3>
                        <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Made with Love</h3>
                        <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Project Name">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Category</div>
                            <div class="project-name">Project Name</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <section class="page-section bg-light text-dark">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Ayo Lebih Dekat Dengan Kami</h2>
            <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/creative/">Tentang Kami</a>
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu
                                metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img
                                        src="https://cdn2.vectorstock.com/i/thumb-large/20/76/man-avatar-profile-vector-21372076.jpg"
                                        alt=""></div>
                                <h3 class="title">williamson</h3>
                                <span class="post">Web Developer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu
                                metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img
                                        src="https://cdn2.vectorstock.com/i/thumb-large/20/76/man-avatar-profile-vector-21372076.jpg"
                                        alt=""></div>
                                <h3 class="title">Kristina</h3>
                                <span class="post">Web Designer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu
                                metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img
                                        src="https://cdn2.vectorstock.com/i/thumb-large/20/76/man-avatar-profile-vector-21372076.jpg"
                                        alt=""></div>
                                <h3 class="title">Steve Thomas</h3>
                                <span class="post">Web Developer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="icon fa fa-quote-left"></span>
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu
                                metus, mattis sed sagittis at, sagittis quis neque. Praesent.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic"><img
                                        src="https://cdn2.vectorstock.com/i/thumb-large/20/76/man-avatar-profile-vector-21372076.jpg"
                                        alt=""></div>
                                <h3 class="title">Steve Thomas</h3>
                                <span class="post">Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
