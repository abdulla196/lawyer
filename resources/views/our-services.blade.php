
@extends('layouts.front')


@section('style')
    <link rel="stylesheet" href="{{asset('front_assets/css/our-service.css')}}">
@endsection

@section('content')
    <section class="home">
        <div class="image-overlay d-flex align-items-center">
            <div class="uagb-container-inner-blocks-wrap container">
                <div class="w-75">
                    <div
                        class="wp-block-uagb-info-box uagb-block-60b997e4 uagb-infobox__content-wrap  uagb-infobox-icon-above-title uagb-infobox-image-valign-top">
                        <div class="uagb-ifb-content">
                            <p>OUR SERVICES</p>
                            <div class="uagb-ifb-title-wrap">
                                <h1> Notary Services Dubai </h1>
                            </div>
                            <p class="uagb-ifb-desc">
                                Our Services. Notary services in Dubai are the pioneers of certified true copy
                                attestation, legal attestation, document legalization, and notarization services in
                                Dubai. Our expertise in handling all types of legal procedures, legal documents, legal
                                attestation, and certification services in Dubai. Attestation is necessary to process if
                                you are doing any transaction abroad, which is termed notary services in Dubai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container look">
        <p>HAVE A LOOK AT OUR</p>
        <h1><b>Notary Services Dubai Pricing</b></h1>
        <p>You Deserve the best service at affordable rates.You Deserve the best service at affordable rates.</p>
    </section>

    <section class="offer">
        <div class="container content">
            <p>SPECIAL OFFER</p>
            <h2>15% Off for New Visitors</h2>
            <p>*If you are applying for Canada, Australia, United Kingdom, Dominica, and any Passport, Citizenship by
                investment. You can have your immigration document notarized from us in case if it’s required.”</p>
            <a href=""><button class="btn btn-danger">BOOK AN APPOINTMENT</button></a>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <p>WHAT ARE YOU WAITING FOR…</p>
                    <h2 class="heading-section">
                        Make an appointment </h2>
                    <p>*If you are applying for Canada, Australia, United Kingdom, Dominica, and any Passport,
                        Citizenship by investment. You can have your immigration document notarized from us in case if
                        it’s required.”</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text">
                            <p><span>Address:</span> {{$setting->address}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text">
                            <p><span>Phone:</span> <a href="tel://{{$setting->phone}}">{{$setting->phone}}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dbox w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                            <p><span>Email:</span> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
                                                           placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" class="form-control" name="email" id="email"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Subject</label>
                                                    <input type="text" class="form-control" name="subject" id="subject"
                                                           placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" class="form-control" id="message" cols="30"
                                                              rows="4" placeholder="Message"></textarea>
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
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection


@section('script')


@endsection
