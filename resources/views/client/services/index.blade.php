@extends('client.layout.app')
@section('title', $seoContent->title ?? 'Services')
@section('description', $seoContent->description ?? 'Services')
@section('keywords', $seoContent->keywords ?? 'Services')

@section('content')
    <section class="section d-block position-relative">
        <div class="box">
            <div class="box-pageheader-1 text-center">
                <span class="btn btn-tag wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn;">What Services We Provide</span>
                <h2 class="color-brand-1 mt-15 mb-10 wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn;">Services</h2>
                <p class="font-md color-white wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn;">We have been pioneering the industry in Bangladesh
                    for
                    12 years, and delivering value<br class="d-none d-lg-block">products within given timeframe, every single
                    time.
                </p>
            </div>
        </div>
    </section>

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
                        href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd.">
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
                            <div class="card-image"><img src="{{ asset('client/imgs/page/homepage1/delivery.png') }}"
                                    alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Worldwide Express</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2" href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd.">View
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
                            <div class="card-image"><img src="{{ asset('client/imgs/page/homepage1/plane.png') }}"
                                    alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Air Freight Forwarding</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2" href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd.">View
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
                            <div class="card-image"><img src="{{ asset('client/imgs/page/homepage1/cargo-ship.png') }}"
                                    alt="DML Express"></div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Ocean Freight</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2" href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd.">View
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
                            <div class="card-image"><img src="{{ asset('client/imgs/page/homepage1/forklift.png') }}"
                                    alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Warehouse &amp; Distribution</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2" href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd.">View
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
                            <div class="card-image"><img src="{{ asset('client/imgs/page/homepage1/train.png') }}"
                                    alt="DML Express">
                            </div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Road Freight</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2" href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd.">View
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
                            <div class="card-image"><img src="{{ asset('client/imgs/page/homepage1/worldwide.png') }}"
                                    alt="DML Express"></div>
                            <div class="card-info">
                                <h5 class="color-brand-2 mb-15">Customs Clearance</h5>
                                <p class="font-sm color-grey-900 mb-35">We are professional in ocean freight with
                                    more than 12 years
                                    of experience and have shipped more than 100k shipments.</p>
                                <div class="box-button-offer mb-30"><a class="btn btn-link font-sm color-brand-2" href="https://api.whatsapp.com/send?phone={{ $contactInfo->whatsapp }}&text=Hi%21%20I%20need%20more%20information%20about%20DML%20Worldwide%20Express%20Bangladesh%20Ltd.">View
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
            <div class="text-center"><img class="mb-15" src="{{ asset('client/imgs/template/icons/favicon.svg') }}"
                    alt="DML Express">
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
                                src="{{ asset('client/imgs/page/homepage1/img1.png') }}" alt="DML Express">
                            <div class="image-2 shape-3"><img src="{{ asset('client/imgs/page/homepage1/icon1.png') }}"
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
                                class="hover-up mr-10" href="#"><img
                                    src="{{ asset('client/imgs/template/appstore-btn.png') }}" alt="DML Express"></a><a
                                class="hover-up" href="#"><img
                                    src="{{ asset('client/imgs/template/google-play-btn.png') }}" alt="DML Express"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
