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
                <form class="form-horizontal" action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="nama_kades" class="col-sm-3 col-form-label">Nama Kades <span class="text-danger">*</span> </label>
                                        <div class="col-sm-4 input-group">
                                            <input type="hidden" name="type" value="edit">
                                            <input type="text" class="form-control" name="nama_kades" value="{{ $profile->nama_kades }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="foto_kades" class="col-sm-3 col-form-label">Foto Kades </label>
                                        <div class="col-sm-4 input-group">
                                            <input type="file" class="form-control" name="foto_kades"/>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-images"></i></div>
                                            </div>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Rekomendasi ukuran file : <span class="text-danger">457 x 457</span> </label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="foto_kades" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-4 input-group">
                                            <img style="width: 250px;" class="image" src="{{ $profile->foto_kades_url }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sambutan_kades" class="col-sm-3 col-form-label">Sambutan Kades <span class="text-danger">*</span> </label>
                                        <div class="col-sm-7 input-group">
                                            <textarea id="sambutan_kades" class="summernote" name="sambutan_kades">{{ $profile->sambutan_kades }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="foto_kelurahan" class="col-sm-3 col-form-label">Foto Kelurahan </label>
                                        <div class="col-sm-4 input-group">
                                            <input type="file" class="form-control" name="foto_kelurahan"/>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-images"></i></div>
                                            </div>
                                        </div>
                                        <label class="col-sm-3 col-form-label">Rekomendasi ukuran file : <span class="text-danger">457 x 457</span> </label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="foto_kades" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-4 input-group">
                                            <img style="width: 250px;" class="image" src="{{ $profile->foto_kelurahan_url }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="profile_singkat" class="col-sm-3 col-form-label">Profile Singkat Kelurahan <span class="text-danger"></span> </label>
                                        <div class="col-sm-7 input-group">
                                            <textarea id="profile_singkat" class="summernote2" name="profile_singkat">{{ $profile->profile_singkat }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="jumlah_penduduk_pria" class="col-sm-3 col-form-label">Jum. Penduduk Laki-Laki <span class="text-danger">*</span></label>
                                        <div class="col-sm-2 input-group">
                                            <input type="number" class="form-control" id="jumlah_penduduk_pria" name="jumlah_penduduk_pria" value="{{ $profile->jumlah_penduduk_pria }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_penduduk_wanita" class="col-sm-3 col-form-label">Jum. Penduduk Perempuan <span class="text-danger">*</span></label>
                                        <div class="col-sm-2 input-group">
                                            <input type="number" class="form-control" id="jumlah_penduduk_wanita" name="jumlah_penduduk_wanita" value="{{ $profile->jumlah_penduduk_wanita }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_kk" class="col-sm-3 col-form-label">Jumlah KK <span class="text-danger">*</span></label>
                                        <div class="col-sm-2 input-group">
                                            <input type="number" class="form-control" id="jumlah_kk" name="jumlah_kk" value="{{ $profile->jumlah_kk }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-5 input-group">
                                            <input type="text" class="form-control" id="email" name="email" value="{{ $profile->email }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telepon" class="col-sm-3 col-form-label">Telepon / Whatsapp <span class="text-danger">*</span></label>
                                        <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $profile->telepon }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jam_operasional" class="col-sm-3 col-form-label">Jam Operasional <span class="text-danger">*</span></label>
                                        <div class="col-sm-6 input-group">
                                            <input type="text" class="form-control" id="jam_operasional" name="jam_operasional" value="{{ $profile->jam_operasional }}" required/>
                                        </div>
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
        let msg = `{{ Session::get('message') }}`
        if(msg) {
            Swal.fire({
                title: 'Berhasil',
                text: msg,
                icon: 'success',
            })
        }

        $(function() {
            //Date picker
            $('.summernote').summernote({
                height: 250,
                width: 900,
                codemirror: {
                    theme: 'monokai'
                }
            });

            $('.summernote2').summernote({
                height: 150,
                width: 900,
                codemirror: {
                    theme: 'monokai'
                }
            });
        })
    </script>
@endsection
