@extends('admin.layouts.content.table')

@section('content')
    <div class="content-wrapper p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile Kelurahan</h1>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form class="form-horizontal" action="{{ route('profilekel.update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $profile->id }}">
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
                                        <label for="title" class="col-sm-3 col-form-label">Judul Halaman <span class="text-danger">*</span></label>
                                        <div class="col-sm-5 input-group">
                                            <input type="text" class="form-control" id="title" name="title" value="Profile Kelurahan" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group row d-none">
                                        <label for="short_description" class="col-sm-3 col-form-label">Deskripsi <span class="text-danger">*</span> </label>
                                        <div class="col-sm-7 input-group">
                                            <textarea class="form-input" name="short_description" rows="4" cols="100" >{{ old('short_description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="item_availability_date" class="col-sm-3 col-form-label">Konten <span class="text-danger">*</span> </label>
                                        <div class="input-group col-sm-9" id="item_availability_date" data-target-input="nearest">
                                            <textarea id="summernote" name="content">{{ $profile->content }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="category_detail_id" class="col-sm-3 col-form-label">File <span class="text-danger">*</span> </label>
                                        <div class="col-sm-4 input-group">
                                            <input type="file" class="form-control" name="file" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-images"></i></div>
                                            </div>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Rekomendasi ukuran file : <span class="text-danger">428 x ß</span> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-info mr-2">Submit</button>
                                    <a href="{{ route('profilekel.index') }}" class="btn btn-default">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
