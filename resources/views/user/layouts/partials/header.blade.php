<header class="site-header header header-style-2 dark-primary mo-left">
    <!-- top bar -->
    <div class="top-bar bg-primary">
        <div class="container">
            <div class="row justify-content-between">
                <input type="hidden" id="phone" value="{{ profile()->telepon }}">
                <input type="hidden" id="visitor" value="{{ visitors() }}">
                <div class="dez-topbar-left">
                    <ul class="social-line text-center pull-right">
                        <li><a href="javascript:void(0);"><i class="fa fa-whatsapp"></i> <span>{{ profile()->telepon }}</span> </a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-envelope-o"></i> <span>{{ profile()->email }}</span></a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-clock-o"></i> <span>{{ profile()->jam_operasional }}</span></a></li>
                    </ul>
                </div>
                <div class="dez-topbar-right">
                    <ul class="social-line text-center pull-right">
                        <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                        <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header  main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" width="193" height="89" alt=""></a></div>
                <!-- nav toggle button -->
				<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <!-- Quik search -->
                <div class="dez-quik-search bg-primary">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                        <span  id="quik-search-remove"><i class="fa fa-remove"></i></span>
                    </form>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-end"  id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
						<li class="{{ prefixActiveUser('home')}}">
							<a href="{{ route('home') }}">Home</a>
						</li>
						<li>
							<a href="javascript:;">Profil<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{ route('kelurahan.profileuser') }}">Profil Kelurahan</a></li>
								<li><a href="{{ route('kelurahan.visimisi') }}">Visi Misi</a></li>
								<li><a href="{{ route('kelurahan.struktur') }}">Struktur Pemerintahan</a></li>
								<li><a href="{{ route('kelurahan.sarpras') }}">Sarana Prasarana</a></li>
							</ul>
						</li>
						<li class="{{ prefixActiveUser('activity')}}">
							<a href="{{ route('activity') }}">Kegiatan<i class="fa fa-chevron-down"></i></a>
						</li>
						<li>
							<a href="javascript:;">Pemberdayaan<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{ route('pemberdayaan.detail','bidang-kamtibmas') }}">Bidang Kamtibmas</a></li>
								<li><a href="{{ route('pemberdayaan.detail','bidang-kesehatan') }}">Bidang Kesehatan</a></li>
								<li><a href="{{ route('pemberdayaan.detail','bidang-pariwisata') }}">Bidang Pariwisata</a></li>
								<li><a href="{{ route('pemberdayaan.detail','bidang-pendidikan') }}">Bidang Pendidikan</a></li>
								<li><a href="{{ route('pemberdayaan.detail','bidang-perempuan-anak') }}">Bidang Perempuan & Anak</a></li>
							</ul>
						</li>
						<li class="{{ blockActiveUser('service') }}">
							<a href="javascript:;">Layanan<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{ route('service.detail', 'pembuatan-kk') }}">Pembuatan KK</a></li>
								<li><a href="{{ route('service.detail', 'pembuatan-ktp') }}">Pembuatan KTP</a></li>
								<li><a href="{{ route('service.detail', 'pembuatan-dokumen-kelahiran') }}">Pembuatan Dok. Kelahiran</a></li>
								<li><a href="{{ route('service.detail', 'pengantar-pindah-datang') }}">Pengantar Pindah Datang</a></li>
								<li><a href="{{ route('service.detail', 'keterangan-untuk-menikah') }}">Keterangan Untuk Menikah</a></li>
								<li><a href="{{ route('service.detail', 'file-form-unduh') }}">File Form Unduh</a></li>
								<li><a href="{{ route('service.detail', 'keterangan-ahli-waris') }}">Keterangan Ahli Waris</a></li>
								<li><a href="{{ route('service.detail', 'pembuatan-dokumen-kematian') }}">Pembuatan Dok. Kematian</a></li>
								<li><a href="{{ route('service.detail', 'keterangan-tidak-mampu') }}">Keterangan Tidak Mampu</a></li>
								<li><a href="{{ route('service.detail', 'skck') }}">SKCK</a></li>
								<li><a href="{{ route('service.detail', 'rekomendasi-keramaian') }}">Rekomendasi Keramaian</a></li>
								<li><a href="{{ route('service.detail', 'keterangan-domisili') }}">Keterangan Domisili</a></li>
								<li><a href="{{ route('service.detail', 'persetujuan-mendirikan-bangunan') }}">Persetujuan Mendirikan Bangunan</a></li>
								<li><a href="{{ route('service.detail', 'pembuatan-ijin-umkm') }}">Pembuatan Ijin UMKM</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:;">Kelembagaan<i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="{{ route('kelembagaan.detail', 'pkk') }}">PKK</a></li>
								<li><a href="{{ route('kelembagaan.detail', 'lpmk') }}">LPMK</a></li>
								<li><a href="{{ route('kelembagaan.detail', 'umkm') }}">UMKM</a></li>
								<li><a href="{{ route('kelembagaan.detail', 'karang-taruna') }}">Karang Taruna</a></li>
							</ul>
						</li>
					</ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
