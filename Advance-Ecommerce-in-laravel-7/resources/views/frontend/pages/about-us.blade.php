@extends('frontend.layouts.master')

@section('title','Minhest Sneakers | Về chúng tôi')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Về chúng tôi</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Chào mừng đến với <span>Minehst Sneakers</span></h3>
							<p>
								Nằm tại tổ 12 thị trấn Đông Anh - nội thành Hà Nội, Minhest Sneakers quả là 1 địa điểm “không thể không ghé qua” của anh em đam mê giày khi tới Thủ đô phải không nào. <br>
								Là 1 cửa hàng có chỗ đứng tại Hà Nội, cùng với đó là dịch vụ hậu đãi cam kết số 1, Minhest Sneakers tự tin có thể đưa các bạn tới những trải nghiệm TỐT NHẤT, THẬT NHẤT cho khách hàng. Đồng tiền đi kèm chất lượng, nếu đã bỏ ra số tiền KHÔNG HỀ NHỎ để mua giày, tại sao chúng ta không thử dịch vụ TỐT NHẤT nhỉ.
								<br>
								Dịch vụ: Những dịch vụ chỉ có 1 không 2 tại #minhest_sneakers 
								<br>
								+ Free dán sole - bảo vệ đế trị giá 500k (cho sản phẩm giày trên 9tr) & GIẢM 100k dán sole (cho sản phẩm dưới 9tr)
								<br>
								+ Free vệ sinh giày trọn đời
								<br>
								+ Hỗ trợ khách đổi trả lên đời, thay thế model
								<br>
								+ Tư vấn nhiệt tình, chuẩn size, đảm bảo giày mới 100% khi đến tay khách hàng
								<br>
								+ Nói KHÔNG với giày đã cho thử nhiều lần!!!
								<br>
								+ Cam kết hàng chíng hãng AUTHENTIC 100% - chịu trách nhiệm đến cùng với sản phẩm bán ra!!!
							</p>
							<div class="button">
								<a href="{{route('blog')}}" class="btn">Bài viết của chúng tôi</a>
								<a href="{{route('contact')}}" class="btn primary">Liên hệ chúng tôi</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-img overlay">
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- End About Us -->


	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Miễn phí vận chuyển</h4>
						<p>Với đơn hàng trên 1.000.000 vnđ</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Miễn phí hoàn trả</h4>
						<p>Trong thời gian 30 ngày</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Thanh toán an toàn</h4>
						<p>Thanh toán an toàn 100%</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Giá cả tốt nhất</h4>
						<p>Giá đảm bảo, chất lượng</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter')
@endsection
