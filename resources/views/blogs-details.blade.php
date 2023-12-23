
@extends('layouts.front')


@section('style')
    <link rel="stylesheet" href="{{asset('front_assets/css/blog-details.css')}}">
@endsection

@section('content')


    <section class="main-sec">
        <div class="image-overlay d-flex align-items-center">
            <div class="container content">
                <h3>{{$blog->title}}</h3>
                <p>{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }} - {{$blog->title}}</p>
            </div>
        </div>
    </section>

    <section class="container">
        {!! $blog->content !!}
    </section>



@endsection


@section('script')


@endsection
