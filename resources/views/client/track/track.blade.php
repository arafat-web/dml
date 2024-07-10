@extends('client.layout.app')

@section('content')
    <section class="section d-block">
        <div class="container position-relative">
            <div class="banner-trackyourparcel"></div>
            <div class="box-info-trackyourparcel">
                <h2 class="color-brand-2 mb-25 wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn;">Package tracking is easy<br
                        class="d-none d-lg-block">with order number</h2>
                <p class="color-grey-900 font-md wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn;">Track packages from China, US Post, Canada Post,
                    Royal Mail, Deutsche Post,<br class="d-none d-lg-block">Aliexpress, UPS, Shein, FedEx, Pitney Bowes,
                    eBay, Amazon</p>
                <div class="form-trackparcel wow animate__ animate__fadeIn animated"
                    style="visibility: visible; animation-name: fadeIn;">
                    <form action="#">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Your package tracking number"
                                spellcheck="false" data-ms-editor="true">
                            <input class="btn btn-brand-1 btn-track" type="submit" value="Track Package">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
