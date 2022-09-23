@extends('admin.layouts.content.master')

@section('content')
    <div class="content-wrapper p-3">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                {{-- info box --}}
                <div class="row mb-4 d-none">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <a class="info-box-icon bg-success" href=""><span><i class="fas fa-plus"></i></span></a>
                            <div class="info-box-content">
                                <span class="info-box-text"><a href="">MY REQUEST</a></span>
                                <span>
                                    <a href="" class="btn btn-block btn-default btn-xs">Ajukan Pengadaan</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box">
                            <a class="info-box-icon bg-info" href=""><span><i class="fas fa-tasks"></i></span></a>
                            <div class="info-box-content">
                                <span class="info-box-text"><a href="">MY TASKS</a></span>
                                <span>
                                    <a class="btn btn-block btn-default btn-xs" href="">
                                        <span class="badge bg-danger">1</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-info">
                            <span class="info-box-icon bg-warning"><i class="fas fa-balance-scale"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text"><a class="text-white" href="">MY BALANCE</a></span>
                                <span>
                                    <a href="" class="btn btn-block btn-default btn-xs">Manage My Report</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-warning">
                            <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text"><a href="">MY LOOT</a></span>
                                <span>
                                    <a href="" class="btn btn-block btn-default btn-xs">Manage My Loot</a>
                                </span>
                            </div>
                        </div>
                    </div> -->
                </div>

                {{-- Request Report Task --}}
                <div class="row mb-5x d-none">
                    <div class="col-md-12">
                        <div class="box box-widget" style="background-color: #fff;">
                            <div class="row box-body p-2">
                                <div class="col-lg-4">
                                    <h3 class="box-title ml-2">Requests</h3>
                                    <a class="btn btn-app" href=""><i class="fas fa-pencil-alt"></i> Need
                                        action</a>
                                    <a class="btn btn-app" href=""><i class="fas fa-edit"></i> Draft</a>
                                    <a class="btn btn-app" href=""><i class="fa fa-barcode"></i> All</a>
                                </div>
                                <div class="col-lg-4">
                                    <h3 class="box-title ml-2">Reports</h3>
                                    <a class="btn btn-app" href=""><i class="fas fa-pencil-alt"></i> Need
                                        action</a>
                                    <a class="btn btn-app" href=""><i class="fas fa-edit"></i> Draft</a>
                                    <a class="btn btn-app" href="">
                                        <span class="badge bg-danger">1</span><i class="fa fa-barcode"></i> All
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <h3 class="box-title ml-2">Tasks</h3>
                                    <a class="btn btn-app" href=""><i class="fas fa-exclamation-triangle"></i>
                                        Need action</a>
                                    <a class="btn btn-app" href=""><i class="fa fa-barcode"></i> All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Budget --}}
                <div class="row mb-5 d-none">
                    <div class="col-md-12">
                        <div class="box box-widget">
                            <a class="" href="">
                                <div class="bg-info text-white">
                                    <div class="row p-3">
                                        <div class="col-md-6">
                                            <h5>BUDGET FY: 2022</h5>
                                            <h4>Database &amp; IT</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-right">
                                                <h5>&nbsp;</h5>
                                                <h3><b>Rp. 5,345,410,000</b></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="box-body bg-white">
                                <div class="row p-3">
                                    <div class="col-12 col-sm-6 col-md-3 pt-3">
                                        <div class="d-flex flex-fill">
                                            <div class="p-2">
                                                <span>Receipt (Rp):</span>
                                                <h4><b>17.791.431</b></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 pt-3">
                                        <div class="d-flex flex-fill">
                                            <div class="p-2">
                                                <span>Payment (Rp):</span>
                                                <h4><b>17.791.431</b></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 pt-3">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="p-3">
                                                <p>Total actual:<br/> receipt + payment (Rp):</p>
                                                <h3><b>17.791.431</b></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3 pt-3">
                                        <div class="card bg-light d-flex flex-fill">
                                            <div class="p-3">
                                                <a href="">
                                                    <p>Balance based on <br> receipt &amp; payment (Rp):</p>
                                                    <h3><b>5.327.618.569</b></h3>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
