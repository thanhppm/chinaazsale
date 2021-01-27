@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary me-3" type="submit"><i class="fas fa-search"></i></button>
      <button class="btn btn-outline-success">Xóa</button>
    </form>
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addModal">Thêm tài khoản <i class="fas fa-plus-circle"></i></button>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center">
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
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">0123554566</td>
        <td scope="col">longtalong@gmail.com</td>
        <td class="text-center" scope="col">Admin</td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-outline-primary"><i class="fas fa-times"></i></button>
          </div>
        </td>
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

<!---- Add Modal ---->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Tạo tài khoản mới</h5>
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
              <select class="form-select">
                <option value="" disabled selected>Lựa chọn vai trò</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Tên nhân viên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Email</label>
            <div class="col-sm-9">
              <input type="Email" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Ngày sinh</label>
            <div class="col-sm-9">
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Chức vụ</label>
            <div class="col-sm-9">
              <select class="form-select">
                <option value="" disabled selected></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Mật khẩu</label>
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

<!---- Edit Modal ---->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin tài khoản</h5>
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
              <select class="form-select">
                <option value="" disabled selected>Lựa chọn vai trò</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Tên nhân viên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Email</label>
            <div class="col-sm-9">
              <input type="Email" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Ngày sinh</label>
            <div class="col-sm-9">
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Chức vụ</label>
            <div class="col-sm-9">
              <select class="form-select">
                <option value="" disabled selected></option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Mật khẩu</label>
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

<script>
  function editUser(rowId) {

  }
</script>

@endsection