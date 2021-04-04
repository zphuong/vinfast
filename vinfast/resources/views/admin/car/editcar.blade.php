@extends('admin.dashboard')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Chỉnh sửa xe</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">General Form</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container">
			<div class="row">
				<!-- left column -->
				<div class="col-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<!-- /.card-header -->
						<!-- form start -->
						<form action="{{URL::to('administrator/updatecar/'.$car->id)}}" method="post" enctype="multipart/form-data">
							{!!csrf_field()!!}		
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Tên xe</label>
									<input type="text" class="form-control" name="name" value="{{$car->name_car}}">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Giá xe</label>
									<input type="text" class="form-control" placeholder="Giá" name="price" value="{{$car->price}}">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Thuộc loại xe</label>
									<select name="typecar" class="custom-select form-control-border" id="exampleSelectBorder">
										@foreach( $data as $key => $value )
										<option value="{{ $value->id}}">{{$value->name_car}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<!-- /.card-body -->

							<div class="card-footer text-right">
								<button type="submit" class="btn btn-primary">Thêm</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
@endsection