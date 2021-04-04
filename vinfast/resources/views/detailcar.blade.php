@extends('welcome')
@section("content")
<div class="about">
	<div class="container">
		
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
				<img src="{{asset('public/image/'.$typecar->image)}}" class="detailcar" alt="">
				<div class="text-center pb-5 detailcar">{{$typecar->name_car}}</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-xs-12 showprice">
				@foreach($car as $key => $value)
				<div class="sprice">
					<div class="row">
						<div class="col text-left">{{$value->name_car}}</div>
						<div class="col text-right">{{number_format($value->price).' '.'VNĐ'}}</div>
						<hr>
					</div>
				</div><br>
				@endforeach
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-9 col-md-9 col-xs-12 contentcar">
					<h1>THÔNG TIN VỀ {{$typecar->name_car}}</h1>
					<hr>
					{!!$typecar->content!!}
				</div>
				<div class=" col-xl-3 col-md-3 col-lg-3 col-xs-12">
					<img src="{{asset('public/image/162379909_1450915315252383_2632417818972755747_n.jpg')}}" style="width: 100%;">
				</div>
			</div>
		</div>
	</div>
	@endsection