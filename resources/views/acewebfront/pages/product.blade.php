@extends('acewebfront.layouts')
@section('meta')
<meta property="og:image" content="{{ uploaded_asset(get_setting('system_logo_white')) }}" />
@endsection
@section('content')
<main>
    <section class="ace-investor">

        <div class="col-md-12">
            <div class="banner-static">
                <img class="img-responsive-banner" src="/public/aceweb/assets/img/product-banner.png"
                    alt="ACE-BANNER-PRODUCT" />
            </div>
        </div>
    </section>

    <section class="gtp-anouncements">
        <div class="content-ace">
            <div class="wrap-content">

                <div style="padding-top: 0px" class="ace-isi about">
                    <div class="col-md-12" style="margin-top: 5%">
                        <div data-aos="fade-up" class="title-ace">
                            OUR PRODUCTS
                            <span class="h-dash" style="font-weight: bold">—</span>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="col-md-12 col-sm-12">
                        <h1>Investment Precious Metals</h1>
                    </div>

                    <div style="margin-top: 50px" class="row-personals">
                        <div class="col-md-9">
                            Whether you are a wholesaler, retailer or dealer,
                            <br> you
                            can register with us. For more enquiries
                            <br><a href="https://api.whatsapp.com/send?phone=601128613355&text=IGRgoldbar"
                                target="_blank">click here !</a>
                        </div>
                        <div class="col-md-3">
                            <div class="row-personals">
                                <div style="margin: auto">Sort by:</div>
                                <div style="margin-left: 20px">
                                    <select class="form-control">
                                        <option value="">Price: Low to Height</option>
                                        <option value="">Price: Heigh to Low</option>
                                        <option value="">Latest</option>
                                        <option value="">Brands</option>
                                        <option value="">Weight</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row"
                        style="
              margin-top: 80px;
              margin-bottom: 80px;
          ">
                        @foreach ($data as $i => $v)
                        <div class="col-md-4 col-sm-4">

                            <div data-aos="fade-up" class="cards"
                                style="position: relative;
                                    overflow: hidden;">
                                @if (home_price($v) != home_discounted_price($v))
                                <span class="discount">PROMO</span>
                                @endif
                                <!-- <a href="#"> -->
                                <a href="{{ url('our_products/' . $v->slug) }}">
                                    <center><img class="img-responsive-product"
                                            src="{{ getimage($v->thumbnail_img) }}" alt="" /></center>
                                            <br>
                                    <p>{{ $v->brand->name.' '.$v->name }}</p>
                                    <div style="display:none" class="gram">{{ $v->weight }}</div>

                                    @if (home_price($v) != home_discounted_price($v))
                                    <div style="display: flex;"></div>
                                    <h5 class="price"> {{ home_discounted_price($v) }}</h5>
                                    <h5 class="price">
                                        <del style="color:#bec0c2">
                                            Premium - {{ home_price($v) }} / {{$v->unit}}
                                        </del>
                                    </h5>
                                    @else
                                    <h5 class="price">Premium - {{ format_price($v->unit_price) }} / {{$v->unit}}</h5>
                                    @endif

                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div style="margin-top: 20px;" class="row">
                        <div class="container">
                            <div class="col-md-12">

                                <div class="d-flex justify-content-center">
                                    {!! $data->links() !!}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="modal fade modaldiscount" id="discountbanner" tabindex="-1">
                <div class="modal-dialog modal-md">
                    <div style="background-color: transparent;border:none;" class="modal-content">



                        <div class="modal-body">
                            <button style="position: absolute;
                    left: 90%;" type="button"
                                class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>
                            <img class="img-responsive" src="{{ static_asset('aceweb') }}/assets/img/popupdiscounts.gif">
                        </div>

                    </div>
                </div>
            </div> -->


    </section>
    <div class="wa-floating-button" onclick="openWhatsApp()">
        <span class="whatsapp-icon"><i class="fa fa-phone"></i></span>
    </div>

</main>



<script type="text/javascript">
    $(window).on('load', function() {
        $('#discountbanner').modal('show');
    });
</script>
<script>
    function openWhatsApp() {
        window.open("https://api.whatsapp.com/send?phone=601128613355&text=IGRgoldbar", "_blank");
    }
</script>

{{-- <script src="{{ static_asset('aceweb') }}/assets/ace/realprice.js"></script> --}}
@endsection
