
@extends('layouts.front')


@section('style')
    <link rel="stylesheet" href="{{asset('front_assets/css/blogs.css')}}">
@endsection

@section('content')

    <div class="home">
        <div class="image-overlay d-flex align-items-center">
            <div class="uagb-container-inner-blocks-wrap container">
                <p>Fresh from the press</p>
                <h4>Blogs</h4>
            </div>
        </div>
    </div>

    <section class="container blogs">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <img src="{{asset($blog->image)}}" class="img-fluid" alt="">
                            <h4><a href="">{{$blog->title}}</a></h4>
                            <p class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}
                            </p>
                            <p>{{$blog->description}} <a
                                    href="{{$blog->url}}">Read more</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


@endsection


@section('script')


@endsection
