@extends('layouts.default')

@section('title', 'About')

@section('content')
    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100"
                            src="{{ asset('assets/frontsite/img/about.jpg') }}" style="object-fit: cover" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn text-justify" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h2 class="mb-4 text-primary">
                            PT Minasa Elektro-Sains Teknologi
                        </h2>
                        <p>
                            Perusahaan yang bergerak dalam bisnis berbasis teknologi yang handal dan terpercaya serta aktif
                            melakukan kegiatan R&D untuk menghasilkan produk elektronika dan produk ketenagalistrikan.
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <h4><i class="fa-regular fa-circle-check text-primary"></i> Visi</h4>
                                <p>Menjadi Perusahaan Pengembang Kendaraan Listrik adan Sistem
                                    Pembangkit Listrik Berbasis
                                    Energi Terbarukan yang handal dan terpercaya, serta aktif melakukan kegiatan Research
                                    and Development untuk menghasilkan produk elektronika dan produk ketenagalistrikan dalam
                                    rangka mendukung terciptanya kemandirian nasional dan kepercayaan diri bangsa.</p>
                            </div>
                            <div class="col-12">
                                <h4><i class="fa-regular fa-circle-check text-primary"></i> Misi</h4>
                                <ol>
                                    <li>Menyediakan jasa penunjang ketenagalistrikan dan menjadi
                                        perusahaan pengembang
                                        sistem pembangkit listrik yang berbasis pada pemanfaatan sumber energi terbarukan
                                        dalam rangka mendukung komitmen global menuju zero emission.</li>
                                    <li>Aktif melakukan kegiatan R&D untuk menciptakan produk elektronika yang inovatif dan
                                        kompetitif yang dimanfaatkan pada sistem pembangkitan dan pengolahan tenaga listrik
                                        berbasis energi terbarukan.</li>
                                    <li>Aktif melakukan kegiatan R&D untuk menciptakan produk elektronika yang inovatif dan
                                        kompetitif yang dimanfaatkan pada kendaraan listrik dalam rangka mendukung
                                        peningkatan tingkat komponen dalam negeri kendaraan listrik nasional.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- About End -->

    <section id="doctors" class="doctors">
        <div class="container-xxl py-5">

            <div class="section-title">
                <h2>Our Team</h2>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member d-flex align-items-start">
                        <div class="member-info">
                            <h4>Faizal Arya Samman</h4>
                            <span>Plant Manager Pembangunan dan Pemasangan PLTS</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member d-flex align-items-start">
                        <div class="member-info">
                            <h4>Fitriyanti Mayasari</h4>
                            <span>Konsultan Perencanaan dan Pengawasan PLTS</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="member-info">
                            <h4>Tino Suhaebri</h4>
                            <span>Supervisor Senior Pembangunan dan Pemasangan PLTS</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member d-flex align-items-start">
                        <div class="member-info">
                            <h4>Muhammad Syarif</h4>
                            <span>Supervisor Senior Pembangunan dan Pemasangan PLTS</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                <a href=""><i class="fa-brands fa-instagram"></i></a>
                                <a href=""><i class="fa-brands fa-linkedin"></i></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Doctors Section -->
@endsection
