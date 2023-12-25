@extends('layouts.master')

@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7 text-left">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
{{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
{{--                                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>--}}
{{--                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('master.DASHBOARD')}}</a></li>--}}
{{--                                <li class="breadcrumb-item active" aria-current="page">{{__('master.HOME')}}</li>--}}
{{--                            </ol>--}}
                        </nav>
                    </div>
                </div>
                <!-- Card stats -->
                <div class="row justify-content-center">

                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Services</h5>
                                        <span class="h2 font-weight-bold mb-0">{{$services_count}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                            <i class="fas fa-clipboard"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Messages</h5>
                                        <span class="h2 font-weight-bold mb-0">{{$messages_count}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="ni ni-email-83"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="card card-stats">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Blogs</h5>
                                        <span class="h2 font-weight-bold mb-0">{{$blogs_count}}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-dark text-white rounded-circle shadow">
                                            <i class="fas fa-archive"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">

            <!-- Full Width -->
            <div class="col-12">

                <!-- Latest Courses -->
                <div class="card bg-default shadow">
{{--                    <div class="card-header bg-transparent border-0">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col">--}}
{{--                                <h3 class="text-white mb-0">Latest Courses</h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="table-responsive">--}}
{{--                        <!-- table -->--}}
{{--                        <table class="table align-items-center table-dark table-flush">--}}
{{--                            <thead class="thead-dark">--}}
{{--                            <tr>--}}
{{--                                <th scope="col">#</th>--}}
{{--                                <th scope="col" class="sort" >{{__('master.NAME')}}</th>--}}
{{--                                <th scope="col" class="sort" >{{__('master.PRICE')}}</th>--}}
{{--                                <th scope="col" class="sort" >{{__('master.CATEGORY')}}</th>--}}
{{--                                <th scope="col" class="sort" >Type </th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}


{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
                </div>

            </div>

        </div>


        <!-- Footer -->
        <footer class="footer pt-0">
        </footer>
    </div>

@endsection


@section('script')


@endsection
