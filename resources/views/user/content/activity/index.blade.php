@extends('user.layouts.master')

@section('content')
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="height: 100px;">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li>Kegiatan</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="clearfix">
                    <!-- blog grid -->
                    <div id="masonry" class="row dez-blog-grid-3">
                        @foreach ($activity as $item)
                            <div class="post card-container col-lg-4 col-sm-6 col-12">
                                <div class="blog-post blog-grid">
                                    <div class="dez-post-media dez-img-effect zoom-slow">
                                        <a href="#">
                                            <img style="height: 230px;" src="{{ $item->thumbnail_url }}" alt="">
                                        </a>
                                    </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-title ">
                                            <h4 class="post-title"><a href="{{ route('activity.detail', $item->slug) }}">{{ $item->title }}</a></h4>
                                        </div>
                                        <div class="dez-post-meta ">
                                            <ul>
                                                <li class="post-date"> <i class="fa fa-calendar"></i>{{ date('d F', strtotime($item->created_at)) }}<span>{{ date('Y', strtotime($item->created_at)) }}</span>
                                                </li>
                                                <li class="post-author"><i class="fa fa-user"></i>By {{ $item->author_name }}</li>
                                                <li class="post-comment"><i class="fa fa-eye"></i> <a href="#">{{ $item->seen_count }}</a> </li>
                                            </ul>
                                        </div>
                                        <div class="dez-post-text">
                                            <p>{{ $item->short_description }}</p>
                                        </div>
                                        <div class="dez-post-readmore">
                                            <a href="{{ route('activity.detail', $item->slug) }}" title="READ MORE" rel="bookmark" class="btn btn-outline-success">Read
                                                More...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <div class="pagination-bx">
                        {{ $activity->links('vendor.pagination.custom') }}
                    </div>
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
@endsection
