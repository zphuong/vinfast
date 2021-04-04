@extends('admin.dashboard')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Khách hàng</h1>
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
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($user as $user)
                  <?php if(isset($user->password)){
                    continue;
                  }?>
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone}}</td>
                    <td><?php if($user->stt==1){
                      echo "Cần tư vấn";
                    }else{
                      echo "Đã liên hệ";
                    }
                    ?></td>
                    <td>
                      @if($user->stt==1)
                      <a href="{{URL::to('administrator/edituser/'.$user->id)}}" class="nav-link fas fa-check"></a>
                      @else
                      
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tfoot>
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