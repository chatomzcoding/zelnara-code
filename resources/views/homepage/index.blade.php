<x-homepage menu="beranda">
        <!-- Hero Start -->
        <div class="container-fluid pt-5 bg-primary hero-header mb-5">
            <div class="container pt-5">
                <div class="row g-5 pt-5">
                    <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                        <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Ze.Code</div>
                        <h1 class="display-4 text-white mb-4 animated slideInRight">Bergerak di Bidang Pemrograman</h1>
                        <p class="text-white mb-4 animated slideInRight">Temukan layanan kami yang dapat membantu anda</p>
                        {{-- <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight">Read More</a> --}}
                        <a href="{{ url('kontak')}}" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Kontak Kami</a>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-end">
                        <img class="img-fluid" src="{{ asset('template/img/hero-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
    
       @include('homepage.section.tentang-detail')
    
        <!-- Service Start -->
        <div class="container-fluid bg-light mt-5 py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div>
                        <h1 class="mb-4">Our Excellent AI Solutions for Your Business</h1>
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
                                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fa fa-robot fa-2x"></i>
                                            </div>
                                            <h5 class="mb-3">Robotic Automation</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fa fa-power-off fa-2x"></i>
                                            </div>
                                            <h5 class="mb-3">Machine learning</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-md-4">
                                <div class="row g-4">
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fa fa-graduation-cap fa-2x"></i>
                                            </div>
                                            <h5 class="mb-3">Education & Science</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                            <div class="service-icon btn-square">
                                                <i class="fa fa-brain fa-2x"></i>
                                            </div>
                                            <h5 class="mb-3">Predictive Analysis</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    
       @include('homepage.section.tentang-pilihan')
        
    
        <!-- Case Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div>
                    <h1 class="mb-4">Explore Our Recent AI Case Studies</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{ asset('template/img/project-1.jpg')}}" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Robotic Automation</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{ asset('template/img/project-2.jpg')}}" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Machine learning</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="{{ asset('template/img/project-3.jpg')}}" alt="">
                            <a class="case-overlay text-decoration-none" href="">
                                <small>Predictive Analysis</small>
                                <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Case End -->
    
        <!-- FAQs Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                    <h1 class="mb-4">Frequently Asked Questions</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionFAQ1">
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        How to build a website?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How long will it take to get a new website?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Do you only create HTML websites?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Will my website be mobile-friendly?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionFAQ1">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionFAQ2">
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        I’m on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                    data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        I’m on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                    data-bs-parent="#accordionFAQ2">
                                    <div class="accordion-body">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs Start -->
    
        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Testimonial</div>
                        <h1 class="mb-4">What Say Our Clients!</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                        <div class="owl-carousel testimonial-carousel border-start border-primary">
                            <div class="testimonial-item ps-5">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('template/img/testimonial-1.jpg')}}"
                                        style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item ps-5">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('template/img/testimonial-2.jpg')}}"
                                        style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item ps-5">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p class="fs-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('template/img/testimonial-3.jpg')}}"
                                        style="width: 60px; height: 60px;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    
</x-homepage>