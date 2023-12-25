
@extends('layouts.front')


@section('style')
    <link rel="stylesheet" href="{{asset('front_assets/css/pricing.css')}}">
@endsection

@section('content')

    <section class="home">
        <div class="image-overlay">
            <div class="container">
                <div class="content-text w-75">
                    <h2>Simple. Affordable plan for everyone.</h2>
                    <p>Notary Services Fees in Dubai <br>
                        Notary Services Dubai Always focus on Client’s needs and provide their best services at a reasonable price. <a href="">Notary</a> Services Fees in Dubai</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <table class="table table-striped" style="text-align: center;">
            <thead>
            <tr>
                <th scope="col">Documents</th>
                <th scope="col">Charges</th>
                <th scope="col">Requirements</th>
            </tr>
            </thead>
            <tbody>
                @foreach($pricing as $price)
                    @if($price->type === 'main')
                       <tr>
                           <td>{{$price->documents}}</td>
                           <td>{{$price->charges}}</td>
                           <td>{{$price->requirements}}</td>
                       </tr>
                    @endif
                @endforeach
                @foreach($pricing as $price)
                    @if($price->type === 'advocates')
                        <tr>
                            <td></td>
                            <td>Advocates Notarization Notary Services Fees in Dubai</td>
                            <td></td>
                        </tr>
                        <td>{{$price->documents}}</td>
                        <td>{{$price->charges}}</td>
                        <td>{{$price->requirements}}</td>
                    @endif

                @endforeach
            </tbody>
        </table>
        <p>Note: The Notary Services Fees in Dubai mentioned above may vary at any time. It may vary as per the
            document’s nature and requirements. Also, charges for advocates attestation may vary timely, in case of
            couple of copies are needed.</p>
        <p>*If you are applying for Canada, Australia, United Kingdom, Dominica, and any Passport, Citizenship by
            investment. You can have your immigration document notarized from us in case if it’s required.</p>
    </section>


@endsection


@section('script')


@endsection
