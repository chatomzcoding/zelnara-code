<x-homepage menu="tentang">
      <!-- Hero Start -->
      <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Tentang Zelnara Code</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('/')}}">Beranda</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tentang</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="{{ url('template/img/hero-img.png')}}" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    @include('homepage.section.tentang-detail')

    @include('homepage.section.tentang-pilihan')


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Team</div>
                    <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="{{ url('template/img/team-1.jpg')}}" alt="">
                                        <h5 class="mb-0">Boris Johnson</h5>
                                        <small>Founder & CEO</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="{{ url('template/img/team-2.jpg')}}" alt="">
                                        <h5 class="mb-0">Adam Crew</h5>
                                        <small>Executive Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="{{ url('template/img/team-3.jpg')}}" alt="">
                                        <h5 class="mb-0">Kate Winslet</h5>
                                        <small>Co Founder</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="{{ url('template/img/team-4.jpg')}}" alt="">
                                        <h5 class="mb-0">Cody Gardner</h5>
                                        <small>Project Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



</x-homepage>