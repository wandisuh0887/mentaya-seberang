@extends('admin.layouts.content.table')

@section('content')
    <div class="content-wrapper p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Admin</h1>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form class="form-horizontal" action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $user->id }}">
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
                                        <label for="full_name" class="col-sm-2 col-form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                        <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $user->full_name }}" required/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 col-form-label">Password <span class="text-danger"></span></label>
                                        <div class="col-sm-2 input-group">
                                            <input type="text" class="form-control" id="password" name="password" value=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Status <span class="text-danger">*</span></label>
                                        <div class="col-sm-7 mt-2">
                                            <div class="icheck-info d-inline mr-3">
                                                <input type="radio" id="active" name="status" value="1" {{ $user->status == 1 ? 'checked':'' }}/>
                                                <label for="active">Active</label>
                                            </div>
                                            <div class="icheck-info d-inline mr-3">
                                                <input type="radio" id="inactive" name="status" value="0" {{ $user->status == 0 ? 'checked':'' }}/>
                                                <label for="inactive">Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card-footer">
                                    <div class="holder {{ !$user->url_photo ? 'd-none':'' }}">
                                        <img id="imgPreview" src="{{ $user->url_photo }}" alt="pic" style="width: 225px; height: 225px;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-info mr-2">Submit</button>
                                    <a href="{{ route('user.index') }}" class="btn btn-default">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
        </section>
    </div>
@endsection

@section('js_content')
    <script>
        $(function() {
            //Date picker
            $('#duedate').datetimepicker({
                format: 'L'
            })

            $('.select2').select2()

            $('#photo').change(function(){
                const file = this.files[0];
                var check = fileCheck(file.type);
                if(check === true) {
                    if (file){
                        let reader = new FileReader();
                        reader.onload = function(event) {
                            console.log(event.target.result);
                            $('.holder').removeClass('d-none')
                            $('#imgPreview').attr('src', event.target.result);
                        }
                        reader.readAsDataURL(file);
                    }
                }else {
                    $('#photo').val('')
                    alert('file ext tidak support')
                }
            })

            function fileCheck(extension) {
                var ext = extension.split('/');
                switch(ext[1]) {
                    case 'jpg':
                    case 'png':
                    case 'jpeg':
                        return true;
                    break;                         
                    case 'zip':
                    case 'rar':
                    case 'gif':
                    case 'pdf':
                        return false;
                    break;
                    default:
                        return false;
                }
            }
        })

        
    </script>
@endsection
