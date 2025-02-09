<div class="box-bar bg-grey-900">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-8 col-sm-5 col-4">
                <a class="phone-icon mr-45" href="tel:{{ $contactInfo->phone }}">
                    <i class="bi bi-telephone"></i>
                    Phone: {{ $contactInfo->phone }} (Any time 24/7)
                </a>
                <a class="email-icon" href="mailto:{{ $contactInfo->email }}">
                    <i class="bi bi-envelope"></i>
                    Email: {{ $contactInfo->email }}
                </a>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-7 col-8 text-end">
                <a class="icon-socials icon-twitter2" href="{{ $contactInfo->twitter }}">
                    <i class="bi bi-twitter text-white"></i>
                </a>
                <a class="icon-socials icon-facebook2" href="{{ $contactInfo->facebook }}">
                    <i class="bi bi-facebook text-white"></i>
                </a>
                <a class="icon-socials icon-instagram2" href="{{ $contactInfo->instagram }}">
                    <i class="bi bi-instagram text-white"></i>
                </a>
                <a class="icon-socials icon-youtube2" href="https://t.me/{{ $contactInfo->telegram }}">
                    <i class="bi bi-telegram text-white"></i>
                </a>
                <a class="icon-socials icon-skype2" href="https://wa.me/{{ $contactInfo->whatsapp }}">
                    <i class="bi bi-whatsapp text-white"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo">
                    <a class="d-flex" href="{{ route('home') }}">
                        <img alt="Ecom" src="{{ asset('client/imgs/template/logo.png') }}">
                    </a>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li>
                                <a class="{{ request()->routeIs('home') ? 'active' : '' }}"
                                    href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                                    href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('services') ? 'active' : '' }}"
                                    href="{{ route('services') }}">Services</a>
                            </li>
                            <li>
                                <a class="{{ request()->routeIs('process') ? 'active' : '' }}"
                                    href="{{ route('process') }}">Work Process</a>
                            </li>
                            {{-- <li><a href="contact.html">Contact</a></li> --}}
                            <li>
                                <a class="{{ request()->routeIs('track') ? 'active' : '' }}"
                                    href="{{ route('track') }}">Track</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-right">
                    <div class="d-inline-block box-dropdown-cart">
                        <span class="font-lg icon-list icon-account">
                            <span class="font-sm color-grey-900 arrow-down">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418">
                                    </path>
                                </svg>
                                English
                            </span>
                        </span>
                        <div class="dropdown-account">
                            <ul>
                                <li>
                                    <a class="font-md" href="#"><img src="{{ asset('client/imgs/template/icons/en.png') }}"
                                            alt="DML Express">
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a class="font-md" href="#"><img src="{{ asset('client/imgs/template/icons/fr.png') }}"
                                            alt="DML Express">
                                        French
                                    </a>
                                </li>
                                <li>
                                    <a class="font-md" href="#"><img src="{{ asset('client/imgs/template/icons/cn.png') }}"
                                            alt="DML Express">
                                        Chiness
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none d-sm-inline-block">
                        {{-- <a class="btn btn-default mr-10 hover-up" href="#">Login</a> --}}
                        <a class="btn btn-brand-1 d-none d-xl-inline-block hover-up" href="https://wa.me/{{ $contactInfo->whatsapp }}">
                            <i class="bi bi-telephone"></i>
                            Get a quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
