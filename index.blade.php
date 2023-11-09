@extends('frontend.layouts.app')


@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($homebanner as $home)
                    @if ($loop->iteration == 1)
                        <div class="carousel-item active">
                        @else
                            <div class="carousel-item">
                    @endif
                    <img class="w-100" src="{{ url('/images/admin/homebanner/' . $home->bannerimage) }}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-warning text-uppercase animated slideInRight">
                                        {{ $home->title }}
                                    </p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">
                                        {{ $home->shortdescription }}
                                    </h1>
                                    <a class="btn btn-primary py-2 px-3" href="{{ route('front.contact') }}">
                                        Contact Us
                                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <meta name="description" content="Explore Royal speed creative technical services, Dubai's premium
services in MEP work, gypsum partition, carpet installation, fit-out works,
warehouse racking, interior design, office setup, tiles, glassworks, and
painting solutions. Transform your space with our expert craftsmanship and
innovative designs.">
            @endforeach

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 gy-3 h-100">
                        <div class="col-12 align-self-start wow fadeInUp about-first-img" data-wow-delay="0.1s">
                            <img class="img-fluid"
                                @if ($about->image1 ?? '') src="{{ url('/images/admin/aboutus/' . $about->image1) }}" @endif
                                style="height: 400px" />
                        </div>
                        <div class="col-6">
                            <img class="img-fluid"
                                @if ($about->image2 ?? '') src="{{ url('/images/admin/aboutus/' . $about->image2) }}" @endif
                                style="height: 150px; width: 100%" />
                        </div>
                        <div class="col-6">
                            <img class="img-fluid"
                                @if ($about->image3 ?? '') src="{{ url('/images/admin/aboutus/' . $about->image3) }}" @endif
                                style="height: 150px; width: 100%" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">About Us</h1>
                    <p class="mb-4" style="text-align: justify">
                        @if ($about->maindescription ?? '')
                            {!! $about->maindescription !!}
                        @endif
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2 text-white">
                                @if ($counters->years_experience ?? '')
                                    {{ $counters->years_experience }}
                                @endif
                            </h1>
                            <h5 class="text-white">Years of</h5>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="ms-4">
                                    <!--@foreach ($mainservices as $service)-->
                                    <!--    <p><i class="fa fa-check text-primary me-2"></i>{{ $service->servicename }}</p>-->
                                    <!--@endforeach-->
                                    <div class="row">
                                        @foreach ($mainservices as $service)
                                            <div class="col-lg-6 col-12">
                                                <p><i class="fa fa-check text-primary me-2"></i>{{ $service->servicename }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row text-lg-center mt-5">
                                <div class="col-12">
                                    <a class="btn btn-outline-primary py-2 px-3" href="{{ route('front.about') }}">
                                        Read More
                                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email us</p>
                                    <h5 class="mb-0">{{ $emailsettings->emailaddress1 }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        @if ($counters->years_experience ?? '')
                            {{ $counters->years_experience }}
                        @endif
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        @if ($counters->team_members ?? '')
                            {{ $counters->team_members }}
                        @endif
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        @if ($counters->happy_clients ?? '')
                            {{ $counters->happy_clients }}
                        @endif
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">
                        @if ($counters->projects_done ?? '')
                            {{ $counters->projects_done }}
                        @endif
                    </h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- why choose us Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp mx-auto" data-wow-delay="0.1s"
                style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInUp;
            max-width: 600px;
          ">
                <h6 class="section-title text-center text-primary text-uppercase">
                    Why Choose Us
                </h6>
                <h1 class="mb-5">
                    @if ($widgets->whychooseus_title ?? '')
                        {{ $widgets->whychooseus_title }}
                    @endif
                </h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 wow fadeInUp text-center" data-wow-delay="0.5s">
                    <div class="row g-4 justify-content-center">
                        @foreach ($whychooseus as $chooseus)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="choose-item bg-white text-center p-4 p-xl-5">
                                    <span class="elementor-icon elementor-animation-"
                                        style="fill: #ff7b52; color: #ff7b52; border-color: #ff7b52">
                                        <i aria-hidden="true" class="{{ $chooseus->icon }} fa-2x"></i>
                                    </span>
                                    <h4 class="mb-3">{{ $chooseus->title }}</h4>
                                    <p class="mb-4" style="text-align: justify;font-size:13px;line-height:22px">
                                        {{ $chooseus->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- landing Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp mx-auto" data-wow-delay="0.1s"
                style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInUp;
            max-width: 600px;
          ">
                <h6 class="section-title text-center text-primary text-uppercase">
                    Leading Services
                </h6>
                <h1 class="mb-5">
                    @if ($widgets->leadingservice_title ?? '')
                        {{ $widgets->leadingservice_title }}
                    @endif
                </h1>
            </div>
            <div class="row gy-5 gx-4">
                @foreach ($leadingservices as $leadingservice)
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <img class="img-fluid"
                                src="{{ url('/images/admin/leadingservices/' . $leadingservice->image) }}"
                                alt="Leading Service Image" />
                            <div class="service-img">
                                <img class="img-fluid"
                                    src="{{ url('/images/admin/leadingservices/' . $leadingservice->image) }}"
                                    alt="Leading Service Image" />
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25" />
                                    <h3 class="mb-0">{{ $leadingservice->title }}</h3>
                                    <hr class="w-25" />
                                </div>
                                <div class="service-text">
                                    <p class="text-white mb-0" style="font-size: 10px; text-align: justify;">
                                        {{ $leadingservice->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- landing Service End -->

    <!-- Our Services Start -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center wow fadeInUp mx-auto" data-wow-delay="0.1s"
            style="
          visibility: visible;
          animation-delay: 0.1s;
          animation-name: fadeInUp;
          max-width: 600px;
        ">
            <h6 class="section-title text-center text-primary text-uppercase">
                Our Services
            </h6>
            <h1 class="text-white">Our Comprehensive Service Portfolio</h1>
        </div>

        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            @foreach ($mainservices as $main)
                <a class="project-item" href="{{ route('front.service', $main->slug) }}">
                    <img class="img-fluid" src="{{ url('/images/admin/services/' . $main->serviceimage) }}"
                        alt="" style="width: 400px; height: 400px" />
                    <div class="project-title">
                        <h5 class="text-primary mb-0">{{ $main->servicename }}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <!-- Our Services End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp mx-auto" data-wow-delay="0.1s"
                style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInUp;
            max-width: 600px;
          ">
                <h6 class="section-title text-center text-primary text-uppercase">
                    Testimonial
                </h6>
                <h1 class="">
                    @if ($widgets->testimonial_title ?? '')
                        {{ $widgets->testimonial_title }}
                    @endif
                </h1>
            </div>

            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimonials as $testimonial)
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5"
                                src="{{ url('/images/admin/testimonial/' . $testimonial->image) }}" />
                            <div class="btn-square bg-primary rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>{{ $testimonial->description }}</p>
                            <h5 class="mb-1">{{ $testimonial->clientname }}</h5>
                            <span class="fst-italic">{{ $testimonial->profession }}</span>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- blog Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp mx-auto" data-wow-delay="0.1s"
                style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInUp;
            max-width: 600px;
          ">
                <h6 class="section-title text-center text-primary text-uppercase">
                    Our Top Blogs
                </h6>
                <h1 class="">
                    @if ($widgets->ourtopblog_title ?? '')
                        {{ $widgets->ourtopblog_title }}
                    @endif
                </h1>
            </div>

            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="row">
                        <div class="blog-left-content">
                            <div class="row">
                                <!-- Start single blog -->
                                @foreach ($blogdescription as $blog)
                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                        <div class="single-blog">
                                            <div class="blog-image">
                                                <a class="image-scale"
                                                    href="{{ route('front.blog.details', $blog->slug) }}">
                                                    <img src="{{ url('/images/admin/blogs/' . $blog->image) }}"
                                                        alt="" class="img-fluid"
                                                        style="width: 100%; height: 250px" />
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <span class="admin-type">
                                                        <i class="fa fa-user"></i>
                                                        <!--{{ $blog->title }}-->
                                                        Admin
                                                    </span>
                                                    <span class="date-type">
                                                        <i class="fa fa-calendar"></i>
                                                        {{ $blog->created_at->format('F d, Y') }}
                                                    </span>
                                                </div>
                                                <a href="{{ route('front.blog.details', $blog->slug) }}">
                                                    <h4>{{ $blog->title }}</h4>
                                                    <p class="blog-text text-truncate">{!! Str::limit($blog->description, 50) !!}</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- End single blog -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <a class="btn btn-outline-primary py-2 px-3" href="{{ route('front.blog') }}">
                        View More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- blog End -->

    <!-- faq Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="wow fadeInUp text-center mx-auto" data-wow-delay="0.1s"
                        style="
            visibility: visible;
            animation-delay: 0.1s;
            animation-name: fadeInUp;
            max-width: 600px;
          ">
                        <h6 class="section-title text-primary text-uppercase">FAQ</h6>
                        <h1 class="mb-5">
                            @if ($widgets->faq_title ?? '')
                                {{ $widgets->faq_title }}
                            @endif
                        </h1>
                    </div>

                    <div class="row g-4">
                        <div class="col-12">
                            <div class="accordion" id="accordionExample">
                                <?php $i = 0; ?>
                                <?php $j = 0; ?>
                                <?php $k = 0; ?>
                                <?php $l = 0; ?>
                                @foreach ($faq as $qa)
                                    @if ($loop->iteration == 1)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{ $i++ }}">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $j++ }}" aria-expanded="true"
                                                    aria-controls="collapseOne">{{ $qa->question }}</button>
                                            </h2>
                                            <div id="collapse{{ $k++ }}"
                                                class="accordion-collapse collapse show"
                                                aria-labelledby="heading{{ $l++ }}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">{!! $qa->answer !!}</div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{ $i++ }}">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $j++ }}" aria-expanded="false"
                                                    aria-controls="collapseOne">{{ $qa->question }}</button>
                                            </h2>
                                            <div id="collapse{{ $k++ }}" class="accordion-collapse collapse"
                                                aria-labelledby="heading{{ $l++ }}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">{!! $qa->answer !!}</div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq End -->
@endsection
