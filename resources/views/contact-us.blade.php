
@extends('layouts.front')


@section('style')
    <link rel="stylesheet" href="{{asset('front_assets/css/contact-us.css')}}">
@endsection

@section('content')
    <section class="home">
        <div class="image-overlay d-flex align-items-center">
            <div class="uagb-container-inner-blocks-wrap container">
                <div class="w-75">
                    <h2 class="wp-block-heading has-text-align-left tw-mt-1 tw-mb-0 hase-bas-3-color has-text-color">
                        <span>Contact Us</span>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    @if(session('success'))
        <div class="toast" style="position: fixed; top: 10%; right: 0;opacity: 1;z-index: 1001">
            <div class="toast-header">
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    @endif
    <section class="content-us container">
        <div>
            <h3><b>Reach out to us for Notary services, Certified True copy attestation services in UAE</b></h3>
            <p>Contact: We are here to help you in DUBAI with Notary services, Notary attestation, and Certified true
                copy attestation services. We are certified to provide certification, authentication, and Notary
                services throughout the United Arab Emirates</p>
            <h4><b>Contact us:</b></h4>
            <p>Contact us by sending us a message, filling out this form, or email us. We are 24/7 available for your
                assistance regarding any kind of legal services in DUBAI. Feel Free to discuss something related to your
                attestation or notarization.</p>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Get in Touch</h2>
                </div>
            </div>
            <form action="{{ route('StoreContact') }}" method="post">
                @csrf
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters mb-5">
                            <div class="col-md-7">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Contact Us</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                           placeholder="Name" value="{{old('name')}}">
                                                    @error('name')
                                                    <div>
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email" value="{{old('email')}}">
                                                    @error('email')
                                                    <div>
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Phone Number</label>
                                                    <input type="number" class="form-control" name="phone" id="phone"
                                                           placeholder="phone" value="{{old('phone')}}">

                                                    @error('phone')
                                                    <div>
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                           placeholder="Subject" value="{{old('subject')}}">

                                                    @error('subject')
                                                    <div>
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                              rows="4" placeholder="Message">{{old('message')}}</textarea>

                                                    @error('message')
                                                    <div>
                                                        <span class="text-danger">{{ $message }}</span>
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div id="map">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-globe"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>




@endsection


@section('script')


@endsection
