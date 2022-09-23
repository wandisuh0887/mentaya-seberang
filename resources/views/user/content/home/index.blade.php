@extends('user.layouts.master')

@section('content')
<div class="page-content">
    <!-- Slider -->
    <div class="main-slider style-two default-banner" id="home">
	    <div class="tp-banner-container">
	        <div class="tp-banner" >
				<div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="duotone192" data-source="gallery" style="background-color:transparent;padding:0px;">
					<!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
					<div id="rev_slider_1175_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
						<ul>	
							<!-- SLIDE  -->
							@foreach ($banner as $key => $item)
								<li data-index="rs-{{$key}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ $item->file_url }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="{{ $item->file_url }}"  alt=""  data-lazyload="{{ $item->file_url }}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->
									<div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" 
									data-x="['center','center','center','center']" 
									data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" 
									data-voffset="['0','0','0','0']" 
									data-width="full" data-height="full" 
									data-whitespace="nowrap" 
									data-type="shape" 
									data-basealign="slide" 
									data-responsive_offset="off" 
									data-responsive="off" 
									data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' 
									data-textAlign="['left','left','left','left']" 
									data-paddingtop="[0,0,0,0]" 
									data-paddingright="[0,0,0,0]" 
									data-paddingbottom="[0,0,0,0]" 
									data-paddingleft="[0,0,0,0]" 
									style="z-index: 2;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
									<!-- LAYER NR. 1 -->
									<div class="tp-caption   rs-parallaxlevel-4" 
										id="slide-200-layer-2" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-100']" 
										data-fontsize="['45','45','35','24']"
										data-lineheight="['65','65','65','36']"
										data-width="['720','640','480','300']"
										data-height="none"
										data-whitespace="normal"
							
										data-type="text" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 5; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px;  color: rgba(255, 255, 255, 1.00);font-family:'lora',sans-serif;border-width:0px;letter-spacing:0px; font-weight:700;">{{ strtoupper($item->title) }} </div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption rs-parallaxlevel-4" 
										id="slide-200-layer-3" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['44','57','39','0']" 
										data-fontsize="['17','17','17','15']"
										data-lineheight="['26','26','26','24']"
										data-width="['720','480','480','300']"
										data-height="none"
										data-whitespace="normal"
							
										data-type="text" 
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"y:10px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 6; min-width: 720px; max-width: 720px; white-space: normal; font-size: 17px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'roboto',sans-serif;border-width:0px;">{{ $item->short_content }}</div>

									<!-- LAYER NR. 3 -->
									<div class="tp-caption" 
										id="slide-200-layer-4" 
										data-x="['center','center','center','center']" 
										data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" 
										data-voffset="['133','159','141','102']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-type="button" 
										data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
										data-responsive_offset="off" 
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(238, 238, 238, 0.0);bs:0;"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"
										style="z-index: 7; background-color:rgba(0,0,0,0) !important;">
											<a class="site-button m-r10 {{ $item->url ? '':'d-none' }}" href="{{ $item->url }}">READ MORE </a>
									</div>
								</li>	
							@endforeach
						</ul>
						<div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>	
					</div>
				</div>        
			</div>        
		</div>        
	</div> 
	<!-- Slider END -->

	<!-- Profil Singkat Keluarahan -->
    <div class="section-full bg-white p-t50">
		<div class="container">
			<div class="tab-content">
				<div class="row">
					<div class="col-lg-5 about-img m-b30">
						<img src="{{ $profile?->foto_kelurahan_url }}"  style="height: 500px; width: 457px;"/>
					</div>
					<div class="col-lg-7">
						<div class="m-b20">
							<h3 class="h3 ">Selamat Datang di <span class="text-primary">Kelurahan Mentaya Seberang</span></h3>
							<div class="clear"></div>
						</div>
						{!! $profile?->profile_singkat !!}
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 m-b15">
								<div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center dashed">
									<div class="icon-bx-sm text-primary radius border-1 m-b5 dashed"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
									<div class="icon-content">
										<h5 class="h5 text-primary m-t10 m-b5"><span class="counter">{{ $profile?->jumlah_penduduk_pria }}</span></h5>
										<p>Jumlah Laki-Laki</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-6 m-b15">
								<div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center dashed" >
									<div class="icon-bx-sm text-primary radius border-1 m-b5 dashed"> <a href="#" class="icon-cell"><i class="fa fa-industry"></i></a> </div>
									<div class="icon-content">
										<h5 class="h5 text-primary m-t10 m-b5"><span class="counter">{{ $profile?->jumlah_penduduk_wanita }}</span></h5>
										<p>Jumlah Perempuan</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-12 m-b15">
								<div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center dashed">
									<div class="icon-bx-sm text-primary radius border-1 m-b5 dashed"> <a href="#" class="icon-cell"><i class="fa fa-tasks"></i></a> </div>
									<div class="icon-content">
										<h5 class="h5 text-primary m-t10 m-b5"><span class="counter">{{ $profile?->jumlah_kk }}</span></h5>
										<p>Jumlah Kepala Keluarga</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Profil Singkat Keluarahan END -->
    <!-- Sambutan Lurah -->
    <div class="section-full about-us bg-white p-t50 dez-about">
		<div class="container">
			<div class="tab-content">
				<div class="row">
					<div class="col-lg-5 about-img m-b30">
						<img src="{{ $profile?->foto_kades_url }}" style="height: 457px; width: 457px;" />
					</div>
					<div class="col-lg-7">
						<div class="m-b20">
							<h3 class="h3 ">Sambutan Lurah <span class="text-primary">Mentaya Seberang</span></h3>
							<div class="clear"></div>
						</div>
						{!! $profile?->sambutan_kades !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Sambutan Lurah END -->

	<!-- Jumlah Kependudukan -->
	<div class="section-full bg-img-fix content-inner overlay-primary-dark text-white text-center" style="background-image:url(assets/images/background/bg6.jpg);">
        <div class="container">
            <div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="counter-style-1 m-b30">
						<div class="">
							<i class="icon flaticon-social text-white"></i>
							<span class="counter">{{ $profile->jumlah_penduduk_pria }}</span>
						</div>
						<span class="counter-text">Jumlah Penduduk Laki-Laki</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="counter-style-1 m-b30">
						<div class="">
							<i class="icon flaticon-social text-white"></i>
							<span class="counter">{{ $profile->jumlah_penduduk_wanita }}</span>
						</div>
						<span class="counter-text">Jumlah Penduduk Perempuan</span>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="counter-style-1 m-b30">
						<div class="">
							<i class="icon flaticon-file text-white"></i>
							<span class="counter">{{ $profile->jumlah_kk }}</span>
						</div>
						<span class="counter-text">Jumlah Kepala Keluarga</span>
					</div>
				</div>
			</div>
        </div>
    </div>
    <!-- Latest Blog -->
	<div class="section-full bg-white content-inner-1 blog-1">
        <div class="container">
            <div class="section-head text-center ">
                <h3 class="h3 text-uppercase">Kegiatan <span class="text-primary">Kami</span></h3>
            </div>
            <div class="section-content owl-none">
                <div class="blog-carousel owl-carousel owl-none">
                    @foreach ($activity as $item)
					<div class="item">
						<div class="dez-box">
							<div class="dez-media"> 
								<a href="{{ route('activity.detail',$item->slug) }}" class="text-primary">
									<img style="height: 250px;" src="{{ $item->thumbnail_url }}" alt="">
								</a> 
							</div>
							<div class="dez-info p-a20 border-1">
								<ul class="blog-info text-primary">
									<li>By {{ $item->author_name }} </li>
									<li>{{ date('d F Y', strtotime($item->created_at))}} </li>
								</ul>
								<h4 class="dez-title m-t0"><a href="{{ route('activity.detail',$item->slug) }}">{{ $item->title }}</a></h4>
								<p class="m-a0">{{ $item->short_description }}</p>
							</div>
						</div>
					</div>	
					@endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Blog END -->
    <!-- Content END-->
</div>
@endsection

@section('js_content')
<script>
	$(function() {
		
		// setTimeout(function() { 
	    //     $('.at-expanding-share-button-desktop').addClass('d-none')
	    // }, 1000);

	});	
</script>
@endsection

