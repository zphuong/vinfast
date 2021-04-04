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
                    <th>Tên xe</th>
                    <th>Giá xe</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                @foreach ($data as $key => $val)
                <tbody>
                  <tr>
                   <td>{{$val->name_car}}</td>
                   <td>{{$val->price}}</td>
                    <td><a href="{{URL::to('administrator/editcar/'.$val->id)}}" class="nav-link">Chỉnh sửa</a><a href="{{URL::to('administrator/deletecar/'.$val->id)}}" class="nav-link">Xóa</a></td>
                  </tr>
                </tbody>
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