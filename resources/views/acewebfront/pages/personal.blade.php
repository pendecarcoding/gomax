@extends('acewebfront.layouts')
@section('meta')
<meta property="og:image" content="{{ uploaded_asset(get_setting('system_logo_white')) }}" />
@endsection
@section('content')
<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .text-start {
        color: #ffffff;
    }

    td,
    th {
        border: 1px solid #6c9286;
        ;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #6c9286;
    }

    tr:hover {
        background-color: #6c9286;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #6c9286;
        color: #f7f7f7;
    }
</style>
</style>
<main style="position: relative;
 overflow: hidden;">
    <section class="ace-personal" style="height:auto;margin-top: 5%;background: #6c9286;">
        <div class="personal-banner">
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead>
                        <tr>
                            <th style="width:5%; text-align:center; vertical-align:middle;">#</th>

                            <th style="width:40%">Asset</th>
                            <th style="text-align:center; vertical-align:middle;">WE BUY</th>
                            <th style="text-align:center; vertical-align:middle;">WE SELL</th>
                        </tr>
                    </thead>
                    <tbody id="price-table">
                        <tr>
                            <td style="color:white">1</td>
                            <td class="text-start">

                                <span class="asset-name">999.9 Gold (MYR) per Kilogram</span>
                            </td>
                            <td>499,500</td>
                            <td>500,000</td>
                        </tr>
                        <tr>
                            <td style="color:white">2</td>
                            <td class="text-start">

                                <span class="asset-name">999.9 Gold (MYR) per Gram</span>
                            </td>
                            <td>499.50</td>
                            <td>500.00</td>
                        </tr>
                        <tr>
                            <td style="color:white">3</td>
                            <td class="text-start">

                                <span class="asset-name">999.9 Gold (MYR) per Tael</span>
                            </td>
                            <td>15,500.00</td>
                            <td>17,000.02</td>
                        </tr>
                        <tr>
                            <td style="color:white">4</td>
                            <td class="text-start">

                                <span class="asset-name">999.9 Silver (MYR) per Gram</span>
                            </td>
                            <td>200.00</td>
                            <td>205.02</td>
                        </tr>
                        <tr>
                            <td style="color:white">5</td>
                            <td class="text-start">

                                <span class="asset-name">999.9 Gold (USD) per OZ</span>
                            </td>
                            <td>3820.20</td>
                            <td>3821.20</td>
                        </tr>
                        <tr class="usd-row">
                            <td style="color:white">6</td>
                            <td class="text-start">

                                <span class="asset-name">USD/MYR</span>
                            </td>
                            <td>4.2201</td>
                            <td>4.2201</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="row-personal"> -->



            <!-- <div id="desktop-banner" class="col-md-9 col-sm-12 col-lg-9">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @php
                            $noslide = 0;
                            @endphp
                            @foreach ($slider as $is => $v)
                            @if (count($slider) > 1)
                            <button id="btn-slider" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide-to="{{ $is }}"
                                class="btn-slide @if ($is == 0) active @endif"
                                @if ($is==0) aria-current="true" @endif
                                aria-label="Slide {{ $is }}"></button>
                            @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($slider as $is => $v)
                            <div class="carousel-item @if ($is == 0) active @endif">
                                <img class="slider-banner" src="{{ asset('public/' . $v->file_name) }}" />
                                <div class="col-md-6">
                                    <div class="container">
                                        <div data-aos="fade-up" class="carousel-caption text-start caption-banner"
                                            style="right: 24%;left: 13%;">
                                            <div class="caption-banner">
                                                <h1>{{ $v->caption }}</h1>
                                                <p class="ace-banner-p">{{ $v->sub_caption }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div> -->
            <!-- <img
                      class="img-responsive"
                      src="{{ getimage(env('PERSONAL_IMAGE')) }}"
                      alt=""
                    />
                    <div class="container">
                      <div data-aos="fade-up" class="carousel-caption text-start caption-banner">
                        <div class="caption-banner">
                          <h1>{{ env('PERSONAL_TITLE_CAPTION') }}</h1>
                          <p class="ace-banner-p">{{ env('PERSONAL_SUB_TITLE_CAPTION') }}</p>
                        </div>
                      </div>
                    </div>-->
            <!-- </div> -->



            <!--
                <div class="col-md-3 col-sm-12 col-lg-3">
                    <div id="desktop-pricefeed" onload="WebSocketTest()" class="allprice">
                        <div class="prc-buy">
                            <table class="table-price-buy">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="center">
                                            <h4>Gold Price 999.9</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <div style="color: #1ac69c;">
                                                <i class="fa fa-circle" aria-hidden="true"></i> <span
                                                    id="statuslive">LIVE.</span> <span style="display:none" id="tradeopen"></span>
                                            </div>
                                        </td>

                                        <td style="text-align: right;padding-right: 11px;">
                                            <div id="datepricefeed"></div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="ttprice" style="font-weight: bold;">Buy</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="flex-number-row">
                                                <div class="number-feed">
                                                    <h2 id="gp_livebuyprice_gm">00.00</h2>
                                                </div>
                                                <div class="icon-arrow-pricefeed"><i id="iconlivebuy"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="ttprice">RM/GM</div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="flex-number-row">
                                                <div class="number-feed">
                                                    <h2 id="gp_livebuyprice_tael">00.00</h2>
                                                </div>
                                                <div class="icon-arrow-pricefeed">
                                                    <i id="iconlivebuytael" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="ttprice">RM/TAEL</div><br>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="prc-sell">
                            <table class="table-price-sell">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="center th-sell">
                                            <div class="ttprice" style="font-weight: bold">Sell</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>



                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="flex-number-row">
                                                <div class="number-feed">
                                                    <h2 id="gp_livesellprice_gm">00.00</h2>
                                                </div>
                                                <div class="icon-arrow-pricefeed"><i id="iconlivesell"
                                                        aria-hidden="true"></i></div>
                                            </div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="ttprice">RM/GM</div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="flex-number-row">
                                                <div class="number-feed">
                                                    <h2 id="gp_livesellprice_tael">00.00</h2>
                                                </div>

                                                <div class="icon-arrow-pricefeed"><i id="iconliveselltael"
                                                        aria-hidden="true"></i></div>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="center" colspan="3">
                                            <div class="ttprice">RM/TAEL</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <p class="ace-personal-powered">
                                                Prices above are for indicative purpose only. <span><br>Please call +603-80518972 for our Gold Trading Platform access.</span>
                                            </p>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="title-card-mobile"> LIVE. <span style="display:none" id="tradeopen-mobile"></span>
                        <span id="datepricefeed-mobile"></span>
                    </div>
                    <div id="mobile-pricefeed">
                        <div class="card">
                            <center>
                                <h4>BUY</h4>
                            </center>
                            <center>
                                <h6 id="gp_livebuyprice_gm_mobile" class="mobile-buy-rm-gm">00.00</h6>
                            </center>
                            <center>
                                <p>RM/GM</p>
                            </center>
                            <center>
                                <h6 id="gp_livebuyprice_tael_mobile" class="mobile-buy-rm-gm">00.00</h6>
                            </center>
                            <center>
                                <p>RM/TAEL</p>
                            </center>
                        </div>
                        <div class="card">
                            <center>
                                <h4>SELL</h4>
                            </center>
                            <center>
                                <h6 id="gp_livesellprice_gm_mobile" class="mobile-buy-rm-gm">00.00</h6>
                            </center>
                            <center>
                                <p>RM/GM</p>
                            </center>
                            <center>
                                <h6 id="gp_livesellprice_tael_mobile" class="mobile-buy-rm-gm">00.00</h6>
                            </center>
                            <center>
                                <p>RM/TAEL</p>
                            </center>
                        </div>

                    </div>
                    <div class="poweredby-ace">
                        <center>Prices above are for indicative purpose only. Please call +603-80518972 for our Gold Trading Platform access.
                    </div>
                    <center>
                </div> -->

            <!-- </div> -->
        </div>
    </section>

    <section class="easigold">
        <div class="content-ace">
            <div class="wrap-content">
                <div class="ace-isi about">
                    <div class="col-md-12">
                        <div data-aos="fade-up" data-aos-delay="200" class="title-ace">
                            Institutional-Grade <br> Bullion Trading
                            <span class="h-dash" style="font-weight: bold">—</span>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="row">
                        <div class="col-md-6 col-sm-6">
                            <h1>Where reliability meets market expertise</h1>
                            <h3>GO One Features</h3>
                            <div class="list-features">
                                <div class="item_direction_feature">

                                    <a href="#" onmouseover="show(1)" onmouseout="hideshow(1)" class="step1">
                                        Seamless Trading of Gold & Silver
                                    </a>

                                    <div id="hideone" class="hideone">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(2)" onmouseout="hideshow(2)" class="step1">
                                        Access to World-renowed Bullion brands
                                    </a>

                                    <div id="hidetwo" class="hidetwo">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(3)" onmouseout="hideshow(3)" class="step1">
                                        Real-time Price Alerts & Notifications
                                    </a>

                                    <div id="hide3" class="hide3">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(4)" onmouseout="hideshow(4)" class="step1">
                                        Comprehensive Portfolio Dashboard
                                    </a>

                                    <div id="hide4" class="hide4">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(5)" onmouseout="hideshow(5)" class="step1">
                                        Hassle-Free Logistics & Delivery Support
                                    </a>

                                    <div id="hide5" class="hide5">

                                    </div>


                                </div>
                            </div>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="col-md-6 col-sm-6">
                            <img class="img-phone1 pulse" src="{{ static_asset('aceweb') }}/assets/img/gomax-phone.png"
                                alt="" />
                            <!-- <img class="img-phone2 pulse" src="{{ static_asset('aceweb') }}/assets/img/phone2.png"
                                alt="" /> -->
                        </div>
                    </div>

                    <div class="row">
                        <div data-aos="fade-up" class="col-md-12">
                            <center>
                                <button style="padding: 10px;
                                    margin-top: 50px;" class="ace-button">Explore GO ONE</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="display:none" class="easigold">
        <div class="content-ace">
            <div class="wrap-content">
                <div class="ace-isi about">
                    <div class="col-md-12">
                        <div data-aos="fade-up" data-aos-delay="200" class="title-ace">
                            DIGITAL GOLD INVESTMENT
                            <span class="h-dash" style="font-weight: bold">—</span>
                        </div>
                    </div>
                    <div class="row">
                        <div data-aos="fade-up" data-aos-delay="200" class="col-md-6 col-sm-6">
                            <h1>Trading gold has never been easier and safer</h1>
                            <h3>Why invest in Digital Gold?</h3>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="col-md-6 col-sm-6">
                            <p style="color:#FFFFFF">Sleep well at night knowing your digital gold is secured in a
                                tight vault location. From as low as RM10, build up your personal savings while having
                                the ability to buy and sell at any time of the day online, based on your convenience.
                            </p>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200" class="col-md-6 col-sm-6">
                            <div class="list-features">
                                <div class="item_direction_feature">

                                    <a href="#" onmouseover="show(1)" onmouseout="hideshow(1)" class="step1">
                                        Buy and sell gold with eased
                                    </a>

                                    <div id="hideone" class="hideone">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(2)" onmouseout="hideshow(2)" class="step1">
                                        Convert to physical gold
                                    </a>

                                    <div id="hidetwo" class="hidetwo">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(3)" onmouseout="hideshow(3)" class="step1">
                                        Price alerts and notifications
                                    </a>

                                    <div id="hide3" class="hide3">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(4)" onmouseout="hideshow(4)" class="step1">
                                        View statement history
                                    </a>

                                    <div id="hide4" class="hide4">

                                    </div>

                                    <br>
                                    <a href="#" onmouseover="show(5)" onmouseout="hideshow(5)" class="step1">
                                        Tracking Logistic Status (Gold Conversion)
                                    </a>

                                    <div id="hide5" class="hide5">

                                    </div>


                                </div>
                            </div>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="300" class="col-md-6 col-sm-6">
                            <img class="img-phone3" src="{{ static_asset('aceweb') }}/assets/img/phone.png"
                                alt="" />

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="start-tranding">
            <div class="title"><b>Start trading now</b></div>
            <div style="margin-top: 20px;" class="row">
                <div id="myCarouselprovider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-next carousel-item-start">
                            <div class="mansory-horizontal">
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/igr.png" alt="">
                                </div>
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/metalor.png" alt="">
                                </div>
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/mobility.png" alt="">
                                </div>
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/gas.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active carousel-item-start">
                            <div class="mansory-horizontal">
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/gas.png" alt="">
                                </div>
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/salihin.png" alt="">
                                </div>
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/metalor.png" alt="">
                                </div>
                                <div data-aos="fade-up" class="item1-tranding aos-init aos-animate">
                                    <img src="/public/aceweb/assets/img/mobility.png" alt="">
                                </div>
                            </div>
                        </div>


                    </div>


                </div>

                <div class="indicator-providers">

                    <button id="btn-slider" type="button" data-bs-target="#myCarouselprovider" data-bs-slide-to="0"
                        aria-current="true" aria-label="Slide 1" style="background-color: #207B65;width:50px"
                        class="btn active"></button>
                    <button id="btn-slider" type="button" data-bs-target="#myCarouselprovider" data-bs-slide-to="1"
                        aria-label="Slide 2" style="background-color: #207B65;width:5px" class="btn"></button>

                </div>
            </div>
        </div>

    </section>


    <section class="gtp-patner">
        <div class="content-ace">
            <div class="wrap-content">
                <div style="padding-top: 0px" class="ace-isi about">
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 5%">
                            <div data-aos="fade-up" class="title-ace" style="color:#0f5883">
                                HOW WE HELP
                                <span class="h-dash" style="font-weight: bold">—</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h1 data-aos="fade-up">Our Services at a Glance</h1>
                        </div>
                        <div style="padding-top:10px" data-aos="fade-up" class="col-md-6">
                            <p>
                                GO One is designed to simplify & elevate your trading experience. From Gold to Silver trading to accessing world-class bullion brands, we provide you with a secure, efficient, and transparent ecosystem to grow and manage your precious metals portfolio.
                            </p>
                        </div>
                    </div>
                    <div style="justify-content: center; margin-top: 50px">
                        <div class="row">
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/mendal.png" alt="" />
                                    <h6>Trade Gold & Silver with Ease</h6>
                                    <p>Fast, realible transactions at your fingertips</p>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/realtime.png" alt="" />
                                    <h6>Real-Time Market Alerts</h6>
                                    <p>Stay ahead with instant price updates & notifications</p>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/delivery.png" alt="" />
                                    <h6>Streamlined Logistics</h6>
                                    <p>Hassle-free physical delivery & secure arrangements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="justify-content: center; margin-top: 50px">
                        <div class="row">
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/cs.png" alt="" />
                                    <h6>Clear Financial Insights</h6>
                                    <p>View your full statement & transaction history</p>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/brand.png" alt="" />
                                    <h6>Global Bullion Brands</h6>
                                    <p>Access trusted names in the bullion industry worldwide</p>
                                </div>
                            </div>
                            <!-- <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <img style="width: 55px; height: 50px"
                                        src="{{ static_asset('aceweb') }}/assets/img/car.png" alt="" />
                                    <h6>LOGISTIC SERVICES</h6>
                                    <p>Provides collection and delivery services</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="ace-conected">

        <div class="content-ace">
            <div id="loading">
                <img src="http://gomax.test/public/aceweb/assets/img/loading-gif.gif" alt="Loading">
            </div>
            <div class="wrap-content">
                <div class="ace-isi about">
                    <div class="row">
                        <div data-aos="fade-up" class="col-md-12 aos-init aos-animate">
                            <div class="title-ace">
                                REGISTER TODAY
                                <span class="h-dash" style="font-weight: bold">—</span>
                            </div>
                        </div>
                        <div data-aos="fade-up" class="col-md-6 col-sm-12 aos-init aos-animate">
                            <h1>Begin your Precious Metals Journey</h1>

                        </div>
                        <div data-aos="fade-up" class="col-md-6 col-sm-12 aos-init aos-animate">
                            <div class="content-about">
                                <form id="requestpatnerform">
                                    <input type="hidden" name="_token" value="MBuAbCKGJ1nVUh5RXKvgN2d9Yise1Jyy0DnODFMy">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" required="" placeholder="Name *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="numbercontact" class="form-control" placeholder="Contact Number *" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email Address *" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject *" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea style="height: 20vh" type="text" name="message" class="form-control" required="" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="ace-button-black" style="background-color: #0f5883;color:white">Get Started
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



<script src="{{ static_asset('aceweb') }}/assets/ace/pricefeed.js"></script>
<script>
    function show(x) {
        if (x == 1) {
            document.getElementById("hidetwo").style.display = "none";
            document.getElementById("hideone").style.display = "block";
            document.getElementById("hideone").innerHTML =
                "Start buying or selling gold hassle-free with the all-in-one platform. No complicated steps required.";
        }
        if (x == 2) {
            document.getElementById("hidetwo").style.display = "block";
            document.getElementById("hidetwo").innerHTML =
                "Don't fancy digital gold? Just convert to physical gold within just a few simple clicks.";
        }
        if (x == 3) {
            document.getElementById("hide3").style.display = "block";
            document.getElementById("hide3").innerHTML =
                "Stay updated with the current live gold market prices so you'll never miss any amazing opportunities.";
        }
        if (x == 4) {
            document.getElementById("hide4").style.display = "block";
            document.getElementById("hide4").innerHTML =
                "Take a look at all of your digital gold purchases made in the past or present.";
        }
        if (x == 5) {
            document.getElementById("hide5").style.display = "block";
            document.getElementById("hide5").innerHTML =
                "Keep track of where your physical gold is located while we make its way to you.";
        }
    }

    function hideshow(x) {
        if (x == 1) {
            document.getElementById("hideone").style.display = "none";
        }
        if (x == 2) {
            document.getElementById("hidetwo").style.display = "none";
        }
        if (x == 3) {
            document.getElementById("hide3").style.display = "none";
        }
        if (x == 4) {
            document.getElementById("hide4").style.display = "none";
        }
        if (x == 5) {
            document.getElementById("hide5").style.display = "none";
        }
    }
</script>

<script>
    function updatePrices() {
        document.querySelectorAll('.price').forEach(cell => {
            const base = parseFloat(cell.getAttribute('data-base'));
            const randomChange = (Math.random() - 0.5) * (base * 0.002); // ±0.2%
            const newPrice = base + randomChange;
            const oldValue = parseFloat(cell.textContent.replace(/,/g, ''));

            // Tentukan apakah naik atau turun
            if (newPrice > oldValue) {
                cell.classList.add('price-up');
                cell.classList.remove('price-down');
            } else if (newPrice < oldValue) {
                cell.classList.add('price-down');
                cell.classList.remove('price-up');
            }

            // Format angka dengan pemisah ribuan
            let formatted = newPrice.toLocaleString(undefined, {
                minimumFractionDigits: newPrice < 100 ? 2 : 0,
                maximumFractionDigits: newPrice < 100 ? 2 : 0
            });

            cell.textContent = formatted;

            // Hilangkan warna highlight setelah 1 detik
            setTimeout(() => {
                cell.classList.remove('price-up', 'price-down');
            }, 1000);
        });
    }

    // Jalankan update setiap 3 detik
    setInterval(updatePrices, 3000);
</script>
@endsection