@extends('acewebfront.layouts')
@section('content')
<main>
    <section class="ace-investor">

        <div class="col-md-12">
            <div class="banner-static">
                <img class="img-responsive-banner"
                    src="{{ asset('public/uploads') }}/all/ySFIbEbUUtgi6okRteLoDLH71K9faQfB3X5nKqCZ.jpg"
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
                            For 100 grams and above or bulk order please DM us with the info quantity
                            <br>You're welcome to be our reseller/dealer with free registration
                            <br><a href="http://www.wasap.my/+601128613355/IGRgoldbar" target="_blank">For more
                                enquiries please contact us at +011-28613355</a>
                        </div>
                        <div class="col-md-3">
                            <div class="row-personals">
                                <div style="margin: auto">Sort by:</div>
                                <div style="margin-left: 20px">
                                    <select class="form-control">
                                        <option value="">Price: Low to Height</option>
                                        <option value="">Price: Heigh to Low</option>
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
                            <div data-aos="fade-up" class="cards">
                                <a href="{{url('our_products/'.$v->slug)}}">
                                    <center><img class="img-responsive-product"
                                            src="{{ getimage($v->thumbnail_img) }}" alt="" /></center>
                                    <p>{{ $v->name }}</p>
                                    <div style="display:none" class="gram">{{ $v->weight }}</div>
                                    <h5 class="price">{{ format_price($v->unit_price) }}</h5>
                                </a>
                            </div>
                        </div>
                        <!-- <span class="discount">20%</span> -->
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
        <div class="modal fade modaldiscount" id="discountbanner" tabindex="-1">
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
        </div>


    </section>


</main>



<script type="text/javascript">
    $(window).on('load', function() {
        $('#discountbanner').modal('show');
    });
</script>

{{-- <script src="{{ static_asset('aceweb') }}/assets/ace/realprice.js"></script> --}}
@endsection