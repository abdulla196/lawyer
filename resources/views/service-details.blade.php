
@extends('layouts.front')
@section('style')
    <link rel="stylesheet" href="{{asset('front_assets/css/service-details.css')}}">
@endsection


@section('content')


    <section class="main-sec">
        <div class="image-overlay d-flex align-items-center">
            <div class="container">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <h3>{{$service->name}}</h3>
            </div>
        </div>
    </section>
    <section class="container content">
        {!!$service->content!!}
    </section>



@endsection


@section('script')


@endsection
