@extends('admin.layouts.content.table')

@section('content')
    <div class="content-wrapper p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Banner</h1>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form class="form-horizontal" action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
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
                                        <label for="title" class="col-sm-3 col-form-label">Nama Banner <span class="text-danger">*</span></label>
                                        <div class="col-sm-5 input-group">
                                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="short_content" class="col-sm-3 col-form-label">Konten <span class="text-danger"></span> </label>
                                        <div class="col-sm-7 input-group">
                                            <textarea class="form-input" name="short_content" rows="4" cols="100">{{ old('short_content') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="url" class="col-sm-3 col-form-label">Url</label>
                                        <div class="col-sm-6 input-group">
                                            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sort" class="col-sm-3 col-form-label">Urutan Banner <span class="text-danger">*</span></label>
                                        <div class="col-sm-2 input-group">
                                            <input type="number" class="form-control" id="sort" name="sort" value="{{ old('sort') ? old('sort'):0 }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label">Status <span class="text-danger">*</span></label>
                                        <div class="col-sm-7 mt-2">
                                            <div class="icheck-info d-inline mr-3">
                                                <input type="radio" id="active" name="status" value="1" checked />
                                                <label for="active">Active</label>
                                            </div>
                                            <div class="icheck-info d-inline mr-3">
                                                <input type="radio" id="inactive" name="status" value="0" />
                                                <label for="inactive">Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="category_detail_id" class="col-sm-3 col-form-label">Thumbnail <span class="text-danger">*</span> </label>
                                        <div class="col-sm-4 input-group">
                                            <input type="file" class="form-control" name="file" />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-images"></i></div>
                                            </div>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Rekomendasi ukuran file : <span class="text-danger">1920 x 766</span> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-info mr-2">Submit</button>
                                    <a href="{{ route('banner.index') }}" class="btn btn-default">Kembali</a>
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
                height: 150,
                width: 900,
                codemirror: {
                    theme: 'monokai'
                }
            });
        })
    </script>
@endsection
