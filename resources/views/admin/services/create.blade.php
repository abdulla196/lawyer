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
                                <li class="breadcrumb-item"><a href="{{route('services.index')}}">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ isset($service) ? 'EDIT Services' :'ADD NEW Services' }}</li>
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
        <div class="card card-defualt">
            <div class="card-header"> {{ isset($service) ? 'Edit Service' : 'Add New Service' }}</div>

            <div class="card-body">
                <form class="upload_form" action="{{ isset($service) ? route('services.update', $service->id) : route('services.store')  }}" method="post">
                    @csrf

                    @if (isset($service))
                        @method('PUT')
                    @endif

                    <div class="row">

                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="blog">services Name</label>
                                <input type="text" name="name" class="@error('services') is-invalid @enderror form-control" placeholder="Add name Service" value="{{ isset($service) ? $service->name : old('name') }}">

                                @error('name')
                                <div>
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="blog">services title</label>
                                <input type="text" name="title" class="@error('services') is-invalid @enderror form-control" placeholder="Add title Service" value="{{ isset($service) ? $service->title : old('title') }}">

                                @error('name')
                                <div>
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card-header"> Description</div>
                            <div class="form-group">
                                <textarea class="content" name="description" rows="10">{{ isset($service) ? $service->description : old('description') }}</textarea>
                                @error('description')
                                <div>
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card-header"> content</div>
                            <div class="form-group">
                                <textarea id="content" class="content" name="content_service" rows="20">{{ isset($service) ? $service->content : old('content_service') }}</textarea>
                                @error('content_service')
                                <div>
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="navbar"  {{isset($service) ? ($service->navbar == 1? 'checked'  : '') : ''}} value="1" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    show on navbar
                                </label>
                            </div>
                        </div>
                        <input type="hidden" name="userID" value="{{Auth::user()->id}}">

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">{{ isset($service) ? 'Save' : 'Add' }}</button>
                        </div>


                    </div>

                </form>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer pt-0">
        </footer>
    </div>
@endsection


@section('script')
    <script src="https://cdn.tiny.cloud/1/siquchctwlrskyx6x8889f6emchd6329jgyervn76m9nn3em/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <script>


        tinymce.init({
            selector:'textarea.content',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',

            relative_urls: false,
            document_base_url: "{{ url('/') }}/",
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
