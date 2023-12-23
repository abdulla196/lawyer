<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front_assets/images2/favicon.png')}}">

    <!-- Page Title -->
{{--    <title>{{$setting->project_name}}</title>--}}

    <!-- * INFO: ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">


    <!-- Style -->
    <link rel="stylesheet" href="{{asset('front_assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/footer.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    @yield('style')

</head>
<body>

<!-- Start of Header Navbar
    ============================================= -->
<header class="container">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="#"><i style="color: #E48018;"
                                            class="fa-solid fa-handshake-simple-slash"></i>Book Consultation</a>
        </li>
        <div class="line"></div>
        <li class="nav-item">
            <a class="nav-link" href="#"><i style="color:#1860F0;" class="fa-solid fa-square-phone"></i>Call Now</a>
        </li>
        <div class="line"></div>
        <li class="nav-item">
            <a class="nav-link" href="#"><i style="color: #DF0637;" class="fa-regular fa-envelope"></i>Email Us</a>
        </li>
        <div class="line"></div>
        <li class="nav-item">
            <a class="nav-link" href="#"><i style="color: #2EBD5A;"
                                            class="fa-brands fa-square-whatsapp"></i>Whatsapp</a>
        </li>
    </ul>
</header>

<nav class="navbar  navbar-expand-lg navbar-light top-navbar" data-toggle="sticky-onscroll">
    <div class="container nav-content">
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" style="width: 200px; height: 60px;"
                                              class="img-fluid" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav pull-right">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{route('services')}}" class="nav-link dropbtn">Our Services</a>
                    <div class="dropdown-content">
                        @foreach($services as $service)
                            @if($service->navbar == 1)
                                <a  href="{{route('service.details', $service->url)}}">{{$service->name}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{route('blogs')}}" class="nav-link dropbtn">Our Lastest News</a>
                    <div class="dropdown-content">
                        @foreach($blogs as $blog)
                            @if($blog->navbar == 1)
                                <a  href="{{route('blog.details', $blog->url)}}">{{$blog->title}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary  m-0" href="{{route('contactUs')}}">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Start of Header Navbar
    ============================================= -->


@yield('content')


<!-- Start of footer section
		============================================= -->
<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>1010 Avenue, sw 54321, chandigarh</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+971581243628</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>attestationsdubai@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor
                                incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Expert Team</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Latest News</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2024, All Right Reserved <a href="https://github.com/AhmedEssam01" target="_blank">Eiisso</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- End of footer section
    ============================================= -->


<!-- For Js Library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

<script src="{{asset('front_assets/js/main.js')}}"></script>
<script>
    $('.contact_form').submit(function(e)
    {
        e.preventDefault();
        $('.submit').prop('disabled', true);
        $('.error').text('');

        var head1 	= 'Thank You';
        var title1 	= 'Your Message Has Been Sent Successfully, We will contact you ASAP. ';
        var head2 	= 'Oops...';
        var title2 	= 'Something went wrong, please try again later.';

        {{--$.ajax({--}}
        {{--    url: 		"{{route('message')}}",--}}
        {{--    method: 	'POST',--}}
        {{--    dataType: 	'json',--}}
        {{--    data:		$(this).serialize()	,--}}
        {{--    success : function(data)--}}
        {{--    {--}}
        {{--        $('.submit').prop('disabled', false);--}}

        {{--        if (data['status'] == 'true')--}}
        {{--        {--}}
        {{--            Swal.fire(--}}
        {{--                head1,--}}
        {{--                title1,--}}
        {{--                'success'--}}
        {{--            )--}}
        {{--            $('.field1').text('');--}}
        {{--            $('.field1').val('');--}}
        {{--        }--}}
        {{--        else if (data['status'] == 'false')--}}
        {{--        {--}}
        {{--            Swal.fire(--}}
        {{--                head2,--}}
        {{--                title2,--}}
        {{--                'error'--}}
        {{--            )--}}
        {{--        }--}}
        {{--    },--}}
        {{--    error : function(reject)--}}
        {{--    {--}}
        {{--        $('.submit').prop('disabled', false);--}}

        {{--        var response = $.parseJSON(reject.responseText);--}}
        {{--        $.each(response.errors, function(key, val)--}}
        {{--        {--}}
        {{--            Swal.fire(--}}
        {{--                head2,--}}
        {{--                val[0],--}}
        {{--                'error'--}}
        {{--            )--}}
        {{--        });--}}
        {{--    }--}}


        {{--});--}}

    });
</script>

@yield('script')
</body>
</html>
