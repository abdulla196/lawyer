
@extends('layouts.front')


@section('style')
    <link rel="stylesheet" href="{{asset('front_assets/css/about-us.css')}}">
@endsection

@section('content')
    <section class="home">
        <div class="image-overlay d-flex align-items-center">
            <div class="uagb-container-inner-blocks-wrap container">
                <div>
                    <h2 style="text-align: center;"> About Us </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="who-we container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="content">
                    <hr style="border-top: 5px solid #000; width: 100px; margin-left: 0;">
                    <h1><b>Who We Are</b></h1>
                    <p>
                        We are a team of professionals and certified people who provide Notary Services in Dubai. Our
                        team of Professional and qaulified lawyers are well versed with local laws and processes needed
                        to complete notarization. Notarization of documents might be complicated for a person new to
                        legal documentation but with the help of experienced lawyers in Dubai, you can understand the
                        process quickly and conveniently.</p>
                    <p>Legal services are a major part of life because every one of us searches for legal services for
                        any purpose. Whether it is personal or corporate need. It is highly demanded. Notary Services
                        Dubai deals with many legal problems and provides clients with a complete range of guidance and
                        relief with outstanding efforts. Each business needs legal support to let its growth graph
                        accurately move the success side.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('front_assets/images/5.png')}}" class="img-fluid" alt="about us image">
            </div>
        </div>
    </section>

    <section class="few-words container">
        <hr style="border-top: 5px solid #000; width: 100px;">
        <p style="text-align: center;"><b>A Few Words About</b></p>
        <h2 style="text-align: center;"><b>The documents that we notarize?</b></h2>

        <p>About. Notary services Dubai offers notary services in Dubai and legal advice for all types of
            attestation, and notarization. Legal documents are a serious matter where you need to be careful in
            preparing and getting
            attested. Our service areas are legal services, legal consultation, legal advice, attestation, notarization,
            legal drafting, and legalization. We offer Legalization services for all types of documents used abroad.</p>

        <p><b>Innovative Notary services in Dubai</b></p>

        <p>About. Notary Services Dubai offers notarization of personal and commercial documents; Statuary
            Declaration,
            Self-Declaration, Single Status Declarations, Affidavits, Affidavits of support, Affidavit of Sponsership
            Affidavits of the Same name, Gift Deed, Moral letters, Reference Letter. Proof of Address, Proof of
            residence.
            Passport, Utility bills, Power of attorney, Legal Notices, No objection Certificates, etc.
        </p>
        <p>These documents can be used for Visa applications, Immigration, business setup, opening or closing of a
            bank
            account. Real estate transactions, the purchase of property. We help our clients geting notarization
            requirements done perfectly. So that you can rely on us. We prefer listening to our clients carefully for a
            better understanding of their needs, and getting details properly. We give the best solution which saves
            time
            and cost. We ensure speedy process and professional handling for all types of official documentation.</p>

        <p><b>About Notary Attestation in Dubai</b></p>

        <p>Moving to another country can be for work, study, business, a visit, or even personal reasons. Various
            requirements apply for relocation. Whether you get employed in another country or wish to get a higher
            education. A series of international laws apply. The laws of international immigration help foreign
            nationals
            acquire new nationality, which is the lawful status of the person as a citizen in a country. Notary Services
            Dubai offers the necessary guidance and notarization of documents required for employment, education, and
            immigration to help gain legitimate residence in a new country. We are happy to assist you with all your
            queries
            related to the notarization of documents not limited to the below countries:
            Canada, UK, USA, Australia, Malta, Czech Republic, St. Kitts & Nevis, Vanuatu, Grenada, Dominica, Saint
            Lucia,
            Antigua & Barbuda, Caribbean, Cyprus, and Montenegro, but also assistance on getting residence visa in
            United
            Arab Emirates</p>

        <p><b>About Notary services in Dubai: Passport Copy Attestation in Dubai</b></p>

        <p>About A number of legal matters take place that can only be solved by an Advocate or lawyer. A passport
            is a
            personal, identical document. It shows your name, address, country of birth, and nationality. It is one of
            the
            mandatory documents to be kept. If you are the owner of the company, planning to open a bank account or
            investing abroad. You may be required to submit your personal and professional documents along with your
            passport. The passport is one of the major documents to be submitted, but it should be certified and
            attested by
            one of the legal entities in the country of residence. Notary Services Dubai is here to assist you with
            notarized copies of passport.</p>

        <p>Finding legal advice for notarization in Dubai has never been completed without Notary Services Dubai.
            Our team
            of legal experts wisely advis es on the best possible procedure for notarization. We are ranked as one of
            the
            best notary services in Dubai.</p>
        <img src="{{asset('front_assets/images/Dubais-best-1.jpg')}}" class="img-fluid center" alt="">
        <p>You can trust our services, either by physically visiting us or by using our online notary services in Dubai.
            We have been in the business for a long time, assisting clients with the notarization of documents. Our
            notarized copies of passports are accepted globally. A team of legal consultants is available for your
            assistance via phone, WhatsApp, email, or by filling out forms on the website.</p>
    </section>

    <section class="call-today">
        <div class="line">
            <hr style="border-top: 5px solid #1860F0; width: 100px;">
        </div>
        <div class="content">
            <h3>Looking for Documents to be Notarized?</h3>
            <p>Contact Us today for more details About us and documents attestation</p>
            <a href="{{route('contactUs')}}" class="btn btn-primary">Call Today</a>
        </div>
    </section>

    <section class="our-service container">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <i class="fa-brands fa-black-tie"></i>
                        <h5>Notary Services</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <i class="fa-brands fa-black-tie"></i>
                        <h5>Private Notary Services</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <i class="fa-brands fa-black-tie"></i>
                        <h5>True Copy Attestation</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <i class="fa-brands fa-black-tie"></i>
                        <h5>Notarization Services</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <i class="fa-brands fa-black-tie"></i>
                        <h5>Witnessing of Signature</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content">
                        <i class="fa-brands fa-black-tie"></i>
                        <h5>Notary Attestation</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection


@section('script')


@endsection
