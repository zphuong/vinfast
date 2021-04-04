@extends('admin.dashboard')
@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Thêm loại vinfast</h1>
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
						<form action="{{URL::to('administrator/savetypecar')}}" method="post" enctype="multipart/form-data">
						{!!csrf_field()!!}		
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Tên dòng xe</label>
									<input type="text" class="form-control" placeholder="Dòng xe đại diện cho từng xe" name="name">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Seo-link</label>
									<input type="text" class="form-control" placeholder="Đường dẫn seo page ví dụ vinfast-luz-2.0" name="slug">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Giá</label>
									<input type="text" class="form-control" placeholder="Giá thấp nhất của dòng xe" name="price">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Nội dung</label>
									<textarea id="content" name="content"></textarea>
									<script src="{{asset('public/backend/ckeditor/ckeditor/ckeditor.js')}}"></script>
									<script src="{{asset('public/backend/ckfinder/ckfinder/ckfinder.js')}}"></script>
									<script>
										CKEDITOR.replace('content');
									</script>
								</div>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" id="exampleInputFile" name="image">
										<label class="custom-file-label" for="exampleInputFile">Choose file</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text">Upload</span>
									</div>
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