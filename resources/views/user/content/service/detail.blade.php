@extends('user.layouts.master')

@section('content')
<div class="page-content bg-white">
    <div class="dez-bnr-inr overlay-black-middle">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h3 class="h3 text-white">Layanan </h3>
            </div>
        </div>
    </div>
    <div class="section-full content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 m-b30">
                    <h1 class="m-b20 m-t0">{{ ucwords($service?->title) }}</h1>
                    {{-- <div class="dez-separator bg-primary"></div> --}}
                    {!! $service?->content !!}
                    <a href="#" class="site-button d-none"><span>Apply Now</span><i class="fa fa-angle-right m-l10"></i></a> 
                </div>
                <div class="col-lg-3 col-md-4 m-b30 d-none">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
                                <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-6">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center m-b15">
                                <div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-building-o"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="icon-bx-wraper bx-style-1 p-a20 left">
                                <div class="icon-bx-xs text-primary bg-white radius border-2 "> <a href="#" class="icon-cell"><i class="fa fa-code"></i></a> </div>
                                <div class="icon-content">
                                    <h5 class="dez-tilte text-uppercase">Content title</h5>
                                    <p>Lorem ipsum dolor sit elit nonummy dolor is euismod end [...]</p>
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