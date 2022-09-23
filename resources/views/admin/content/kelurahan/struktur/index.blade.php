@extends('admin.layouts.content.table')

@section('content')
    <div class="content-wrapper p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Struktur Pemerintahan Kelurahan</h1>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Input</h3>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 col-form-label">Judul Halaman</label>
                                    <div class="col-sm-5 input-group">
                                        <input type="text" class="form-control" id="title" name="title" value="{{ $struktur->title }}" readonly/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="category_detail_id" class="col-sm-3 col-form-label">File <span class="text-danger">*</span> </label>
                                    <div class="col-sm-4 input-group">
                                        @if($struktur->file)
                                        <img style="width: 250px;" class="image" src="{{ $struktur->file_url }}" alt="{{ $struktur->title }}">
                                        @else -
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-footer text-center">
                                <a href="{{ route('struktur.edit', $struktur->id) }}" class="btn btn-primary">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@section('js_content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            //Date picker
            $('#summernote').summernote({
                height: 350,
                width: 900,
                codemirror: {
                    theme: 'monokai'
                }
            });
        })
    </script>
@endsection
