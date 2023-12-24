@extends('layouts.master')

@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7 text-left">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('master.DASHBOARD')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{__('master.SETTINGS')}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Header -->

    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="card-body">
            <form class="upload_form row" action="{{ isset($setting) ? route('settings.update', $setting->id) : route('settings.store')  }}" method="post" enctype="multipart/form-data">
                @csrf

                @if (isset($setting))
                    @method('PUT')
                @endif
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header"><i class="ni ni-settings"></i> {{__('master.SETTINGS')}} </div>

                        <div class="card-body">

                            <h6 class="heading-small text-muted font-weight-bold text-left"> Project Name  </h6>
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="input-group col-12 px-0">
                                        <input id="project_name" class="form-control" type="text" name="name"  value="{{ isset($setting) ? $setting->name : old('name')}}" required>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3" />

                            <h6 class="heading-small text-muted font-weight-bold text-left"> Phone</h6>
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="input-group col-12 px-0">
                                        <input id="phone" class="form-control" type="text" name="phone"  value="{{isset($setting) ? $setting->phone : old('phone')}}" required>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-3" />

                            <h6 class="heading-small text-muted font-weight-bold text-left"> whatsapp</h6>
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="input-group col-12 px-0">
                                        <input id="whatsapp" class="form-control" type="text" name="whatsapp"  value="{{isset($setting) ? $setting->whatsapp : old('whatsapp')}}" required>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-3" />

                            <h6 class="heading-small text-muted font-weight-bold text-left"> Book Consultation</h6>
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="input-group col-12 px-0">
                                        <input id="consultation" class="form-control" type="text" name="consultation"  value="{{isset($setting) ? $setting->consultation : old('consultation')}}" required>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3" />

                            <h6 class="heading-small text-muted font-weight-bold text-left"> Email</h6>
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="input-group col-12 px-0">
                                        <input id="email" class="form-control" type="email" name="email"  value="{{isset($setting) ? $setting->email : old('email')}}" required>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3" />

                            <h6 class="heading-small text-muted font-weight-bold text-left"> Address</h6>
                            <div class="px-lg-4">
                                <div class="row">
                                    <div class="input-group col-12 px-0">
                                        <input id="address" class="form-control" type="text" name="address"  value="{{isset($setting) ? $setting->address : old('address')}}" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4">


                    <div class="card card-defualt">
                        <div class="card-header"><i class="far fa-id-badge"></i> Image </div>
                        <div class="card-body px-3">
                            <div class="avatar-preview" style="background-image: url({{ isset($setting) ?  asset($setting->logo)  : asset('images/no-image.png') }})"></div>
                            <div class="my-2 text-left">
                                <small> {!! __('master.IMAGE-INFO') !!} </small>
                            </div>
                            <input class="btn-info form-control form-control-sm" {{ isset($setting) ? '' :'required' }}  type="file" name="image" />
                        </div>
                    </div>

                </div>

                <div class="col-xl-12">
                    <div class="card card-defualt">
                        <div class="card-body">
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-success btn-block submit">{{__('master.SAVE-CHANGES')}}</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- Footer -->
        <footer class="footer pt-0">
        </footer>
    </div>

@endsection


@section('script')

    <script>

        function readURL(input)
        {
            if (input.files && input.files[0])
            {
                var reader = new FileReader();

                reader.onload = function (e)
                {
                    $('.image-preview').css('background-image','url('+e.target.result+')');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#logo").change(function()
        {
            readURL(this);
        });

        // =============  Setting Form =============
        {{--$(document).on('submit', '.setting_form', function(e)--}}
        {{--{--}}
        {{--    e.preventDefault();--}}
        {{--    let formData = new FormData(this);--}}
        {{--    $('.submit').prop('disabled', true);--}}

        {{--    var head1 	= "{{__('master.DONE')}}";--}}
        {{--    var title1 	= "{{__('master.DATA-CHANGED-SUCCESSFULLY')}}";--}}
        {{--    var head2 	= "{{__('master.OOPS')}}";--}}
        {{--    var title2 	= "{{__('master.SOMETHING-WRONG')}}";--}}

        {{--    $.ajax({--}}
        {{--        url: 		"{{route('settings.edit')}}",--}}
        {{--        method: 	'POST',--}}
        {{--        data: formData,--}}
        {{--        dataType: 	'json',--}}
        {{--        contentType: false,--}}
        {{--        processData: false,--}}
        {{--        success : function(data)--}}
        {{--        {--}}
        {{--            $('.submit').prop('disabled', false);--}}

        {{--            if (data['status'] == 'true')--}}
        {{--            {--}}
        {{--                Swal.fire(--}}
        {{--                    head1,--}}
        {{--                    title1,--}}
        {{--                    'success'--}}
        {{--                )--}}
        {{--            }--}}
        {{--            else if (data['status'] == 'false')--}}
        {{--            {--}}
        {{--                Swal.fire(--}}
        {{--                    head2,--}}
        {{--                    title2,--}}
        {{--                    'error'--}}
        {{--                )--}}
        {{--            }--}}
        {{--        },--}}
        {{--        error : function(reject)--}}
        {{--        {--}}
        {{--            $('.submit').prop('disabled', false);--}}

        {{--            var response = $.parseJSON(reject.responseText);--}}
        {{--            $.each(response.errors, function(key, val)--}}
        {{--            {--}}
        {{--                Swal.fire(--}}
        {{--                    head2,--}}
        {{--                    val[0],--}}
        {{--                    'error'--}}
        {{--                )--}}
        {{--            });--}}
        {{--        }--}}


        {{--    });--}}

        {{--});--}}

    </script>

    <script>



    </script>

@endsection
