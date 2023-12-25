
@extends('layouts.front')
@section('style')

    <link rel="stylesheet" href="{{asset('front_assets/css/style.css')}}">
@endsection

@section('content')

    <section class="home">
        <div class="image-overlay d-flex align-items-center">
            <div class="uagb-container-inner-blocks-wrap container">
                <div class="w-75">
                    <h2 class="wp-block-heading has-text-align-left tw-mt-1 tw-mb-0 has-base-3-color has-text-color">
                        <span style="text-decoration:underline;">Notary Services Dubai</span>
                    </h2>
                    <div
                        class="wp-block-uagb-info-box uagb-block-60b997e4 uagb-infobox__content-wrap  uagb-infobox-icon-above-title uagb-infobox-image-valign-top">
                        <div class="uagb-ifb-content">
                            <div class="uagb-ifb-title-wrap">
                                <h1 class="uagb-ifb-title">True Copy Attestation</h1>
                            </div>
                            <p class="uagb-ifb-desc"><strong>Notary Services Dubai</strong> always secures your
                                documents
                                with
                                Certified True Copy Attestation Services in Dubai with 100% Trust and client
                                Satisfaction
                            </p>
                            <hr style="border-top: 2px solid #fff;">
                        </div>
                        <a href="{{route('services')}}" class="btn btn-primary btn-service" type="submit">Our Service</a>
                        <a href="{{route('contactUs')}}" class="btn btn-success btn-contact" type="submit">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container work-us">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="content">
                    <h2>Notary services Dubai: Ensure your documents are legally sound and accepted globally</h2>
                    <hr style="border-top: 1px solid #1860F0;">
                    <h1>Reliable and efficient notary services for individuals and businesses</h1>
                    <p>Dubai is a thriving metropolis renowned for its state-of-the-art infrastructure, opulent
                        shopping, and cutting-edge technology. Notary services are one of the many services that the
                        city provides
                        and are crucial to the legal system. We’ll examine notary services in Dubai in more detail and
                        discuss how they might help your company. It’s critical to first comprehend what notary services
                        include.The government has given the public official known as a notary the power to witness and
                        certify
                        the execution of legal papers. In Dubai, notary services are provided by notary public Dubai
                        Courts
                        and authorized law firms. Those services include the attestation of signatures, the notarization
                        of
                        documents, and the certification of corporate and personal documents.</p>
                    <a  href="{{route('contactUs')}}" class="btn btn-primary">Work With Us</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="cards row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <h4>15k+</h4>
                            <p>Successfully documents Notarized.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <h4>15k+</h4>
                            <p>Successfully documents Notarized.</p>
                        </div>
                    </div>
                </div>
                <div class="cards row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <h4>15k+</h4>
                            <p>Successfully documents Notarized.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="card">
                            <h4>15k+</h4>
                            <p>Successfully documents Notarized.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-dubai">
        <div class="container">
            <h2 class="text-center">Notary Services Dubai
            </h2>
            <div class="row">
                <div class="col-md-6 col-12">
                    <p>
                        Notary Services Dubai is pioneer of Notary attestation, notary public, private
                        notary services,
                        notary services, certification, and certified true copy attestation services in the
                        UAE. Our
                        expertise includes handling all types of legal procedures, legal documents,
                        drafting, legalization,
                        and one-stop legal services in the United Arab Emirates. We have worked with many
                        businesses and
                        clients in Dubai, and our trust level is 100% with 100% satisfactory results
                    </p>
                    <p>
                        In Dubai, notary services are a crucial facet of the legal system, whether you need
                        private notary
                        services or public notary services. It provides more security, ease, and
                        credibility. It is highly
                        advised to hire notary services if you are operating a business in Dubai to make
                        sure your legal
                        documents are correctly signed and validated. Notarized documents are considered
                        Internationally
                        accurate and valid. They are also legalized by the appropriate authorities,
                        documents that have been
                        notarized in Dubai can be used locally and internationally. Businesses that conduct
                        international
                        commerce may find this extremely helpful. We are a one-stop solution for all your
                        notarization, and
                        attestation needs.
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <div class="d-flex align-items-center h-100">
                        <p>
                            Notary Services Dubai offers an affordable fee for each document. The cost of
                            notarization
                            varies depending on the type of document and the complexity of the transaction.
                            When seeking
                            notary services in Dubai, it’s important to make sure that you have all the
                            necessary documents
                            and information before approaching the notary. It’s also worth noting that some
                            notaries in
                            Dubai offer online services, like Notary Services Dubai, which can save time and
                            effort for busy
                            individuals and businesses. Contact our staff via phone, email, WhatsApp, or any
                            other method of
                            communication for additional required details.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services">
        <div class="container">
            <h1>Our Services</h1>
            <hr style="border-top: 1px solid #1860F0; margin-bottom: 50px;">
            <div class="row">
                @foreach($services as $service)

                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="card wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                            <h2 class="wp-block-heading has-text-align-left tw-mb-2 has-medium-font-size">{{$service->name}}</h2>

                            <p class="has-text-align-left has-small-font-size">“<strong>{{$service->title}}</strong>“</p>

                            <p class="tw-mb-2 tw-mt-2">{!! $service->description!!}</p>

                            <a class="gb-button gb-button-2f1ca4bb gb-button-text"
                               href="services/{{$service->url}}"
                               rel="noopener noreferrer"><button class="btn btn-primary">Read more</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="which-type">
        <div class="container">
            <h1>Which Type of Documents We Notarized in Notary Services Dubai?</h1>
            <hr style="border-top: 1px solid #1860F0;">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <h3>Banking Documents </h3>
                        <p>Application forms <br>
                            Indemnity forms <br>
                            Identity documents <br>
                            Certification <br>
                            Bank Reference Letter <br>
                            Bank statements</p>
                        <a  href="{{route('pricing')}}">
                            <p>CHECK PRICE</p><i class="fa-solid fa-hand-holding-dollar"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <h3>Foreign Documents</h3>
                        <p>All types of applications for Certification courses abroad
                            Nurse Application forms (Canada, Australia, etc)</p>
                        <br>
                        <p>Accounting Certification application forms</p>
                        <p>Insurance companies: Forms and Application</p>
                        <a href="{{route('pricing')}}">
                            <p>CHECK PRICE</p><i class="fa-solid fa-hand-holding-dollar"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <h3>General Documents</h3>
                        <p>Affidavits <br>
                            Affidavit of support <br>
                            Affidavit of the same name <br>
                            Affidavit of single status <br>
                            Declarations <br>
                            Will drafting <br>
                            Statuary Declaration <br>
                            Drafting of official documents <br>
                            General Power of Attorney drafting <br>
                            Special Power of Attorney drafting</p>
                        <a href="{{route('pricing')}}">
                            <p>CHECK PRICE</p><i class="fa-solid fa-hand-holding-dollar"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <h3>Immigration documents</h3>
                        <p>Affidavit of Sponsorship <br>
                            Statuary declaration (Canada, UK, USA, Australia)</p>
                        <p>Document attestation: Citizenship by investment (Malta, Montenegro, Cyprus, Dominica,
                            Portugal, Greece Spain, Grenada, Dominica, etc.)</p>
                        <br>
                        <p>Gift deed</p>
                        <p>General Declarations</p>
                        <a href="{{route('pricing')}}">
                            <p>CHECK PRICE</p><i class="fa-solid fa-hand-holding-dollar"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <h3>Personal documents</h3>
                        <p>Personal documents <br>
                            Passport Copy attestation <br>
                            Utility bills Dewa/Sewa <br>
                            Salary slips <br>
                            Pay-slips <br>
                            Bank statements <br>
                            Reference letters <br>
                            Experience Certificates <br>
                            Marriage Certificates <br>
                            Birth Certificates <br>
                            Divorce documents <br>
                            Single status certificate <br>
                            Medical Certificates <br>
                            Police Clearance Certificate <br>
                            Transfer Certificates <br>
                            Marks-sheets <br>
                            School Certification <br>
                            School leaving certificates <br>
                            A-Level certificate, O-Level certificates <br>
                            Diplomas <br>
                            Degrees, Bachelor’s, master’s, Doctorate <br>
                            Bachelor’s Degree Certificates</p>
                        <a href="{{route('pricing')}}">
                            <p>CHECK PRICE</p><i class="fa-solid fa-hand-holding-dollar"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <h3>Commercial Documents</h3>
                        <p>Power of attorney</p>
                        <br>
                        <p>Board Resolution</p>
                        <br>
                        <p>Trade Licences</p>
                        <br>
                        <p>Articles of Association</p>
                        <br>
                        <p>Certificate of Incorporation</p>
                        <br>
                        <p>Shareholders Resolution</p>
                        <br>
                        <p>Certificate of Incumbency</p>
                        <br>
                        <p>Certificate of Good Standing</p>
                        <br>
                        <p>Memorandum of association</p>
                        <br>
                        <a href="{{route('pricing')}}">
                            <p>CHECK PRICE</p><i class="fa-solid fa-hand-holding-dollar"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn-center">
                <button class="btn btn-primary">Check Our Prices for Each Document</button>
            </div>
        </div>
    </section>

    <section class="attestation">
        <div class="container">
            <div class="row">
                <div class="first col-md-6 col-sm-12">

                </div>
            </div>
        </div>
    </section>

    <section class="how-we">
        <h1>How we do Attestation and Notary Services in Dubai; Samples</h1>
        <div class="images">
            <div class="img-1 image w-25">
                <div class="image-overlay">
                    <h3>True Copy Attestation</h3>
                    <p>UAE (Dubai)</p>
                </div>
            </div>

            <div class="img-2 image w-25">
                <div class="image-overlay">
                    <h3>Power of Attorney</h3>
                    <p>UAE (Dubai)</p>
                </div>
            </div>

            <div class="img-3 image w-25">
                <div class="image-overlay">
                    <h3>Passport Copy Attestation</h3>
                    <p>Dubai</p>
                </div>
            </div>
            <div class="img-4 image w-25 h-25">
                <div class="image-overlay">
                    <h3>Witnessing of Signature</h3>
                    <p>Dubai</p>
                </div>
            </div>
        </div>
    </section>

    <section class="notarization">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="d-flex align-items-center mt-5"></div>
                    <h5>Notarization of Documents: Trustworthy and professional team of Notary Services Dubai for your
                        kind Assistance</h5>
                    <p>
                        Notarization of the document is one way to analyze the authenticity of a document. When you are
                        planning to travel abroad and apply for immigration. It is a compulsory process that the
                        document needs to be properly notarized under legal authority. It is a process to prove the
                        genuineness of a document. For instance, if you are a Business owner and performing any
                        transactions abroad, parties will ask you for legal documents drafted along with authentication,
                        which may be complicated for you.
                    </p>
                    <p>
                        Let us handle all the legal complexities for you. If you are an individual, Immigration,
                        immigration attorneys, financial institutions, banks, colleges, universities, real estate
                        agents, companies, or Government offices, may ask you for attested or notarized copies of
                        documents for personal transactions, or personal works. You can reach the professional team at,
                        Notary Services Dubai for all your attestation and notarization needs.
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <h5>Advantages of Notary Services Dubai: Streamline your business processes with our fast and
                        efficient notary services in Dubai</h5>
                    <p>
                        The additional layer of security is one of the key advantages of hiring a notary services Dubai.
                        A notary is a qualified individual who checks the parties to a transaction to confirm their
                        identity and make sure the paperwork is correctly signed. This can aid in the reduction of fraud
                        and other kinds of legal problems. In the city, notaries can be found in a number of places,
                        including public buildings and commercial businesses. No matter where you are, it is simple to
                        access our notary services Dubai.
                    </p>
                    <h5>Advantages of Notary Services Dubai: Streamline your business processes with our fast and
                        efficient notary services in Dubai</h5>
                    <p>Furthermore, a lot of notaries in Dubai offer online services, which can help you save time and
                        effort. our team of legal experts offers online notarization of documents. Not limited to online
                        processing of notary but also drafting of Power of attorney, legal notices, agreements, No
                        objection certificates, etc. We are a one-stop solution for your legal document drafting,
                        notary, and Certification services, including your proof of identity and proof of address,
                        usually needed for use abroad.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="more">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-12">
                    <img src="{{asset('front_assets/images/more-1.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 col-12">
                    <p>Finding legal advice for notarization in Dubai has never been completed without Notary Services
                        Dubai. Our team of legal experts wisely advises the best possible procedure for notarization. We
                        are ranked one of the best notary services in Dubai. It’s highly recommended to choose a
                        reliable notary service provider like us, which has a good reputation and offers walk-in and
                        online notarization services in Dubai. To get more information about your legal requirements,
                        Contact Notary Services Dubai and have free initial legal consultation. You can send us an email
                        at info@notaryservicesdubai.com</p>
                </div>
            </div>
            <div class="btn-center">
                <a href="{{route('about')}}" class="btn btn-primary">More About Us</a>
            </div>
        </div>
    </section>

    <section class="faqs container">
        <h1>Frequently Asked Questions</h1>
        <div class="faqs__container">
            <div class="row">
                @foreach ($faqs as $faq)
                    <div class="col-md-6 col-12">
                        <article class="faq d-block">
                            <div class="faq__icon d-flex"><i class="uil uil-plus"></i>
                                <h5 class="mx-2 mb-0">{{$faq->question}}</h5></div>
                            <div class="question__answer">
                                {!!$faq->answer!!}
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container blogs">
        <h1>Our Latest posts</h1>
        <div class="row">

            @foreach($blogs as $blog)
                @if($blog->home_page == 1)
                    <div class="col-lg-4 col-md-6 col-sm-12 d-block">
                        <div class="card">
                            <div class="card-content">
                                <img src="{{$blog->image}}" class="img-fluid" alt="{{$blog->alt_image}}" style="height: 258px">
                                <h4><a href="{{$blog->url}}">{{$blog->title}}</a></h4>
                                <p class="date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</p>
                                <p >{{$blog->description}}
                                    <a href="{{$blog->url}}">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <a href="">
            <p>View More</p>
        </a>
    </section>

    <section class="container visit">
        <p>Get Notarized Documents today</p>
        <h1>Schedule a Visit or Call Now</h1>
        <a href="{{route('contactUs')}}" class="btn btn-primary">Contact us</a>
    </section>


@endsection


@section('script')


@endsection
