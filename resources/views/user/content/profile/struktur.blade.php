@extends('user.layouts.master')

@section('content')
<div class="page-content">
    <div class="dez-bnr-inr overlay-black-middle">
        <div class="container">
            <div class="dez-bnr-inr-entry">
                <h3 class="h3 text-white">Struktur Pemerintahan Keluarahan <span class="text-primary">Mentaya Seberang</span></h3>
            </div>
        </div>
    </div>
    <div class="breadcrumb-row d-none">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Portfolio Details</li>
            </ul>
        </div>
    </div>
    <div class="section-full content-inner">
        <div class="container">
            <div class="row portfolio-detail">
                <div class="col-md-12">
                    <img src="{{ $struktur->file_url }}" class="m-b30" alt=""/>
                    {{-- <h2 class="m-b10 font-weight-700 ">Project Description</h2> --}}
                    {{-- <p class="m-b50">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text,</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection