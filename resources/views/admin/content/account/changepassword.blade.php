@extends('lte.layouts.content.table')

@section('content')
    <div class="content-wrapper p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Change Password</h1>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form class="form-horizontal" action="{{ route('profile.setpassword') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Input</h3>
                                </div>
                                <div class="card-body">
                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                <li>{{ Session::get('fail') }}</li>
                                            </ul>
                                        </div>
                                    @endif

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
                                        <label for="current_password" class="col-sm-2 col-form-label">Password Sekarang <span class="text-danger">*</span></label>
                                        <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="current_password" name="current_password" value="{{ old('current_password') ? old('current_password'):'' }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="new_password" class="col-sm-2 col-form-label">Password Baru <span class="text-danger">*</span></label>
                                        <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="new_password" name="new_password" value="{{ old('new_password') ? old('new_password'):'' }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="new_confirm_password" class="col-sm-2 col-form-label">Ulangi conf Baru<span class="text-danger">*</span></label>
                                        <div class="col-sm-2 input-group">
                                            <input type="text" class="form-control" id="new_confirm_password" name="new_confirm_password" value="{{ old('new_confirm_password') ? old('new_confirm_password'):'' }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="holder d-none">
                                        <img id="imgPreview" src="#" alt="pic" style="width: 225px; height: 225px;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-info mr-2">Submit</button>
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
            let msg = "{{ Session::get('message') }}";
            if (msg) {
                Swal.fire({
                    title: 'Woops!!',
                    text: msg,
                    icon: 'warning',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Ok'
                })
            }
        })
    </script>
@endsection
