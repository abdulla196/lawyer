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
                                <li class="breadcrumb-item active" aria-current="page">{{__('master.SOCIAL')}}</li>
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
            <form class="upload_form" action="{{ route('social.store')  }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-header"><i class="ni ni-settings"></i> {{__('master.SOCIAL-MEDIA')}} </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="text-right">
                                        <a class="btn btn-sm btn-primary text-white add_image"><i class="fa fa-plus"></i></a>
                                    </div>

                                    <div id="append_images">
                                        @if($social->count() > 0)

                                            @foreach($social as $socialmedia)

                                                <div class="form-row">
                                                    <div class="form-group col-md-3 mb-2 text-left">
                                                        <label class="text-sm"
                                                               for="video_name">Name</label>
                                                        <input id="video_name" type="text" name="name[]"
                                                               class="form-control form-control-sm"
                                                               placeholder="Name"
                                                               value="{{$socialmedia->name}}" required>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-1 text-left">
                                                        <label class="text-sm"> Link</label>
                                                        <input type="text"
                                                               class="form-control form-control-sm" value="{{$socialmedia->link}}" name="link[]" required>
                                                    </div>

                                                    <div class="form-group col-md-3 mb-1 text-left">
                                                        <label class="text-sm"> Image</label>
                                                        <input type="file"
                                                               class="form-control form-control-sm" value="{{$socialmedia->image}}" name="image[]" required>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="form-row">
                                                <div class="form-group col-md-3 mb-2 text-left">
                                                    <label class="text-sm"
                                                           for="video_name">Name</label>
                                                    <input id="video_name" type="text" name="name[]"
                                                           class="form-control form-control-sm"
                                                           placeholder="Name"
                                                           value="" required>
                                                </div>

                                                <div class="form-group col-md-3 mb-1 text-left">
                                                    <label class="text-sm"> Link</label>
                                                    <input type="text"
                                                           class="form-control form-control-sm" name="link[]" required>
                                                </div>

                                                <div class="form-group col-md-3 mb-1 text-left">
                                                    <label class="text-sm"> Image</label>
                                                    <input type="file"
                                                           class="form-control form-control-sm" name="image[]" required>
                                                </div>
                                            </div>
                                        @endif
                                    </div>


                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-success btn-block submit">{{__('master.SAVE-CHANGES')}}</button>
                                </div>
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


        $('.add_image').click(function()
        {
            $("#append_images").append(
                '<div class="form-row parent"><div class="form-group col-md-3 mb-2 text-left"> <label class="text-sm" for="video_name">Name</label><input id="video_name" type="text" name="name[]" class="form-control form-control-sm"  placeholder="Name"  value="" required></div><div class="form-group col-md-3 mb-1 text-left"><label class="text-sm"> Link</label><input type="text"  class="form-control form-control-sm" name="link[]" required></div><div class="form-group col-md-3 mb-1 text-left"><label class="text-sm"> Image</label><input type="file"  class="form-control form-control-sm" name="image[]" required></div><div class="form-group col-md-2 mt-4 pt-2"><a class="btn btn-sm btn-danger remove text-white"><i class="fa fa-trash "></i></a></div></div>'
            );
        });

        $(document).on("click", ".choose_selected", function() {
            $('.selected').val(0);
            $(this).next('.selected').val(1);
        });

        $(document).on("click", ".remove", function() {
            $(this).parents('.parent').remove();
        });

        $(document).on("click", ".remove3", function() {
            var item = '.' + $(this).attr('data-class');
            $(item).remove();
        });

    </script>

@endsection
