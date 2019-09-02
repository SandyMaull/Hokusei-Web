@extends('layouts.app')

@section('body')


	<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
			<li data-target="#slides" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active" >
				<img src="{{ asset('img/slide1-1.jpg') }}" style="filter: blur(8px);-webkit-filter: blur(8px);">
				<div class="carousel-caption">
					<h1 class="display-2">Hokusei</h1>
					<h3>にほん の ぶんがく の せかい</h3>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ asset('img/slide3.jpg') }}">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('img/slide0.jpg') }}">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('img/slide2.jpg') }}">
			</div>
		</div>
	</div>
	
	<!--- Jumbotron -->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">Documentasi Kegiatan UKM Hokusei saat event "Japanese Speech Contest" pada tahun 2017
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="/kegiatan"><button type="button" class="btn btn-light btn-lg">>> Kegiatan Lainnya</button></a>
			</div>
		</div>
	</div>
	
	<!--- Sejarah -->
	<div class="container-fluid padding" id="Sejarah">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4" >Sejarah Hokusei</h1>
				<hr>
			</div>
			<div class="col-12">
				<p class="lead">Hokusei adalah salah satu UKM di Universitas Teknologi
					Sumbawa yang berbasis bahasa jepang, Hokusei didirikan tanggal 5 Desember
					2016 dibawah naungan Universitas sebagai UKM, Berikut visi dan misi Hokusei:
				</p>
			</div>
		</div>
	</div>
	
	<!--- Visi Misi -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6" >
				<img src="{{ asset('img/kaichou.jpg') }}" class="img-fluid" style="border-style: solid;border-color: red;">
			</div>
			<div class="col-lg-6">
				<h2>Visi</h2>
				<p>Mempelajari dan mengaplikasikan Ilmu Sastra dan Kebudayaan
					 Jepang serta mengenalkannya kepada masyarakat
				</p>
				<h2>Misi</h2>
				<p>
					Mempelajari Ilmu Sastra dan kebudayaan Jepang
				</p>
				<p>
					Meningkatkan Kreatifitas dalam Ilmu Sastra dan Kebudayaan Jepang
				</p>
				<p>
					Mengenalkan Kebudayaan Jepang kepada Masyarakat
				</p>
				<p>
					Mengaplikasikan Ilmu Sastra dan Kebudayaan Jepang sehingga berguna
					bagi Masyarakat
				</p>
			</div>
		</div>
	</div>
	
	<!--- Filosofi -->
	<div class="container-fluid padding" id="Logo">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-4">Filosofi Logo Hokusei</h1>
					<hr>
				</div>
			</div>
			<div class="row padding">
				<div class="col-lg-6">
					<h5>Gate torii (Gerbang)</h5>
					<p>
						Sebuah gerbang untuk menunjukan bahwa itu adalah gerbang utama UKM HOKUSEI.
					</p>
					<h5>Warna Merah</h5>
					<p>
						Merah yang berarti semangat, warna ini juga mengartikan bahwa UKM HOKUSEI UTS
						sangatlah bersemangat untuk mengenalkan Ilmu Sastra dan Kebudayaan Jepang
					</p>
					<br>
					<a href="/logo" class="btn btn-danger">>> Selengkapnya</a>
				</div>
				<div class="col-lg-6 text-center">
					<img src="{{ asset('img/hokusei-logo-fix.png') }}" class="img-fluid" style="width:320px;height:320px;">
					
				</div>
			</div>
		</div>
	<!--- Divisi -->
	<div class="container-fluid padding" id="Pengurus">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Struktur Kepengurusan</h1>
				<hr>
			</div>
		</div>
	</div>
	
	<!--- Structure -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
			<img src="{{ asset('img/BPH/kaichou.png') }}" style="border-style: solid;border-color: red;">
				<h3>Kaichou</h3>
				<p>Ardila Tri Yuli Yanti</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/hisho.png') }}" style="border-style: solid;border-color: red;">
				<h3>Hisho</h3>
				<p>Azril Abizzard</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/kaikei.png') }}" style="border-style: solid;border-color: red;">
				<h3>Kaikei</h3>
				<p>Khairunnisa Salsabillah Putri</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/kominfo.png') }}" style="border-style: solid;border-color: red;">
				<h3>Kominfo</h3>
				<p>Muhammad Aulia Ibrahim</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/psdm.png') }}" style="border-style: solid;border-color: red;">
				<h3>PSDM</h3>
				<p>Eka Saisaria</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/kewirausahaan.png') }}" style="border-style: solid;border-color: red;">
				<h3>Kewirausahaan Kreatif</h3>
				<p>Fuji Rahayu Lestari</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/pendidikan.png') }}" style="border-style: solid;border-color: red;">
				<h3>Pendidikan</h3>
				<p>Muhammad Rizki</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/kebudayaan.png') }}" style="border-style: solid;border-color: red;">
				<h3>Kebudayaan</h3>
				<p>Ro'if Jamaaludin Pramudia</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="{{ asset('img/BPH/humas.png') }}" style="border-style: solid;border-color: red;">
				<h3>Humas</h3>
				<p>Rizki Amanda Saputra</p>
			</div>
		</div>
	</div>
	
	<!--- HokuChan -->
	<button class="maskot" data-toggle="collapse" data-target="#maskot">OUR MASCOT!
	</button>
	<div id="maskot" class="collapse">
		<div class="container-fluid padding">
			<div class="row welcome text-center">
				<div class="col-12">
					<h1 class="display-4">HokuChan</h1>
					<hr>
				</div>
			</div>
		</div>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-sm-6 col-md-6">
					<img class="hokuchan" src="{{ asset('img/standeehokufinish.png') }}" style="width: 313px; height:547px;">
				</div>
				<div class="col-sm-6 col-md-3">
					<img class="hokuchan" src="{{ asset('img/stiker-hkuchan.png') }}" style="width: 313px; height:547px;">
				</div>
			</div>
		</div>
		<hr>
	</div>
	
	
	
	<!--- Connect -->
	<div class="container-fluid padding" id="Connect">
		<div class="row text-center padding">
				<div class="row welcome text-center">
					<div class="col-12">
						<h1 class="display-4">Connect with Hokusei!</h1>
						<hr>
					</div>
				</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</div>


@endsection