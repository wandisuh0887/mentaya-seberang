@extends('user.layouts.master')

@section('content')
<div class="page-content">
    <!-- inner page banner -->
    <div class="dez-bnr-inr overlay-black-middle">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h3 class="h3 text-white">Visi Misi Keluarahan <span class="text-primary">Mentaya Seberang</span></h3>
            </div>
        </div>
    </div>
    <div class="section-full content-inner">
        <!-- Left & right section start -->
        <div class="container">
            <!-- Portfolio Details -->
            <div class="row portfolio-detail">
                <div class="col-md-12">
                    {!! $sarpras->content !!}
                </div>
            </div>
            <!-- Portfolio Details END -->
        </div>
        <!-- Left & right section  END -->
    </div>
    <!-- contact area  END -->
</div>
@endsection

