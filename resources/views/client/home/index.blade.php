@extends('client.layout.app')

@section('content')
    <section class="section d-block">
        <div class="box-swiper">
            <div class="swiper-container swiper-group-1 swiper-banner-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="banner-1" style="background-image:url(client/imgs/page/homepage1/banner.png)">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <p class="font-md color-white mb-15 wow animate__animated animate__fadeIn"
                                            data-wow-delay=".0s">
                                            Logistics & Transportation</p>
                                        <h1 class="color-white mb-25 wow animate__animated animate__fadeInUp"
                                            data-wow-delay=".0s">Digital
                                            & Trusted Transport<br class="d-none d-lg-block">Logistic Company</h1>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="font-md color-white mb-20 wow animate__animated animate__fadeInUp"
                                                    data-wow-delay=".0s">Our experienced team of problem solvers
                                                    and a commitment to always
                                                    align with our client’s business goals and objectives is what
                                                    drives mutual success.</p>
                                            </div>
                                        </div>
                                        <div class="box-button mt-30">
                                            <a class="btn btn-brand-1-big hover-up mr-40 wow animate__animated animate__fadeInUp"
                                                href="#">Calculate Package</a>
                                            <a class="btn btn-play popup-youtube hover-up wow animate__animated animate__fadeInUp"
                                                href="https://www.youtube.com/watch?v=kCGf5uNE13I"><img
                                                    class="wow animate__animated animate__fadeInUp"
                                                    src="{{asset('client/imgs/template/icons/play.svg')}}" alt="">How
                                                it work ?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-1" style="background-image:url(client/imgs/page/homepage1/banner-2.png)">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <p class="font-md color-white mb-15 wow animate__animated animate__fadeInUp"
                                            data-wow-delay=".0s">
                                            Logistics & Transportation</p>
                                        <h1 class="color-white mb-25 wow animate__animated animate__fadeInUp"
                                            data-wow-delay=".0s">Digital
                                            & Trusted Transport<br class="d-none d-lg-block">Logistic Company</h1>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="font-md color-white mb-20 wow animate__animated animate__fadeInUp"
                                                    data-wow-delay=".0s">Our experienced team of problem solvers
                                                    and a commitment to always
                                                    align with our client’s business goals and objectives is what
                                                    drives mutual success.</p>
                                            </div>
                                        </div>
                                        <div class="box-button mt-30">
                                            <a class="btn btn-brand-1-big hover-up mr-40 wow animate__animated animate__fadeInUp"
                                                href="#">Calculate Package</a><a
                                                class="btn btn-play popup-youtube hover-up wow animate__animated animate__fadeInUp"
                                                href="https://www.youtube.com/watch?v=kCGf5uNE13I"><img
                                                    class="wow animate__animated animate__fadeInUp"
                                                    src="{{asset('client/imgs/template/icons/play.svg')}}" alt="">How
                                                it work ?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-banner"></div>
            </div>
        </div>
    </section>
    <div class="section bg-2 pt-65 pb-35">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 mb-30 text-center text-lg-start wow animate__animated animate__fadeIn">
                    <p class="font-2xl-bold color-brand-2">We are<span class="color-brand-1"> trusted</span> by
                        major global
                        brands</p>
                </div>
                <div class="col-lg-9 mb-30">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-6 pb-0">
                            <div class="swiper-wrapper wow animate__animated animate__fadeIn">
                                <div class="swiper-slide"><img src="{{asset('client/imgs/slider/logo/ups.png')}}" width="85px"
                                        height="43px" alt="DML Express"></div>
                                <div class="swiper-slide"><img src="{{asset('client/imgs/slider/logo/dhl.png')}}" width="85px"
                                        height="43px" alt="DML Express"></div>
                                <div class="swiper-slide"><img src="{{asset('client/imgs/slider/logo/fedex.png')}}" width="85px"
                                        height="33px" alt="DML Express"></div>
                                <div class="swiper-slide"><img src="{{asset('client/imgs/slider/logo/truck.png')}}" alt="DML Express">
                                </div>
                                <div class="swiper-slide"><img src="{{asset('client/imgs/slider/logo/saltos.png')}}" alt="DML Express">
                                </div>
                                <div class="swiper-slide"><img src="{{asset('client/imgs/slider/logo/creati.png')}}" alt="DML Express">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section mt-100">
        <div class="container">
            <h2 class="title-favicon mb-20 wow animate__animated animate__fadeIn">What We Offer</h2>
            <div class="row align-items-end">
                <div class="col-lg-8 col-md-8 mb-30">
                    <p class="font-md color-gray-700 wow animate__animated animate__fadeIn">Welcome to our
                        tranporation services
                        agency. We are the best at our trans-portation service ever.</p>
                </div>
                <div class="col-lg-4 col-md-4 mb-30 text-md-end text-start"><a class="btn btn-brand-1 hover-up"
                        href="#">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                            </path>
                        </svg>Get a quote
                    </a>
                </div>
            </div>
            <div class="mt-20 box-background-offer">
                <div class="bg-under"></div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow animate__animated animate__fadeIn">
                        <div class="card-offer hover-up">
                            <div class="card-image"><img src="{{asset('client/imgs/page/homepage1/delivery.png')}}" alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Worldwide Express</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2">View
                                        Details<span>
                                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow animate__animated animate__fadeIn">
                        <div class="card-offer hover-up">
                            <div class="card-image"><img src="{{asset('client/imgs/page/homepage1/plane.png')}}" alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Air Freight Forwarding</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2">View
                                        Details<span>
                                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow animate__animated animate__fadeIn">
                        <div class="card-offer hover-up">
                            <div class="card-image"><img src="{{asset('client/imgs/page/homepage1/cargo-ship.png')}}"
                                    alt="DML Express"></div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Ocean Freight</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2">View
                                        Details<span>
                                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow animate__animated animate__fadeIn">
                        <div class="card-offer hover-up">
                            <div class="card-image"><img src="{{asset('client/imgs/page/homepage1/forklift.png')}}" alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Warehouse &amp; Distribution</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2">View
                                        Details<span>
                                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow animate__animated animate__fadeIn">
                        <div class="card-offer hover-up">
                            <div class="card-image"><img src="{{asset('client/imgs/page/homepage1/train.png')}}" alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Road Freight</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2">View
                                        Details<span>
                                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow animate__animated animate__fadeIn">
                        <div class="card-offer hover-up">
                            <div class="card-image"><img src="{{asset('client/imgs/page/homepage1/worldwide.png')}}"
                                    alt="DML Express"></div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Customs Clearance</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2">View
                                        Details<span>
                                            <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section mt-85">
        <div class="container">
            <div class="text-center"><img class="mb-15" src="{{asset('client/imgs/template/icons/favicon.svg')}}" alt="DML Express">
                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Delivering Results for
                    Industry
                    Leaders</p>
                <h2 class="color-brand-2 mb-65 mt-15 wow animate__animated animate__fadeIn">We are proud of our
                    workforce<br class="d-none d-lg-block">and have worked hard.</h2>
            </div>
            <div class="row mt-50 align-items-center">
                <div class="col-xl-7 col-lg-6 mb-30">
                    <div class="box-images-pround">
                        <div class="box-images wow animate__animated animate__fadeIn"><img class="img-main"
                                src="{{asset('client/imgs/page/homepage1/img1.png')}}" alt="DML Express">
                            <div class="image-2 shape-3"><img src="{{asset('client/imgs/page/homepage1/icon1.png')}}"
                                    alt="DML Express"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 mb-30">
                    <div class="box-info-pround">
                        <h3 class="color-brand-2 mb-15 wow animate__animated animate__fadeIn">Fast shipping with
                            the most modern
                            technology</h3>
                        <p class="font-md color-grey-500 wow animate__animated animate__fadeIn">Over the years, we
                            have worked
                            together to expand our network of partners to deliver reliability and consistency. We’ve
                            also made
                            significant strides to tightly integrate technology with our processes, giving our
                            clients greater
                            visibility into every engagement.</p>
                        <div class="mt-30">
                            <ul class="list-ticks">
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Task tracking
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Create task dependencies
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Task visualization
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>hare files, discuss
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Meet deadlines faster
                                </li>
                                <li class="wow animate__animated animate__fadeIn">
                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>Track time spent on each project
                                </li>
                            </ul>
                        </div>
                        <div class="mt-30 text-start d-flex wow animate__animated animate__fadeIn"><a
                                class="hover-up mr-10" href="#"><img src="{{asset('client/imgs/template/appstore-btn.png')}}"
                                    alt="DML Express"></a><a class="hover-up" href="#"><img
                                    src="{{asset('client/imgs/template/google-play-btn.png')}}" alt="DML Express"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section mt-55 bg-1 position-relative pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><span class="btn btn-tag wow animate__animated animate__fadeIn">Get in
                        touch</span>
                    <h3 class="color-grey-900 mb-20 mt-15 wow animate__animated animate__fadeIn">Proud to
                        Deliver<br class="d-none d-lg-block">Excellence Every Time</h3>
                    <p class="font-md color-grey-900 mb-40 wow animate__animated animate__fadeIn">Excepteur sint
                        occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis
                        lectus nulla.
                        Interactively transform magnetic growth strategies whereas prospective "outside the box"
                        thinking.</p>
                    <div class="row">
                        <div class="col-lg-6 mb-30">
                            <h6 class="chart-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                Boost your
                                sale</h6>
                            <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">The latest
                                design trends meet
                                hand-crafted templates.</p>
                        </div>
                        <div class="col-lg-6 mb-30">
                            <h6 class="feature-title font-md-bold color-grey-900 wow animate__animated animate__fadeIn">
                                Introducing
                                New Features</h6>
                            <p class="font-xs color-grey-900 wow animate__animated animate__fadeIn">The latest
                                design trends meet
                                hand-crafted templates.</p>
                        </div>
                    </div>
                    <div class="mt-20"><a class="btn btn-brand-2 mr-20 wow animate__animated animate__fadeIn"
                            href="contact.html">Contact Us</a><a
                            class="btn btn-link-medium wow animate__animated animate__fadeIn" href="#">Learn
                            More
                            <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3">
                                </path>
                            </svg></a></div>
                </div>
            </div>
        </div>
        <div class="box-image-touch"></div>
    </section>
    <section class="section pt-85 bg-worldmap">
        <div class="container">
            <div class="text-center"><img class="mb-15" src="{{asset('client/imgs/template/icons/favicon.svg')}}" alt="DML Express">
                <h2 class="color-brand-2 mb-20 wow animate__animated animate__fadeIn">How It Works</h2>
                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">You choose the cities where
                    you’d like
                    to deliver. All deliveries are within a specific service area and delivery services vary by
                    location.
                    Whatever the mode or requirement, we will find and book the ideal expedited shipping solution to
                    ensure a
                    timely delivery.</p>
            </div>
            <div class="row mt-50">
                <div class="col-lg-6 mb-30">
                    <div class="box-image-how"><img class="w-100 wow animate__animated animate__fadeIn"
                            src="{{asset('client/imgs/page/homepage1/how-it-work.png')}}" alt="DML Express">
                        <div class="box-info-bottom-img">
                            <div class="image-play"><img class="mb-15 wow animate__animated animate__fadeIn"
                                    src="{{asset('client/imgs/template/icons/play.svg')}}" alt="DML Express"></div>
                            <div class="info-play">
                                <h4 class="color-white mb-15 wow animate__animated animate__fadeIn">We have 12
                                    years experience in
                                    this passion</h4>
                                <p class="font-sm color-white wow animate__animated animate__fadeIn">There are many
                                    variations of
                                    passages of Lorem Ipsum available, but the majority have suffered alteration in
                                    some form, by
                                    injected humour</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <ul class="list-how-works">
                        <li>
                            <div class="image-how"><span class="img"><img src="{{asset('client/imgs/page/homepage1/order.png')}}"
                                        alt="DML Express"></span></div>
                            <div class="info-how">
                                <h5 class="color-brand-2 wow animate__animated animate__fadeIn">Customer places
                                    order</h5>
                                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Inspection
                                    and quality check
                                    of goods</p>
                            </div>
                        </li>
                        <li>
                            <div class="image-how"><span class="img"><img src="{{asset('client/imgs/page/homepage1/payment.png')}}"
                                        alt="DML Express"></span>
                            </div>
                            <div class="info-how">
                                <h5 class="color-brand-2 wow animate__animated animate__fadeIn">Payment successful
                                </h5>
                                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Payoneer,
                                    Paypal, or Visa
                                    master card</p>
                            </div>
                        </li>
                        <li>
                            <div class="image-how"><span class="img"><img
                                        src="{{asset('client/imgs/page/homepage1/warehouse.png')}}" alt="DML Express"></span>
                            </div>
                            <div class="info-how">
                                <h5 class="color-brand-2 wow animate__animated animate__fadeIn">Warehouse receives
                                    order</h5>
                                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Check the
                                    accuracy of the
                                    goods.</p>
                            </div>
                        </li>
                        <li>
                            <div class="image-how"><span class="img"><img src="{{asset('client/imgs/page/homepage1/picked.png')}}"
                                        alt="DML Express"></span>
                            </div>
                            <div class="info-how">
                                <h5 class="color-brand-2 wow animate__animated animate__fadeIn">Item picked, packed
                                    & shipped</h5>
                                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Ship the
                                    goods to a local
                                    carrier</p>
                            </div>
                        </li>
                        <li>
                            <div class="image-how"><span class="img"><img
                                        src="{{asset('client/imgs/page/homepage1/delivery.png')}}" alt="DML Express"></span>
                            </div>
                            <div class="info-how">
                                <h5 class="color-brand-2 wow animate__animated animate__fadeIn">Delivered & Measure
                                    success</h5>
                                <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">Update
                                    order status on the
                                    system</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-what-done pb-95 pt-110">
        <div class="container">
            <h2 class="title-favicon mb-20 wow animate__animated animate__fadeIn">What We Have Done</h2>
            <div class="row align-items-end">
                <div class="col-lg-8 col-md-8 mb-30">
                    <p class="font-md color-gray-700 wow animate__animated animate__fadeIn">Check out some of the
                        projects we've
                        completed with our amazing partners</p>
                </div>
                <div class="col-lg-4 col-md-4 mb-30 text-md-end text-start"><a
                        class="btn btn-brand-1 hover-up wow animate__animated animate__fadeIn" href="#">
                        <svg class="mr-10" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25">
                            </path>
                        </svg>View All Projects</a></div>
            </div>
            <div class="mt-35">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-4 pb-50">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="cardGrid">
                                    <div class="cardImage"> <img src="{{asset('client/imgs/page/homepage1/img.png')}}"
                                            alt="DML Express"></div>
                                    <div class="cardInfo">
                                        <h5 class="color-brand-2 mb-10">Air Freight</h5>
                                        <p class="font-xs color-grey-500">Aut ducimus inventore aut nihil
                                            exercitationem sed iure
                                            repellendus. Qui suscipit eaque aut necessitatibus quia ut expedita
                                            possimus. Sed consequatur
                                            consectetur ab fugit architecto</p>
                                        <div class="box-button mt-30"><a class="btn btn-link font-sm color-brand-2">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="cardGrid">
                                    <div class="cardImage"> <img src="{{asset('client/imgs/page/homepage1/img2.png')}}"
                                            alt="DML Express"></div>
                                    <div class="cardInfo">
                                        <h5 class="color-brand-2 mb-10">Sea Freight</h5>
                                        <p class="font-xs color-grey-500">Aut ducimus inventore aut nihil
                                            exercitationem sed iure
                                            repellendus. Qui suscipit eaque aut necessitatibus quia ut expedita
                                            possimus. Sed consequatur
                                            consectetur ab fugit architecto</p>
                                        <div class="box-button mt-30"><a class="btn btn-link font-sm color-brand-2">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="cardGrid">
                                    <div class="cardImage"> <img src="{{asset('client/imgs/page/homepage1/img3.png')}}"
                                            alt="DML Express"></div>
                                    <div class="cardInfo">
                                        <h5 class="color-brand-2 mb-10">Trucking</h5>
                                        <p class="font-xs color-grey-500">Aut ducimus inventore aut nihil
                                            exercitationem sed iure
                                            repellendus. Qui suscipit eaque aut necessitatibus quia ut expedita
                                            possimus. Sed consequatur
                                            consectetur ab fugit architecto</p>
                                        <div class="box-button mt-30"><a class="btn btn-link font-sm color-brand-2">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="cardGrid">
                                    <div class="cardImage"> <img src="{{asset('client/imgs/page/homepage1/img5.png')}}" width="322px"
                                            height="277px" alt="DML Express"></div>
                                    <div class="cardInfo">
                                        <h5 class="color-brand-2 mb-10">Customs Clearance</h5>
                                        <p class="font-xs color-grey-500">Aut ducimus inventore aut nihil
                                            exercitationem sed iure
                                            repellendus. Qui suscipit eaque aut necessitatibus quia ut expedita
                                            possimus. Sed consequatur
                                            consectetur ab fugit architecto</p>
                                        <div class="box-button mt-30"><a class="btn btn-link font-sm color-brand-2">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="cardGrid">
                                    <div class="cardImage"> <img src="{{asset('client/imgs/page/homepage1/img4.png')}}"
                                            alt="DML Express"></div>
                                    <div class="cardInfo">
                                        <h5 class="color-brand-2 mb-10">Warehouse Solutions</h5>
                                        <p class="font-xs color-grey-500">Aut ducimus inventore aut nihil
                                            exercitationem sed iure
                                            repellendus. Qui suscipit eaque aut necessitatibus quia ut expedita
                                            possimus. Sed consequatur
                                            consectetur ab fugit architecto</p>
                                        <div class="box-button mt-30"><a class="btn btn-link font-sm color-brand-2">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="cardGrid">
                                    <div class="cardImage"> <img src="{{asset('client/imgs/page/homepage1/img6.png')}}" width="322px"
                                            height="277px" alt="DML Express"></div>
                                    <div class="cardInfo">
                                        <h5 class="color-brand-2 mb-10">Railway Freight</h5>
                                        <p class="font-xs color-grey-500">Aut ducimus inventore aut nihil
                                            exercitationem sed iure
                                            repellendus. Qui suscipit eaque aut necessitatibus quia ut expedita
                                            possimus. Sed consequatur
                                            consectetur ab fugit architecto</p>
                                        <div class="box-button mt-30"><a class="btn btn-link font-sm color-brand-2">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a></div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="cardGrid">
                                    <div class="cardImage"> <img src="{{asset('client/imgs/page/homepage1/img7.jpg')}}" width="100%"
                                            height="277px" alt="DML Express"></div>
                                    <div class="cardInfo">
                                        <h5 class="color-brand-2 mb-10">Cross Border</h5>
                                        <p class="font-xs color-grey-500">Aut ducimus inventore aut nihil
                                            exercitationem sed iure
                                            repellendus. Qui suscipit eaque aut necessitatibus quia ut expedita
                                            possimus. Sed consequatur
                                            consectetur ab fugit architecto</p>
                                        <div class="box-button mt-30"><a class="btn btn-link font-sm color-brand-2">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-pagination-customers text-center wow animate__animated animate__fadeIn">
                            <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-group-4">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-group-4">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-leading-company pt-95">
        <div class="box-bg-leading"></div>
        <div class="container">
            <div class="text-center mb-45">
                <h2 class="color-brand-1 mb-15 wow animate__animated animate__fadeIn">World’s Leading Companies<br
                        class="d-none d-lg-block">For Over 12 Years.</h2>
                <p class="font-md color-white wow animate__animated animate__fadeIn">A big opportunity for your
                    business
                    growth. Delivering Results for Industry Leaders. We are<br class="d-none d-lg-block">proud of
                    our workfor
                    and have worked hard.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img wow animate__animated animate__fadeIn"><img
                                    src="{{asset('client/imgs/page/homepage1/handover.png')}}" alt="DML Express"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">38</span><span>0,000</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Parcels Shipped
                                Safely</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img"><img src="{{asset('client/imgs/page/homepage1/cities.png')}}"
                                    alt="DML Express"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">12</span><span>0,000</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Cities Served
                                Worldwide</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img"><img src="{{asset('client/imgs/page/homepage1/client.png')}}"
                                    alt="DML Express"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">228</span><span>0</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Satisfied Clients
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                    <div class="cardLeadingCompany">
                        <div class="cardImage"><span class="img"><img src="{{asset('client/imgs/page/homepage1/company.png')}}"
                                    alt="DML Express"></span></div>
                        <div class="cardInfo">
                            <h3 class="color-brand-1 wow animate__animated animate__fadeIn"><span>+</span><span
                                    class="count">12</span><span>000</span></h3>
                            <p class="font-lg color-white wow animate__animated animate__fadeIn">Company We Help
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-form-contact-leading">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="title-favicon color-brand-2 mb-15">Calculate Shipping</h2>
                        <p class="font-md color-grey-700 mb-25">Please Fill All Inquiry To Get Your Total Price.
                        </p>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Select Service</option>
                                        <option value="Service 1">Service 1</option>
                                        <option value="Service 2">Service 2</option>
                                        <option value="Service 3">Service 3</option>
                                        <option value="Service 4">Service 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Dimensions">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Weight">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Picked up at</option>
                                        <option value="Service 1">Service 1</option>
                                        <option value="Service 2">Service 2</option>
                                        <option value="Service 3">Service 3</option>
                                        <option value="Service 4">Service 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Delivery to</option>
                                        <option value="New York">New York</option>
                                        <option value="Washinton">Washinton</option>
                                        <option value="Dallas">Dallas</option>
                                        <option value="California">California</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Commodities</option>
                                        <option value="Commodities 1">Commodities 1</option>
                                        <option value="Commodities 2">Commodities 2</option>
                                        <option value="Commodities 3">Commodities 3</option>
                                        <option value="Commodities 4">Commodities 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Quantity of goods</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message / Note"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"><strong class="font-sm-bold color-grey-900">Extra
                                        Services</strong>
                                    <div class="row mt-10 box-cb-form">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input class="cd-form" type="checkbox">Express Delivery (+$40)
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input class="cd-form" type="checkbox">Add Insurance (+$20)
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input class="cd-form" type="checkbox">Packaging (+$15)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12"><a class="btn btn-brand-1-big mr-25" href="#">
                                    <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z">
                                        </path>
                                    </svg>Cost Calculation</a><a class="btn btn-link-medium" href="contact.html">Contact
                                    Us
                                    <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box-image-contact"><img src="{{asset('client/imgs/page/homepage1/img-contact.png')}}"
                                alt="DML Express"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-80 mb-70 bg-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box-faqs-left">
                        <h2 class="title-favicon mb-20 wow animate__animated animate__fadeIn">FAQs</h2>
                        <p class="font-md color-grey-700 mb-50 wow animate__animated animate__fadeIn">Feeling
                            inquisitive? Have a
                            read through some of our FAQs or contact our supporters for help</p>
                        <div class="box-gallery-faqs">
                            <div class="image-top"><img src="{{asset('client/imgs/page/homepage1/img-faq1.png')}}"
                                    alt="DML Express"></div>
                            <div class="image-bottom">
                                <div class="image-faq-1"><img src="{{asset('client/imgs/page/homepage1/img-faq2.png')}}"
                                        alt="DML Express"></div>
                                <div class="image-faq-2"><img src="{{asset('client/imgs/page/homepage1/img-faq3.png')}}"
                                        alt="DML Express"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box-accordion">
                        <div class="accordion" id="accordionFAQ">
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button text-heading-5" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">How can I return
                                        an item purchased online?</button>
                                </h5>
                                <div class="accordion-collapse collapse show" id="collapseTwo"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It
                                        has roots in a piece of classical Latin literature Id pro doctus mediocrem
                                        erroribus, diam nostro
                                        sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii
                                        his, pri cu epicuri
                                        perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex
                                        illum officiis id.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button text-heading-5 collapsed text-heading-5 type="
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">Can I cancel or
                                        change my order?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseThree"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Aut architecto consequatur sit error nemo sed
                                        dolorum suscipit 33
                                        impedit dignissimos ut velit blanditiis qui quos magni id dolore
                                        dignissimos. Sit ipsa consectetur
                                        et sint harum et dicta consequuntur id cupiditate perferendis qui quisquam
                                        enim. Vel autem illo id
                                        error excepturi est dolorum voluptas qui maxime consequatur et culpa
                                        quibusdam in iusto vero sit
                                        amet Quis.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">I have
                                        promotional or discount code?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFour"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Eos nostrum aperiam ab enim quas sit voluptate
                                        fuga. Ea aperiam voluptas
                                        a accusantium similique 33 alias sapiente non vitae repellat et dolorum
                                        omnis eos beatae
                                        praesentium id sunt corporis. Aut nisi blanditiis aut corrupti quae et
                                        accusantium doloribus sed
                                        tempore libero a dolorum beatae.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">What are the
                                        delivery types you use?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseFive"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Et beatae quae ex minima porro aut nihil quia sed
                                        optio dignissimos et
                                        voluptates deleniti et nesciunt veritatis et suscipit quod. Est sint
                                        voluptate id unde nesciunt
                                        non deleniti debitis. Ut dolores tempore vel placeat nemo quo enim
                                        reprehenderit eos corrupti
                                        maiores et minima quaerat. Quo sequi eaque eum similique sint et autem
                                        perspiciatis cum Quis
                                        exercitationem quo quos excepturi non ducimus ducimus eos natus velit.</div>
                                </div>
                            </div>
                            <div class="accordion-item wow animate__animated animate__fadeIn">
                                <h5 class="accordion-header" id="headingSix">
                                    <button class="accordion-button text-heading-5 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">How can I pay for
                                        my purchases?</button>
                                </h5>
                                <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">Qui quas itaque ut molestias culpa vel culpa
                                        voluptas eos fugit sint ex
                                        veritatis totam cum unde maxime! Qui eius fugiat qui veritatis cumque a
                                        nesciunt nemo. Id numquam
                                        rerum est molestiae quia ut nisi architecto a officiis itaque eum quod
                                        repellat ut dolorem dolorem
                                        aut ipsam ipsa.</div>
                                </div>
                            </div>
                        </div>
                        <div class="line-border mt-50 mb-50"></div>
                        <h3 class="color-brand-2 wow animate__animated animate__fadeIn">Nead more help?</h3>
                        <div class="mt-20"><a class="btn btn-brand-1-big mr-20 wow animate__animated animate__fadeIn"
                                href="contact.html">Contact Us</a><a
                                class="btn btn-link-medium wow animate__animated animate__fadeIn" href="#">Learn
                                More
                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-70 pb-70 bg-get-quote">
        <div class="container">
            <div class="box-get-quote">
                <div class="get-quote-left">
                    <p class="font-3xl color-white mb-10 wow animate__animated animate__fadeIn">Have any ideas in
                        your mind?</p>
                    <h2 class="color-brand-1 wow animate__animated animate__fadeIn">Create your next Project with
                        Us</h2>
                </div>
                <div class="get-quote-right"><a class="btn btn-get-quote wow animate__animated animate__fadeIn"
                        href="#">
                        <svg class="mr-10" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                            </path>
                        </svg>GET A QUOTE</a></div>
            </div>
        </div>
    </section>
    <section class="section mt-110">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <h2 class="title-favicon mb-2 wow animate__animated animate__fadeIn0">Latest News</h2>
                    <p class="font-md color-grey-700 wow animate__animated animate__fadeIn">The latest information
                        about
                        shipping services and our promotions</p>
                </div>
                <div class="col-lg-4 col-md-4 text-end">
                    <div class="box-button-sliders">
                        <div class="swiper-button-prev swiper-button-prev-style-1 swiper-button-prev-customers">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next swiper-button-next-style-1 swiper-button-next-customers">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-3-customers pb-50">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="card-blog-grid hover-up">
                                    <div class="card-image"><a href="blog-sing.html"><img
                                                src="{{asset('client/imgs/page/homepage1/news1.png')}}" alt="DML Express"></a><a
                                            class="btn btn-border-brand-1 mr-15" href="blog.html">Shipping</a></div>
                                    <div class="card-info"><a href="blog-sing.html">
                                            <h5 class="color-brand-2">How to find reliable logistics company in
                                                China and Asia</h5>
                                        </a>
                                        <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id
                                            dignissim arcu volutpat
                                            vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu,
                                            blandit at aliquet sit
                                            amet, convallis nec risus.</p>
                                        <div class="line-border"></div>
                                        <div class="mt-5 d-flex align-items-center justify-content-between pt-0">
                                            <a class="btn btn-link font-sm color-brand-2" href="#">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a><span class="date-post font-sm color-grey-700">29 May
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="card-blog-grid hover-up">
                                    <div class="card-image"><a href="blog-sing.html"><img
                                                src="{{asset('client/imgs/page/homepage1/news2.png')}}" alt="DML Express"></a><a
                                            class="btn btn-border-brand-1 mr-15" href="blog.html">Shipping</a></div>
                                    <div class="card-info"><a href="blog-sing.html">
                                            <h5 class="color-brand-2">How to find reliable logistics company in
                                                China and Asia</h5>
                                        </a>
                                        <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id
                                            dignissim arcu volutpat
                                            vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu,
                                            blandit at aliquet sit
                                            amet, convallis nec risus.</p>
                                        <div class="line-border"></div>
                                        <div class="mt-5 d-flex align-items-center justify-content-between pt-0">
                                            <a class="btn btn-link font-sm color-brand-2" href="#">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a><span class="date-post font-sm color-grey-700">29 May
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide wow animate__animated animate__fadeIn">
                                <div class="card-blog-grid hover-up">
                                    <div class="card-image"><a href="blog-sing.html"><img
                                                src="{{asset('client/imgs/page/homepage1/news3.png')}}" alt="DML Express"></a><a
                                            class="btn btn-border-brand-1 mr-15" href="blog.html">Shipping</a></div>
                                    <div class="card-info"><a href="blog-sing.html">
                                            <h5 class="color-brand-2">How to find reliable logistics company in
                                                China and Asia</h5>
                                        </a>
                                        <p class="font-sm color-grey-500 mt-20">Fusce dictum ullamcorper dui, id
                                            dignissim arcu volutpat
                                            vitae. Aenean mattis vestibulum odio eu facilisis. Aenean quam arcu,
                                            blandit at aliquet sit
                                            amet, convallis nec risus.</p>
                                        <div class="line-border"></div>
                                        <div class="mt-5 d-flex align-items-center justify-content-between pt-0">
                                            <a class="btn btn-link font-sm color-brand-2" href="#">View
                                                Details<span>
                                                    <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor"
                                                        viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                    </svg></span></a><span class="date-post font-sm color-grey-700">29 May
                                                2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section bg-map d-block">
        <div class="container">
            <div class="box-map">

                <iframe class="wow animate__animated animate__fadeIn"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29204.41329775683!2d90.3154187743164!3d23.798974500000025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0e62cb1ea8d%3A0xced738d6e5c9f376!2sDML%20Worldwide%20Express%20Bangladesh%20Ltd.!5e0!3m2!1sen!2sbd!4v1715877710847!5m2!1sen!2sbd"
                    height="420" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="map-info"><img class="mb-25 wow animate__animated animate__fadeIn"
                        src="{{asset('client/imgs/template/logo.png')}}" width="120px" alt="DML Express">
                    <p class="color-grey-700 mb-25 wow animate__animated animate__fadeIn">144, Muktobangla
                        Shopping Complex (1st Floor) Mirpur 1, Dhaka 1216</p>
                    <p class="color-grey-700 mb-10 wow animate__animated animate__fadeIn">
                        <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                            </path>
                        </svg>Phone: +8801761 740 478 (Call 24/7)
                    </p>
                    <p class="color-grey-700 mb-30 wow animate__animated animate__fadeIn">
                        <svg class="icon-16 mr-10 color-brand-1" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                            </path>
                        </svg>Email: support@dml.com.bd
                    </p>
                    <div class="line-border mb-25 wow animate__animated animate__fadeIn"></div>
                    <p class="color-grey-700 font-md-bold wow animate__animated animate__fadeIn">Hours: 8:00 -
                        17:00, Mon - Sat
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
