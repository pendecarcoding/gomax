@extends('acewebfront.layouts')
@section('meta')
<meta property="og:image" content="{{ uploaded_asset(get_setting('system_logo_white')) }}" />
@endsection
@section('content')


<main style="position: relative;
 overflow: hidden;">
<section class="bg-gradient-to-br from-slate-50 to-slate-100 py-12"><div class="max-w-7xl mx-auto px-6"><div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8"><div><h2 class="text-3xl font-bold text-slate-800 mb-2">Live Market Prices</h2><p class="text-slate-600">Real-time precious metals trading rates</p></div><div class="flex flex-col items-end space-y-2 mt-4 md:mt-0"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow h-8 rounded-md px-3 text-xs bg-teal-600 hover:bg-teal-700 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-cw w-4 h-4 mr-2" aria-hidden="true"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>Refresh Prices</button><span class="text-xs text-slate-500">Last updated: 11:55:49 PM</span></div></div><div class="rounded-xl bg-card text-card-foreground shadow-xl border-0 overflow-hidden"><div class="p-0"><div class="overflow-x-auto"><table class="w-full"><thead><tr class="bg-gradient-to-r from-slate-800 to-slate-700 text-white"><th class="px-6 py-4 text-left font-semibold">#</th><th class="px-6 py-4 text-left font-semibold">Asset</th><th class="px-6 py-4 text-center font-semibold">Trend</th><th class="px-6 py-4 text-center font-semibold bg-green-600/20"><div class="flex items-center justify-center space-x-2"><span>WE BUY</span><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-secondary/80 bg-green-100 text-green-800">Best Rate</div></div></th><th class="px-6 py-4 text-center font-semibold bg-blue-600/20"><div class="flex items-center justify-center space-x-2"><span>WE SELL</span><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-secondary/80 bg-blue-100 text-blue-800">Instant</div></div></th><th class="px-6 py-4 text-center font-semibold">Spread</th></tr></thead><tbody><tr class="
                        bg-white
                        hover:bg-slate-100 transition-colors duration-200 border-b border-slate-200
                      "><td class="px-6 py-4 font-medium text-slate-600">1</td><td class="px-6 py-4"><div class="flex flex-col"><span class="font-semibold text-slate-800">999.9 Gold</span><span class="text-sm text-slate-500">(MYR) per Kilogram</span></div></td><td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 text-green-500" aria-hidden="true"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg></td><td class="px-6 py-4 text-center"><div class="bg-green-50 rounded-lg p-3 border border-green-200"><span class="text-lg font-bold text-green-700">449,500.00</span></div></td><td class="px-6 py-4 text-center"><div class="bg-blue-50 rounded-lg p-3 border border-blue-200"><span class="text-lg font-bold text-blue-700">500,000.00</span></div></td><td class="px-6 py-4 text-center"><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground font-medium">11.23%</div></td></tr><tr class="
                        bg-slate-50
                        hover:bg-slate-100 transition-colors duration-200 border-b border-slate-200
                      "><td class="px-6 py-4 font-medium text-slate-600">2</td><td class="px-6 py-4"><div class="flex flex-col"><span class="font-semibold text-slate-800">999.9 Gold</span><span class="text-sm text-slate-500">(MYR) per Gram</span></div></td><td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 text-green-500" aria-hidden="true"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg></td><td class="px-6 py-4 text-center"><div class="bg-green-50 rounded-lg p-3 border border-green-200"><span class="text-lg font-bold text-green-700">489.50</span></div></td><td class="px-6 py-4 text-center"><div class="bg-blue-50 rounded-lg p-3 border border-blue-200"><span class="text-lg font-bold text-blue-700">500.00</span></div></td><td class="px-6 py-4 text-center"><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground font-medium">2.15%</div></td></tr><tr class="
                        bg-white
                        hover:bg-slate-100 transition-colors duration-200 border-b border-slate-200
                      "><td class="px-6 py-4 font-medium text-slate-600">3</td><td class="px-6 py-4"><div class="flex flex-col"><span class="font-semibold text-slate-800">999.9 Gold</span><span class="text-sm text-slate-500">(MYR) per Tael</span></div></td><td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-down w-4 h-4 text-red-500" aria-hidden="true"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline><polyline points="16 17 22 17 22 11"></polyline></svg></td><td class="px-6 py-4 text-center"><div class="bg-green-50 rounded-lg p-3 border border-green-200"><span class="text-lg font-bold text-green-700">15,500.00</span></div></td><td class="px-6 py-4 text-center"><div class="bg-blue-50 rounded-lg p-3 border border-blue-200"><span class="text-lg font-bold text-blue-700">17,000.02</span></div></td><td class="px-6 py-4 text-center"><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground font-medium">9.68%</div></td></tr><tr class="
                        bg-slate-50
                        hover:bg-slate-100 transition-colors duration-200 border-b border-slate-200
                      "><td class="px-6 py-4 font-medium text-slate-600">4</td><td class="px-6 py-4"><div class="flex flex-col"><span class="font-semibold text-slate-800">999.9 Silver</span><span class="text-sm text-slate-500">(MYR) per Gram</span></div></td><td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 text-green-500" aria-hidden="true"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg></td><td class="px-6 py-4 text-center"><div class="bg-green-50 rounded-lg p-3 border border-green-200"><span class="text-lg font-bold text-green-700">200.00</span></div></td><td class="px-6 py-4 text-center"><div class="bg-blue-50 rounded-lg p-3 border border-blue-200"><span class="text-lg font-bold text-blue-700">205.02</span></div></td><td class="px-6 py-4 text-center"><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground font-medium">2.51%</div></td></tr><tr class="
                        bg-white
                        hover:bg-slate-100 transition-colors duration-200 border-b border-slate-200
                      "><td class="px-6 py-4 font-medium text-slate-600">5</td><td class="px-6 py-4"><div class="flex flex-col"><span class="font-semibold text-slate-800">999.9 Gold</span><span class="text-sm text-slate-500">(USD) per OZ</span></div></td><td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-4 h-4 text-green-500" aria-hidden="true"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg></td><td class="px-6 py-4 text-center"><div class="bg-green-50 rounded-lg p-3 border border-green-200"><span class="text-lg font-bold text-green-700">3,820.20</span></div></td><td class="px-6 py-4 text-center"><div class="bg-blue-50 rounded-lg p-3 border border-blue-200"><span class="text-lg font-bold text-blue-700">3,921.20</span></div></td><td class="px-6 py-4 text-center"><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground font-medium">2.64%</div></td></tr><tr class="
                        bg-slate-50
                        hover:bg-slate-100 transition-colors duration-200 border-b border-slate-200
                      "><td class="px-6 py-4 font-medium text-slate-600">6</td>
                      <td class="px-6 py-4"><div class="flex flex-col"><span class="font-semibold text-slate-800">USD/MYR</span><span class="text-sm text-slate-500">Exchange Rate</span></div></td><td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-down w-4 h-4 text-red-500" aria-hidden="true"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"></polyline><polyline points="16 17 22 17 22 11"></polyline></svg></td><td class="px-6 py-4 text-center"><div class="bg-green-50 rounded-lg p-3 border border-green-200"><span class="text-lg font-bold text-green-700">4.22</span></div></td><td class="px-6 py-4 text-center"><div class="bg-blue-50 rounded-lg p-3 border border-blue-200"><span class="text-lg font-bold text-blue-700">4.23</span></div></td><td class="px-6 py-4 text-center"><div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground font-medium">0.24%</div></td></tr></tbody></table></div></div></div><div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4"><div class="rounded-xl border text-card-foreground shadow bg-green-50 border-green-200">
                        
                        </div></div></section>

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
                                    <center><img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/mendal.png" alt="" /></center>
                                    <h6>Trade Gold & Silver with Ease</h6>
                                    <p>Fast, realible transactions at your fingertips</p>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <center><img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/realtime.png" alt="" /></center>
                                    <h6>Real-Time Market Alerts</h6>
                                    <p>Stay ahead with instant price updates & notifications</p>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <center><img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/delivery.png" alt="" /></center>
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
                                    <center><img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/cs.png" alt="" /></center>
                                    <h6>Clear Financial Insights</h6>
                                    <p>View your full statement & transaction history</p>
                                </div>
                            </div>
                            <div data-aos="fade-up" class="col-md-4">
                                <div class="discover">
                                    <center><img style="width: 80px; height: 80px"
                                        src="{{ static_asset('aceweb') }}/assets/img/brand.png" alt="" /></center>
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