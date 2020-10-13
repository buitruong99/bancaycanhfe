<!DOCTYPE html>
<html>
<head>
    @yield('css')
	<link rel="stylesheet" type="text/css" href="{{asset('bonsai/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bonsai/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bonsai/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bonsai/css/style_sanPham.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bonsai/css/style_lienHe.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('bonsai/css/style_tintuc.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bonsai/css/style_trang_chu.css')}}">
	<script type="text/javascript" src="{{asset('bonsai/js/jquery-3.5.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bonsai/js/bootstrap.bundle.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bonsai/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bonsai/js/slider.js')}}"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title></title>
</head>
<body>
	<!-- Header -->
	<header>
		<!-- Header -->
		<div class="first-header">
			<div class="container">
				<div class="row menu-header">
					<div class="col-sm-5 col-lg-5 col-5 p-img">
						<img src="{{ asset('bonsai/images/phone.png') }}" >
						<a href="">
						<p>Hotline: <b>{{getConfigValue('phone_contact')}}</b></p>
						</a>
					</div>
					<div class="col-sm-1 col-lg-1 col-1 f-img" >
						<a href="{{getConfigValue('fb')}}" target="_blank">
						<img src="{{ asset('bonsai/images/f.png') }}">
						</a>
					</div>
					<div class="col-sm-1 col-lg-1 col-1 t-img">
						<a href="{{getConfigValue('twitter')}}" target="_blank">
						<img src="{{ asset('bonsai/images/t.png') }}">
						</a>
					</div>
					<div class="col-sm-1 col-lg-1 col-1 g-img">
						<a href="{{getConfigValue('g+')}}" target="_blank">
						<img   src="{{ asset('bonsai/images/g.png') }}">
						</a>
					</div>
					<div class="col-sm-1 col-lg-1 col-1 y-img">
                        <a href="{{getConfigValue('youtobe')}}" target="_blank">
						<img src="{{ asset('bonsai/images/y.png') }}">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container second-header">
			<div class="row">
				<div class=" col-2 col-lg-2 col-sm-5 ">
					<img src="{{ asset('bonsai/images/logo.png') }}">
				</div>
				<div class=" col-4 col-lg-4 col-sm-5 search-box">
                    <form method="get" action="{{route('timkiem')}}">
					<div class="input-group mb-3">
					  <input name="key" type="text" class="form-control" placeholder="Tìm kiếm">
						<div class="input-group-append">
						    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
						    	<i class="fas fa-search"></i>
						    </button>
					  	</div>
					</div>
                    </form>
				</div>
				<div class=" col-3 col-lg-3 col-sm-5 hand">
					<img src="{{ asset('bonsai/images/hand1.png') }}">
					<p>
						CAM KẾT CHẤT LƯỢNG DỊCH VỤ SẢN PHẨM
					</p>
				</div>
				<div class=" col-3 col-lg-3 col-sm-5 hand">
					<img src="{{ asset('bonsai/images/hand2.png') }}">
					<p>VẬN CHUYỂN NỘI THÀNH MIỄN PHÍ</p>
				</div>
			</div>
		</div>
	</header>
		<!-- End Header -->

		<!-- Nav -->
	<nav>
		<div class="nav">
				<ul>
					<li>
						<div class="dropdown">
						  <span class="dropbtn">
						  	<i class="fas fa-list"></i>Danh mục sản phẩm
						  </span>
						  <div class="dropdown-content">
                              @foreach($data_unique_category as $item)
                                  <a href="{{ route('category',['id'=>$item->id]) }}">
                                      <img src="{{ asset('bonsai/images/icon_mnuL.png') }}">
                                      <p>{{$item->name}}</p>
                                  </a>
                              @endforeach
						  </div>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('index') }}">Trang chủ</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('gioithieu') }}">Giới thiệu</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('sanpham') }}">Sản phẩm</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="#">Dịch vụ</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="#">Hỗ trợ khách hàng</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('tintuc') }}">Tin tức</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('lienhe') }}">Liên hệ</a>
						</div>
					</li>
				</ul>
		</div>
	</nav>
        <!-- End Nav -->

    @yield('content')


    <!-- Footer -->
	<footer>
		<div class="f-footer">
			<div class="row ff-footer">
				<div class="left-footer">
				<ul>
					<li>
						<div class="menu-nav">
							<a href="{{ route('index') }}">Trang chủ</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('gioithieu') }}">Giới thiệu</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('sanpham') }}">Sản phẩm</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="#">Dịch vụ</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('tintuc') }}">Tin tức</a>
						</div>
					</li>
					<li>
						<div class="menu-nav">
							<a href="{{ route('lienhe') }}">Liên hệ</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="right-footer">
                <p>Kết nối với chúng tôi</p>
                <a href="{{getConfigValue('fb')}}" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="{{getConfigValue('twitter')}}" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="{{getConfigValue('g+')}}" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                <a href="{{getConfigValue('youtobe')}}" target="_blank">   <i class="fab fa-youtube-square"></i></a>
			</div>
			</div>
		</div>
		<div class="e-footer">
			<div class="row footer-container">
				<div class="col l-img-footer">
					<img src="{{ asset('bonsai/images/map.jpg') }}">
				</div>
				<div class="col bt-footer">
					<h5>Nhà vườn Vân Thủy</h5>
					<br/>
					<i class="fas fa-map-marker-alt">  Địa chỉ:{{getConfigValue('địachỉ')}}</i>
					<br/>
					<i class="fas fa-phone-alt">  Hotline:{{getConfigValue('Hotline')}} </i>
					<br/>
					<i class="far fa-envelope">   Email: {{getConfigValue('email')}}</i>
					<br/>
					<i class="fas fa-globe-africa">   Website: {{getConfigValue('Website')}}</i>
					<br/>
					<i class="far fa-copyright">  {{getConfigValue('footer')}}</i>
				</div>
				<div class="col r-img-footer">
					<img src="{{ asset('bonsai/images/fb.jpg') }}">
				</div>
			</div>
		</div>
	</footer>
