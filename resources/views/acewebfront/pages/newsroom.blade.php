@extends('acewebfront.layouts')
@section('meta')
<meta property="og:image" content="{{ uploaded_asset(get_setting('system_logo_white')) }}" />
@endsection
@section('content')
<main>
    <section class="ace-investor">
        <div data-aos="fade-up">
            <div class="col-md-12">
                <div class="banner-static">
                    <img class="img-responsive-banner newsroom-banner" src="/public/aceweb/assets/img/newsroom-banner.jpg"
                        alt="ACE-BANNER-NEWSROOM" />
                </div>
            </div>
        </div>
    </section>

    <section class="gtp-anouncements">
        <div class="content-ace">
            <div class="wrap-content">
                <div style="padding-top: 0px" class="ace-isi about">
                    <div class="col-md-12" style="margin-top: 5%">
                        <div data-aos="fade-up" class="title-ace">
                            NEWS & EVENTS
                            <span class="h-dash" style="font-weight: bold">—</span>
                        </div>
                    </div>
                    <div data-aos="fade-up" class="col-md-12 col-sm-12">
                        <h1>Stay Updated with the Latest news</h1>
                    </div>

                    <div style="margin-top: 50px" class="row-personals">
                        <div class="col-md-9">

                        </div>
                        <div class="col-md-3">
                            <div class="row-personals">
                                <div style="margin: auto">Sort by:</div>
                                <div style="margin-left: 20px">
                                    <select class="form-control" id="category"
                                        onchange="window.location = jQuery('#category option:selected').val();">
                                        <option value="">--SELECT CATEGORY--</option>
                                        <option value="{{ url('newsroom?category=ALL') }}"
                                            @if (isset($_GET['category'])) @if ($_GET['category']=='ALL' ) selected @endif
                                            @endif>ALL NEWS</option>
                                            <option value="{{ url('newsroom?category=LATEST') }}"
                                            @if (isset($_GET['category'])) @if ($_GET['category']=='LATEST' ) selected @endif
                                            @endif>Latest</option>
                                        <option value="{{ url('newsroom?category=MARKET') }}"
                                            @if (isset($_GET['category'])) @if ($_GET['category']=='MARKET' ) selected @endif
                                            @endif>Market Insights</option>
                                        <option value="{{ url('newsroom?category=COMPANY') }}"
                                            @if (isset($_GET['category'])) @if ($_GET['category']=='COMPANY' ) selected @endif
                                            @endif>Company News</option>
                                        <!-- <option value="{{ url('newsroom?category=AIAB') }}" @if (isset($_GET['category'])) @if ($_GET['category'] == 'AIAB') selected @endif @endif>AIAB</option> -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" style="margin-top: 40px" class="row aos-init aos-animate">
                        @foreach ($data as $i => $v)
                        <div class="col-md-4">
                            <a href="{{ url('newsroom/' . $v->slug) }}">
                                <img class="img-responsive-news rounded" src="{{ getimage($v->banner) }}"
                                    alt="" />
                                <p style="margin-top:18px;margin-bottom: 18px;">{{ $v->title }}</p>
                            </a>
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
    </section>
</main>
@endsection