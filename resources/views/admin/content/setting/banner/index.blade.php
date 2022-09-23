@extends('admin.layouts.content.table')

@section('content')
    <div class="content-wrapper p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Banner</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header float-right">
                                <h3 class="card-title">
                                    <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm add">
                                        <i class="fas fa-plus-circle mr-1"></i> Tambah Banner
                                    </a>
                                </h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Thumbnail</th>
                                            <th>Nama Banner</th>
                                            <th>Deskripsi</th>
                                            <th>Url</th>
                                            <th>Urutan</th>
                                            <th>Status</th>
                                            <th>Action(s)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banner as $item)
                                            <tr>
                                                <td><img style="width: 150px;" src="{{ $item->file_url }}" alt="{{ $item->title }}"></td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->short_content }}</td>
                                                <td>{{ $item->url }}</td>
                                                <td>{{ $item->sort }}</td>
                                                <td>{{ $item->status_label }}</td>
                                                <td>
                                                    <a class="btn btn-app btn-sm-app mr-2" href="{{ route('banner.edit', $item->id) }}">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a class="btn btn-app btn-sm-app delete" data-id="{{ route('banner.delete', $item->id) }}"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                // "buttons": ["excel", "colvis"],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('.delete').click(function() {
                Swal.fire({
                    title: 'Apakah kamu yakin menghapus data ini?',
                    text: "Data akan terhapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.get($(this).data('id'))
                        location.reload()
                    }
                })
            })

            // $('#example1').DataTable({
            //     // processing: true,
            //     // serverSide: true,
            //     "responsive": true,
            //     "lengthChange": false,
            //     "autoWidth": false,
            //     buttons: ["csv", "excel", "colvis"],
            //     ajax: "",
            //     columns: [
            //         {data: 'id', name: 'ID'},
            //         {data: 'indicator_name', name: 'Indikator'},
            //         {
            //             data: 'action',
            //             name: 'action',
            //             orderable: true,
            //             searchable: true
            //         },
            //     ]
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
