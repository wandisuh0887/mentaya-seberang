@extends('user.layouts.master')

@section('content')
<div class="page-content">
    <div class="dez-bnr-inr overlay-black-middle" >
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h3 class="h3 text-white">Profile Keluarahan <span class="text-primary">Mentaya Seberang</span></h3>
            </div>
        </div>
    </div>
    <div class="clearfix">
        <div class="section-full bg-white content-inner-2">
            <div class="container">
                <div class="section-content">
                    <div class="row about-column-reverse mb-4">
                        <div class="col-lg-6 col-md-6 text-center hidden-sm align-self-end">
                            <div class="worker"> <img src="{{ $profile->file_url }}" alt=""/> </div>
                        </div>
                        <div class="col-lg-6 col-md-6 m-b30">
                            {!! $profile->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

