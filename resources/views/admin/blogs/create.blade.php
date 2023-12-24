@extends('layouts.master')

@section('style')
@endsection

@section('content')


    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">

                    <div class="col-lg-12 text-left">
                        <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('master.DASHBOARD')}}</a></li>
                                <li class="breadcrumb-item"><a href="{{route('blogs.index')}}">blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ isset($blog) ? 'ecit blogs' :  'ADD NEW blogs' }}</li>
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
        <form class="upload_form" action="{{ isset($blog) ? route('blogs.update', $blog->id) : route('blogs.store')}}" method="post" enctype="multipart/form-data">
            @csrf

            @if (isset($blog))
                @method('PUT')
            @endif

            <div class="row">

                <div class="col-xl-8">

                    <div class="card card-defualt">
                        <div class="card-header"><i class="fa fa-info-circle"></i> blogs information </div>
                        <div class="card-body">

                            <!--=================  Name  =================-->
                            <div class="row">
                                <div class="form-group col-12 mb-2 text-left">
                                    <label class="font-weight-bold text-uppercase">{{__('master.TITLE')}}</label>
                                    <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" placeholder="{{__('master.TITLE')}}" value="{{ isset($blog) ? $blog->title : old('title') }}" required>
                                    @error('title')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <hr class="my-2">

                            <div class="row">
                                <div class="form-group col-md-12 mb-2 text-left">
                                    <label class="font-weight-bold text-uppercase">description</label>
                                    <textarea name="description" class="@error('description') is-invalid @enderror form-control" required>{{ isset($blog) ? $blog->description : old('description') }}</textarea>
                                    @error('description')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-xl-12">
                                    <div class="card-header"> content</div>
                                    <div class="form-group">
                                        <textarea id="content" class="content" name="content_blog" rows="20">{{ isset($blog) ? $blog->content : old('content') }}</textarea>
                                        @error('content')
                                        <div>
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                        @enderror

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="navbar"  {{isset($blog) ? ($blog->navbar == 1? 'checked'  : '') : ''}} value="1" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">
                                            show on navbar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="home_page" {{isset($blog) ? ($blog->home_page ==1? 'checked'  : '') : ''}}  value="1" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            show on home Page
                                        </label>
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
                            <div class="avatar-preview" style="background-image: url({{ isset($blog) ?  asset($blog->image)  : asset('images/no-image.png') }})"></div>
                            <div class="my-2 text-left">
                                <small> {!! __('master.IMAGE-INFO') !!} </small>
                            </div>
                            <input class="btn-info form-control form-control-sm" {{ isset($blog) ? '' :'required' }}  type="file" name="image" />
                        </div>
                    </div>

                </div>

            </div>

            <div class="card card-defualt">
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-success btn-block">{{ isset($blog) ?  __('master.SAVE'):__('master.ADD') }}</button>
                    </div>
                </div>
            </div>

        </form>
        <!-- Footer -->
        <footer class="footer pt-0">
        </footer>
    </div>


@endsection



@section('script')
    <script src="https://cdn.tiny.cloud/1/siquchctwlrskyx6x8889f6emchd6329jgyervn76m9nn3em/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <script>

        function readURL(input)
        {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e)
                {
                    $('.avatar-preview').css('background-image','url('+e.target.result+')');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#avatar").change(function()
        {
            readURL(this);
        });

        tinymce.init({
            selector:'textarea.content',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',

            file_picker_callback (callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth
                let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight

                tinymce.activeEditor.windowManager.openUrl({
                    url : '/file-manager/tinymce5',
                    title : 'Laravel File manager',
                    width : x * 0.8,
                    height : y * 0.8,
                    onMessage: (api, message) => {
                        callback(message.content, { text: message.text })
                    }
                })
            }

        });

    </script>
@endsection
