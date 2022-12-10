@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">This site is under construction</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    We're sorry, the page you have looked for is under construction
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/frontsite/img/carousel-1.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/frontsite/img/carousel-1.jpg') }}" alt="" />
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">
                                    Pioneers Of Solar And Renewable Energy
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
                                    Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
                                </p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/frontsite/img/carousel-2.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/frontsite/img/carousel-2.jpg') }}" alt="" />
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">
                                    Pioneers Of Solar And Renewable Energy
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
                                    Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
                                </p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/frontsite/img/carousel-3.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/frontsite/img/carousel-3.jpg') }}" alt="" />
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown">
                                    Pioneers Of Solar And Renewable Energy
                                </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">
                                    Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
                                    Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
                                </p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Feature Start -->
    <div class="container-xxl">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn-xlg-square bg-primary rounded-circle me-3">
                            <i class="fa-solid fa-screwdriver-wrench text-white fa-xl"></i>
                        </div>
                        {{-- <h1 class="mb-0" data-toggle="counter-up">3453</h1> --}}
                    </div>
                    <h3 class="mb-0">Installation</h3>
                    <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn-xlg-square bg-primary rounded-circle me-3">
                            <i class="fa-solid fa-file-invoice text-white fa-xl"></i>
                        </div>
                        {{-- <h1 class="mb-0" data-toggle="counter-up">4234</h1> --}}
                    </div>
                    <h3 class="mb-0">Procurement</h3>
                    <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn-xlg-square bg-primary rounded-circle me-3">
                            <i class="fa-solid fa-gear text-white fa-xl"></i>
                        </div>
                        {{-- <h1 class="mb-0" data-toggle="counter-up">3123</h1> --}}
                    </div>
                    <h3 class="mb-0">Engineering</h3>
                    <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-3 col-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-3">
                        <div class="btn-xlg-square bg-primary rounded-circle me-3">
                            <i class="fa-solid fa-calendar-days text-white fa-xl"></i>
                        </div>
                        {{-- <h1 class="mb-0" data-toggle="counter-up">1831</h1> --}}
                    </div>
                    <h3 class="mb-0">Maintenance</h3>
                    <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-3 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                            src="{{ asset('assets/frontsite/img/about.jpg') }}" style="object-fit: cover"
                            alt="" />
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h5 class="text-primary">Sekilas Tentang Minasa</h5>
                        <h2 class="mb-4">
                            PT Minasa Elektro-Sains Teknologi
                        </h2>
                        <p>
                            Perusahaan yang bergerak dalam bisnis berbasis teknologi yang handal dan terpercaya serta aktif
                            melakukan kegiatan R&D untuk menghasilkan produk elektronika dan produk ketenagalistrikan.
                        </p>
                        <a href="{{ route('about.index') }}" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h6 class="text-primary">Our Services</h6>
                <h1 class="mb-4">We Are Pioneers In The World Of Renewable Energy</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-1.jpg') }}"
                            alt="" />
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Solar Panels</h4>
                            <p>
                                Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.
                            </p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-2.jpg') }}"
                            alt="" />
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wind fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Wind Turbines</h4>
                            <p>
                                Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.
                            </p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-3.jpg') }}"
                            alt="" />
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydropower Plants</h4>
                            <p>
                                Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.
                            </p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-4.jpg') }}"
                            alt="" />
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-solar-panel fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Solar Panels</h4>
                            <p>
                                Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.
                            </p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-5.jpg') }}"
                            alt="" />
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-wind fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Wind Turbines</h4>
                            <p>
                                Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.
                            </p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-6.jpg') }}"
                            alt="" />
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Hydropower Plants</h4>
                            <p>
                                Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.
                            </p>
                            <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Why Choose Us!</h6>
                        <h1 class="mb-4">Complete Commercial & Residential Solar Systems</h1>
                        <p class="mb-4 pb-2">
                            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                            clita duo justo erat amet
                        </p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Quality</p>
                                        <h5 class="mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Expert</p>
                                        <h5 class="mb-0">Workers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-drafting-compass text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Free</p>
                                        <h5 class="mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-headphones text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Customer</p>
                                        <h5 class="mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                            src="{{ asset('assets/frontsite/img/feature.jpg') }}" style="object-fit: cover"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h6 class="text-primary">Our Projects</h6>
                <h1 class="mb-4">Visit Our Latest Solar And Renewable Energy Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Solar Panels</li>
                        <li class="mx-2" data-filter=".second">Wind Turbines</li>
                        <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-6.jpg') }}"
                            alt="" />
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="{{ asset('assets/frontsite/img/img-600x400-6.jpg') }}" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Solar Panels</p>
                        <hr class="text-primary w-25 my-2" />
                        <h5 class="lh-base">
                            We Are pioneers of solar & renewable energy industry
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-5.jpg') }}"
                            alt="" />
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="{{ asset('assets/frontsite/img/img-600x400-5.jpg') }}" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Wind Turbines</p>
                        <hr class="text-primary w-25 my-2" />
                        <h5 class="lh-base">
                            We Are pioneers of solar & renewable energy industry
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-4.jpg') }}"
                            alt="" />
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="{{ asset('assets/frontsite/img/img-600x400-4.jpg') }}" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Hydropower Plants</p>
                        <hr class="text-primary w-25 my-2" />
                        <h5 class="lh-base">
                            We Are pioneers of solar & renewable energy industry
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-3.jpg') }}"
                            alt="" />
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="{{ asset('assets/frontsite/img/img-600x400-3.jpg') }}" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Solar Panels</p>
                        <hr class="text-primary w-25 my-2" />
                        <h5 class="lh-base">
                            We Are pioneers of solar & renewable energy industry
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-2.jpg') }}"
                            alt="" />
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="{{ asset('assets/frontsite/img/img-600x400-2.jpg') }}" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Wind Turbines</p>
                        <hr class="text-primary w-25 my-2" />
                        <h5 class="lh-base">
                            We Are pioneers of solar & renewable energy industry
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item third">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="{{ asset('assets/frontsite/img/img-600x400-1.jpg') }}"
                            alt="" />
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1"
                                href="{{ asset('assets/frontsite/img/img-600x400-1.jpg') }}" data-lightbox="portfolio"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-light rounded-circle mx-1" href=""><i
                                    class="fa fa-link"></i></a>
                        </div>
                    </div>
                    <div class="pt-3">
                        <p class="text-primary mb-0">Hydropower Plants</p>
                        <hr class="text-primary w-25 my-2" />
                        <h5 class="lh-base">
                            We Are pioneers of solar & renewable energy industry
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <div class="container-xxl py-5 clients">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <h6 class="text-primary">Our Clients</h6>
                <h1 class="mb-4">Visit Our Latest Solar And Renewable Energy Projects</h1>
            </div>
            <div class="row-client no-gutters clients-wrap  wow fadeInUp">
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-3.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-4.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-5.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-6.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-3.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-4.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-5.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/frontsite/img/clients/client-6.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
