@extends('lte.layouts.content.table')

@section('content')
    <div class="content-wrapper p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pengadaan Barang</h1>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form class="form-horizontal" action="{{ route('myrequest.store') }}" method="POST">
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
                                        <label for="full_name" class="col-sm-3 col-form-label">Nama Requester <span class="text-danger">*</span></label>
                                        <div class="col-sm-3 input-group">
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ Auth::user()->full_name }}" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="department" class="col-sm-3 col-form-label">Departemen / Zona <span class="text-danger">*</span></label>
                                        <div class="col-sm-5 input-group">
                                            <input type="text" class="form-control" id="department" name="department" value="{{ Auth::user()->department_name }}" disabled/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label">Jenis Pengadaan <span class="text-danger">*</span></label>
                                        <div class="col-sm-9 mt-2">
                                            @foreach($category as $item)
                                            <div class="icheck-info d-inline mr-3">
                                                <input class="pr-type" type="radio" id="active{{ $item->id }}" name="category_id" value="{{ $item->id }}"/>
                                                <label for="active{{ $item->id }}">{{ $item->category_name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="category_sub_id" class="col-sm-3 col-form-label">Kategori <span class="text-danger">*</span> </label>
                                        <div class="col-sm-3 input-group">
                                            <select class="form-control select2" name="category_sub_id" id="category_sub_id" required>
                                                <option value="">-- Silakan Pilih --</option>
                                            </select>
                                            <!-- <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row d-none">
                                        <label for="category_detail_id" class="col-sm-3 col-form-label">Sub Kategori <span class="text-danger">*</span> </label>
                                        <div class="col-sm-3 input-group">
                                            <select class="form-control select2" name="category_detail_id" id="category_detail_id">
                                                <option value="">-- Silakan Pilih --</option>
                                            </select>
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="item_availability_date" class="col-sm-3 col-form-label">Tanggal Ketersediaan Barang <span class="text-danger">*</span> </label>
                                        <div class="input-group col-sm-3" id="item_availability_date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" autocomplete="off" data-target="#item_availability_date" name="item_availability_date" required/>
                                            <div class="input-group-append" data-target="#item_availability_date" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row d-none">
                                        <label for="workplan_id" class="col-sm-3 col-form-label">Rencana Kerja <span class="text-danger">*</span> </label>
                                        <div class="col-sm-3 input-group">
                                            <select class="form-control select2" name="workplan_id" id="workplan_id" >
                                                <option value="">-- Silakan Pilih --</option>
                                                <option value="1">item rencana kerja</option>
                                            </select>
                                            <!-- <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row d-none">
                                        <label for="workplan_sub_id" class="col-sm-3 col-form-label">Sub Rencana Kerja <span class="text-danger">*</span> </label>
                                        <div class="col-sm-5 input-group">
                                            <select class="form-control select2" name="workplan_sub_id" id="workplan_sub_id" >
                                                <option value="">-- Silakan Pilih --</option>
                                                <option value="2">item sub rencana kerja</option>
                                            </select>
                                            <!-- <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="item_budget_id" class="col-sm-3 col-form-label">Item Budget <span class="text-danger">*</span> </label>
                                        <div class="col-sm-6 input-group">
                                            <select class="form-control select2" name="item_budget_id" id="item_budget_id" required>
                                                <option value="">-- Silakan Pilih --</option>
                                                <option value="3">item budget</option>
                                            </select>
                                            <!-- <div class="input-group-append">
                                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="form-group row table d-none">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                <th scope="col">Workplan</th>
                                                <th scope="col">Workplan Sub</th>
                                                <th scope="col">Item Budget</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Request</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-body table-responsive p-0">
                                                    <table class="table table-hover text-nowrap">
                                                        <thead>
                                                            <tr class="bg-secondary">
                                                                <th>#</th>
                                                                <th>Nama Item</th>
                                                                <th>Deskripsi</th>
                                                                <th>Qty</th>
                                                                <th>Satuan</th>
                                                                <!-- <th>Harga</th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbody">
                                                            <tr style="background-color: #dbdddb">
                                                                <td>
                                                                    <input type='checkbox' name='record'>
                                                                </td>
                                                                <td><input class="form-control" name="item_name[]" size="50" /></td>
                                                                <td>
                                                                    <textarea rows="3" cols="50" class="form-control" name="description[]"></textarea>
                                                                </td>
                                                                <td><input class="form-control" size="5" name="qty[]" /></td>
                                                                <td>
                                                                    <select class="form-control2 select2 tahun" name="unit[]">
                                                                        <option value="">-- Pilih --</option>
                                                                        @foreach($unit as $item)
                                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <button type="button" class="btn btn-info btn-sm btn-add mr-2">
                                                <span><i class="fas fa-plus-circle"></i></span>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm btn-del">
                                                <span><i class="fas fa-trash-alt"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-info mr-2">Save As Draft</button>
                                    <a href="{{ route('myrequest.index') }}" class="btn btn-default">Kembali</a>
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
            $('#item_availability_date').datetimepicker({
                format: 'YYYY-MM-DD',
            })

            $('.select2').select2()

            $('.pr-type').click(function() {
                var id = $("input[type=radio][name=category_id]:checked").val()
                console.log(id);
                if(id) {
                    $.post('{{ route("categorydetail.getcategory") }}', {'_token':'{{ csrf_token() }}', 'parent_id':id}, function(result) {
                        var cat_opt = `<option value=''>-- Silakan Pilih --</option>`;
                        cat_opt += result.data.map(item => {
                            const opt = `<option value='${item.id}'>${item.category_name}</option>`;
                            return opt;
                        })
                        $('#category_sub_id').html(cat_opt)

                    }).fail(function(error) {
                        Swal.fire(
                            'Not Found!',
                            'Woops, data kategori tidak ditemukan.',
                            'warning'
                        )
                        var cat_opt = `<option value=''>-- Silakan Pilih --</option>`;
                        $('#category_id').html(cat_opt)
                    })
                }
            })

            $('#category_id').change(function() {
                if(this.value) {
                    $.post('{{ route("categorydetail.getcategory") }}', {'_token':'{{ csrf_token() }}', 'parent_id':this.value}, function(result) {
                        var subcat_opt = `<option value=''>-- Silakan Pilih --</option>`;
                        subcat_opt += result.data.map(item => {
                            const opt = `<option value='${item.id}'>${item.category_name}</option>`;
                            return opt;
                        })
                        $('#category_sub_id').html(subcat_opt)

                    }).fail(function(error) {
                        // Swal.fire(
                        //     'Not Found!',
                        //     'Woops, data sub kategori tidak ditemukan.',
                        //     'warning'
                        // )
                        var subcat_opt = `<option value=''>-- Silakan Pilih --</option>`;
                        $('#category_sub_id').html(subcat_opt)
                    })
                } else {
                    var subcat_opt = `<option value=''>-- Silakan Pilih --</option>`;
                    $('#category_sub_id').html(subcat_opt)
                }
            })

            $('.btn-add').click(function () {
                var markup = `<tr style="background-color: #dbdddb">
                                <td>
                                    <input type='checkbox' name='record'>
                                </td>
                                <td><input class="form-control" name="item_name[]" size="50" /></td>
                                <td>
                                    <textarea rows="3" cols="50" class="form-control" name="description[]"></textarea>
                                </td>
                                <td><input class="form-control" size="5" name="qty[]" /></td>
                                <td>
                                    <select class="form-control2 select2 tahun" name="unit[]">
                                        <option value="">-- Pilih --</option>
                                        @foreach($unit as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>`
                $('#tbody').append(markup);
                $('.select2').select2()
            })

            $('.btn-del').click(function() {
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove()
                    }
                })
            })

            $('#item_budget_id').change(function() {
                console.log(this.value);
                if(this.value) {
                    $('.table').removeClass('d-none')
                } else {
                    $('.table').addClass('d-none')
                }
            })

        })
    </script>
@endsection
