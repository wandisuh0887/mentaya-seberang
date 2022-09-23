<footer class="site-footer">
    <div class="footer-top" style="background-image:url(assets/images/background/bg1.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_about">
                        <div class="logo-footer"><img src="{{ asset('assets/images/logo-white.png') }}" alt=""></div>
                        <p>Mentaya Seberang adalah kelurahan di kecamatan Seranau, Kotawaringin Timur, provinsi Kalimantan Tengah, Indonesia. Kelurahan ini berada di seberang Kota Sampit, dipisahkan oleh Sungai Mentaya selebar 420 m.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget recent-posts-entry">
                        <h4 class="m-b15 text-uppercase">Recent Post</h4>
                        <div class="dez-separator bg-primary"></div>
                        <div class="widget-post-bx">
                            @foreach (recentPost('activity') as $post)
                                <div class="widget-post clearfix">
                                    <div class="dez-post-media"> <img src="{{ $post->thumbnail_url }}" alt="" width="200" height="143"> </div>
                                    <div class="dez-post-info">
                                        <div class="dez-post-header">
                                            <h6 class="post-title"><a href="{{ route('activity.detail', $post->slug) }}">{{ substr($post->title,0,19) }}</a></h6>
                                        </div>
                                        <div class="dez-post-meta">
                                            <ul>
                                                <li class="post-author">By {{ $post->author_name }}</li>
                                                <li class="post-comment"><i class="fa fa-eye"></i> {{ $post->seen_count }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="m-b15 text-uppercase">Situs Terkait</h4>
                        <div class="dez-separator bg-primary"></div>
                        <ul>
                            <li><a href="javascript:void(0);">Kecamatan Seranau</a></li>
                            <li><a href="javascript:void(0);">Kabupaten Kotawaringin Timur</a></li>
                            <li><a href="javascript:void(0);">Provinsi Kalimantan Tengah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget_getintuch">
                        <h4 class="m-b15 text-uppercase">Kontak Kami</h4>
                        <div class="dez-separator bg-primary"></div>
                        <ul>
                            <li><i class="fa fa-phone"></i>
                                <strong>Whatsapp / Telepon</strong>{{ profile()->telepon }}
                            </li>
                            <li><i class="fa fa-envelope"></i>
                                <strong>Email</strong>{{ profile()->email }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-left"> <span>Copyright © 2019 Kelurahan Mentaya Seberang</span> </div>
                <div class="col-lg-6 text-right ">
                    
                </div>
            </div>
        </div>
    </div>
</footer>