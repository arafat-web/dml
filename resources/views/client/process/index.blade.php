@extends('client.layout.app')

@section('content')
<section class="section d-block position-relative">
    <div class="banner-howitwork3">
      <div class="container">
        <div class="box-info-trackyourparcel"><img class="mb-15 wow animate__ animate__fadeIn animated" src="{{asset("client/imgs/template/icons/favicon.svg")}}" alt="DML Express" style="visibility: visible; animation-name: fadeIn;">
          <h2 class="color-brand-2 mb-25 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">How It Works</h2>
          <p class="color-grey-700 font-md wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">You choose the cities where you’d like to deliver. All deliveries are within a specific service area and delivery services vary by location. Whatever the mode or requirement, we will find and book the ideal expedited shipping solution to ensure a timely delivery.</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-110">
        <div class="col-lg-6 mb-30">
          <div class="box-image-how"><img class="w-100 wow animate__ animate__fadeIn animated" src="{{asset("client/imgs/page/homepage1/how-it-work.png")}}" alt="DML Express" style="visibility: visible; animation-name: fadeIn;">
            <div class="box-info-bottom-img">
              <div class="image-play wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><img class="mb-15" src="{{asset("client/imgs/template/icons/play.svg")}}" alt="DML Express"></div>
              <div class="info-play wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <h4 class="color-white mb-15">We have 25 years experience in this passion</h4>
                <p class="font-sm color-white">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-30">
          <ul class="list-how-works">
            <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
              <div class="image-how"><span class="img"><img src="{{asset("client/imgs/page/homepage1/order.png")}}" alt="DML Express"></span></div>
              <div class="info-how">
                <h5 class="color-brand-2">Customer places order</h5>
                <p class="font-md color-grey-700">Inspection and quality check of goods</p>
              </div>
            </li>
            <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
              <div class="image-how"><span class="img"><img src="{{asset("client/imgs/page/homepage1/payment.png")}}" alt="DML Express"></span></div>
              <div class="info-how">
                <h5 class="color-brand-2">Payment successful</h5>
                <p class="font-md color-grey-700">Payoneer, Paypal, or Visa master card</p>
              </div>
            </li>
            <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
              <div class="image-how"><span class="img"><img src="{{asset("client/imgs/page/homepage1/warehouse.png")}}" alt="DML Express"></span></div>
              <div class="info-how">
                <h5 class="color-brand-2">Warehouse receives order</h5>
                <p class="font-md color-grey-700">Check the accuracy of the goods.</p>
              </div>
            </li>
            <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
              <div class="image-how"><span class="img"><img src="{{asset("client/imgs/page/homepage1/picked.png")}}" alt="DML Express"></span></div>
              <div class="info-how">
                <h5 class="color-brand-2">Item picked, packed &amp; shipped</h5>
                <p class="font-md color-grey-700">Ship the goods to a local carrier</p>
              </div>
            </li>
            <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
              <div class="image-how"><span class="img"><img src="{{asset("client/imgs/page/homepage1/delivery.png")}}" alt="DML Express"></span></div>
              <div class="info-how">
                <h5 class="color-brand-2">Delivered &amp; Measure success</h5>
                <p class="font-md color-grey-700">Update order status on the system</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section mt-80">
    <div class="container">
      <div class="text-center"><img class="mb-15 wow animate__ animate__fadeIn animated" src="{{asset("client/imgs/template/icons/favicon.svg")}}" alt="DML Express" style="visibility: visible; animation-name: fadeIn;">
        <h2 class="color-brand-2 mb-25 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Our Process</h2>
        <div class="row">
          <div class="col-lg-8 m-auto">
            <p class="color-grey-700 font-md wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">We invest time and expertise to fully understand your business before designing plans to improve your supply chain. We take responsibility for the performance of all our suppliers and for ensuring the availability of resources and equipment needed to control the flow of goods under our charge.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section mt-70">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-60"><img class="mb-15 wow animate__ animate__fadeIn animated" src="{{asset("client/imgs/page/workprocess/parachute.png")}}" alt="DML Express" style="visibility: visible; animation-name: fadeIn;">
          <h3 class="color-brand-2 mb-15 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Logistics Defined</h3>
          <p class="font-md color-grey-700 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Logistics is the planning framework used by the management of an organization to facilitate the distribution of personnel, materiel, service, information and capital flows.</p>
          <div class="mt-20"><a class="btn btn-link font-sm color-brand-2 wow animate__ animate__fadeIn animated" href="#" style="visibility: visible; animation-name: fadeIn;">View Details<span>
                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg></span></a></div>
        </div>
        <div class="col-lg-6 mb-60"><a class="wow animate__ animate__fadeIn animated" href="#" style="visibility: visible; animation-name: fadeIn;"><img src="{{asset("client/imgs/page/workprocess/img1.png")}}" alt="DML Express"></a></div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 mb-60"><a class="wow animate__ animate__fadeIn animated" href="#" style="visibility: visible; animation-name: fadeIn;"><img src="{{asset("client/imgs/page/workprocess/img2.png")}}" alt="DML Express"></a></div>
        <div class="col-lg-6 mb-60"><img class="mb-15 wow animate__ animate__fadeIn animated" src="{{asset("client/imgs/page/workprocess/pallet.png")}}" alt="DML Express" style="visibility: visible; animation-name: fadeIn;">
          <h3 class="color-brand-2 mb-15 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Logistical Processes</h3>
          <p class="font-md color-grey-700 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Logistics is the planning framework used by the management of an organization to facilitate the distribution of personnel, materiel, service, information and capital flows.</p>
          <div class="mt-20 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><a class="btn btn-link font-sm color-brand-2" href="#">View Details<span>
                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg></span></a></div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 mb-60"><img class="mb-15 wow animate__ animate__fadeIn animated" src="{{asset("client/imgs/page/workprocess/plane.png")}}" alt="DML Express" style="visibility: visible; animation-name: fadeIn;">
          <h3 class="color-brand-2 mb-15 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Production Management</h3>
          <p class="font-md color-grey-700 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Logistics is the planning framework used by the management of an organization to facilitate the distribution of personnel, materiel, service, information and capital flows.</p>
          <div class="mt-20"><a class="btn btn-link font-sm color-brand-2 wow animate__ animate__fadeIn animated" href="#" style="visibility: visible; animation-name: fadeIn;">View Details<span>
                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg></span></a></div>
        </div>
        <div class="col-lg-6 mb-60 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><a href="#"><img src="{{asset("client/imgs/page/workprocess/img3.png")}}" alt="DML Express"></a></div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 mb-60 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><a href="#"><img src="{{asset("client/imgs/page/workprocess/img4.png")}}" alt="DML Express"></a></div>
        <div class="col-lg-6 mb-60"><img class="mb-15 wow animate__ animate__fadeIn animated" src="{{asset("client/imgs/page/workprocess/cardboard.png")}}" alt="DML Express" style="visibility: visible; animation-name: fadeIn;">
          <h3 class="color-brand-2 mb-15 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Assembly Processing</h3>
          <p class="font-md color-grey-700 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Logistics is the planning framework used by the management of an organization to facilitate the distribution of personnel, materiel, service, information and capital flows.</p>
          <div class="mt-20 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><a class="btn btn-link font-sm color-brand-2" href="#">View Details<span>
                <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg></span></a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section pt-110 pb-110">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="item-reason wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="card-offer cardServiceStyle3 hover-up">
                  <div class="card-image"><img src="{{asset("client/imgs/page/homepage1/container.png")}}" alt="DML Express"></div>
                  <div class="card-info">
                    <h5 class="color-brand-2 mb-15">Shipping Options</h5>
                    <p class="font-sm color-grey-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="item-reason wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="card-offer cardServiceStyle3 hover-up">
                  <div class="card-image"><img src="{{asset("client/imgs/page/homepage1/24-hours.png")}}" alt="DML Express"></div>
                  <div class="card-info">
                    <h5 class="color-brand-2 mb-15">Customer Service</h5>
                    <p class="font-sm color-grey-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo consectetur.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="item-reason mt-30 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="card-offer cardServiceStyle3 hover-up">
                  <div class="card-image"><img src="{{asset("client/imgs/page/homepage1/stopwatch.png")}}" alt="DML Express"></div>
                  <div class="card-info">
                    <h5 class="color-brand-2 mb-15">Timely Deliveries</h5>
                    <p class="font-sm color-grey-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo consectetur.</p>
                  </div>
                </div>
              </div>
              <div class="item-reason wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="card-offer cardServiceStyle3 hover-up">
                  <div class="card-image"><img src="{{asset("client/imgs/page/homepage1/pallet.png")}}" alt="DML Express"></div>
                  <div class="card-info">
                    <h5 class="color-brand-2 mb-15">Tracking Systems</h5>
                    <p class="font-sm color-grey-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo consectetur.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="box-info-pround box-whychooseus-3"><span class="btn btn-tag color-grey-900 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Our Features</span>
            <h2 class="color-brand-2 mb-15 mt-20 wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Why choose us</h2>
            <p class="font-md color-grey-900">Sustainability is an increasingly important factor for many customers when choosing a shipping company. Your shipping company can stand out by demonstrating a commitment to sustainable practices, such as using energy-efficient vehicles, reducing waste, and offsetting carbon emissions.</p>
            <div class="mt-30">
              <ul class="list-ticks">
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>Reliable and Timely Deliveries
                </li>
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>Advanced Tracking Systems
                </li>
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>Cost-Effective Shipping Options
                </li>
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>Commitment to Sustainability
                </li>
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>Exceptional Customer Service
                </li>
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>International Shipping Expertise
                </li>
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>Flexibility and Customization
                </li>
                <li class="wow animate__ animate__fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                  <svg class="w-6 h-6 icon-16" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>Insurance and Liability Coverage
                </li>
              </ul>
            </div>
            <div class="mt-30 text-start"><a class="btn btn-brand-2 mr-20 wow animate__ animate__fadeIn animated" href="contact.html" style="visibility: visible; animation-name: fadeIn;">Contact Us</a><a class="btn btn-link-medium wow animate__ animate__fadeIn animated" href="#" style="visibility: visible; animation-name: fadeIn;">Learn More
                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection