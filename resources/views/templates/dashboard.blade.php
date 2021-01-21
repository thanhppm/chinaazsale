@extends('layouts.app')

@section('title', 'Dashboad')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary me-3" type="submit"><i class="fa fa-search"></i></button>
      <button class="btn btn-outline-success">Xóa</button>
    </form>
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm tài khoản +</button>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên đăng nhập</th>
        <th scope="col">Tên nhân viên</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Email</th>
        <th scope="col">Vai trò</th>
        <th scope="col">Thay đổi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
      <tr>
        <th scope="col">2</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
      <tr>
        <th scope="col">3</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
      <tr>
        <th scope="col">4</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
      <tr>
        <th scope="col">5</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
      <tr>
        <th scope="col">6</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
      <tr>
        <th scope="col">7</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
      <tr>
        <th scope="col">8</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td scope="col">Admin</td>
        <td scope="col">Button</td>
      </tr>
    </tbody>
  </table>
</div>
<div class="d-flex justify-content-center custom-pagination">
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Lùi lại</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Tiếp theo</a></li>
    </ul>
  </nav>
</div>

<!---- Modal ---->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Tên đăng nhập</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Phân quyền</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Tên nhân viên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-success text-light">Đăng ký</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Bỏ qua</button>
      </div>
    </div>
  </div>
</div>
<a href="{{ route('logout' )}}">Đăng xuất</a>
@endsection