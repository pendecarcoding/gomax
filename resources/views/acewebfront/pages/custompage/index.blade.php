@extends('acewebfront.layouts')
@section('meta')
<meta property="og:image" content="{{ uploaded_asset(get_setting('system_logo_white')) }}" />
@endsection
@section('content')

{!! $data->content !!}


@endsection