
@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css">
@endsection

@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('pricing.index')}}">PRICING</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ isset($item) ? 'Edit PRICING' : 'Add New PRICING' }}</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Header -->


    <!-- Page content -->
    <div class="container-fluid mt--6">

        <form action="{{ isset($item) ? route('pricing.update', $item->id) : route('pricing.store')  }}" method="post" enctype="multipart/form-data">
            @csrf

            @if (isset($item))
                @method('PUT')
            @endif

            <div class="row justify-content-center">

                <div class="col-xl-10">

                    <div class="card card-defualt">
                        <div class="card-header"><i class="fa fa-info-circle"></i> Information </div>
                        <div class="card-body">

                            <div class="row">

                                <!--=================  documents  =================-->
                                <div class="form-group col-md-6 mb-2">
                                    <label for="documents">documents</label>
                                    <input id="documents" type="text" name="documents" class="@error('documents') is-invalid @enderror form-control" value="{{ isset($item) ? $item->documents : old('documents') }}" required>


                                </div>

                                <!--=================  charges  =================-->
                                <div class="form-group col-md-6 mb-2">
                                    <label for="charges">charges</label>
                                    <input id="charges" type="text" name="charges" class="@error('charges') is-invalid @enderror form-control" value="{{ isset($item) ? $item->charges : old('charges') }}" required>


                                </div>

                                <!--=================  requirements  =================-->
                                <div class="form-group col-md-6 mb-2">
                                    <label for="requirements">requirements</label>
                                    <input id="requirements" type="text" name="requirements" class="@error('requirements') is-invalid @enderror form-control" value="{{ isset($item) ? $item->requirements : old('requirements') }}" required>


                                </div>

                                <!--=================  Type  =================-->
                                <div class="form-group col-md-6 mb-2">
                                    <label for="type">Type</label>
                                    <select class="form-control" name="type">
                                        <option value="main" {{ isset($item) ? ($item->type == 'main' ? 'selected' : '') : '' }}>main</option>
                                        <option value="advocates" {{ isset($item) ? ($item->type == 'advocates' ? 'selected' : '') : '' }}>Advocates</option>
                                    </select>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>

            </div>

            <div class="card card-defualt">
                <div class="card-body">
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-success btn-block">{{ isset($item) ?  __('master.SAVE'):__('master.ADD') }}</button>
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
