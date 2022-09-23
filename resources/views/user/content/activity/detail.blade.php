@extends('user.layouts.master')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white"></h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{ route('activity') }}">Kegiatan</a></li>
                    <li>{{ ucwords($activity->title) }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner">
            <div class="container">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dez-post-title ">
                        <h3 class="post-title">{{ ucwords($activity->title) }}</h3>
                    </div>
                    <div class="dez-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{ date('d F Y', strtotime($activity->created_at)) }}</strong> <span></span>
                            </li>
                            <li class="post-author"><i class="fa fa-user"></i>By {{ $activity->author_name }} </li>
                            <li class="post-comment"><i class="fa fa-eye"></i> {{ $activity->seen_count }} </li>
                        </ul>
                    </div>
                    <div class="dez-post-media dez-img-effect zoom-slow"> 
                        <img src="{{ $activity->thumbnail_url }}" alt="{{ $activity->title }}" style="height: 500px;">
                    </div>
                    <div class="dez-post-text">
                        {!! $activity->content !!}
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
    </div>
@endsection

