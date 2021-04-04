@extends('admin.dashboard')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tất cả loại xe vinfast</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Loại</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Seo-link</th>
                    <th>Nội dung</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                @foreach ($data as $row)
                <tbody>
                  <tr>
                    <td>{{$row->name_car}}</td>
                    <td><img src="{{asset('public/image/'.$row->image)}}" alt="" style="width:100px; height: 100px;"></td>
                    <td>{{$row->price_low}}</td>
                    <td>{{$row->slug}}</td>
                    <td><?php $a=$row->content; echo substr($a,3,500); ?></td>
                    <td><a href="{{URL::to('administrator/edittypecar/'.$row->id)}}" class="nav-link">Chỉnh sửa</a><a href="{{URL::to('administrator/deletetypecar/'.$row->id)}}" class="nav-link">Xóa</a></td>
                  </tr>
                </tfoot>
                @endforeach
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection