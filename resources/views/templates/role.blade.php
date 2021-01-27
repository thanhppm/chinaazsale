@extends('layouts.app')

@section('title', 'Role')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary me-3" type="submit"><i class="fas fa-search"></i></button>
      <button class="btn btn-outline-success">Xóa</button>
    </form>
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#editModal">Chỉnh sửa vai trò <i class="fas fa-cog"></i></button>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Tài khoản</th>
        <th scope="col">Vai trò</th>
        <th scope="col">Phân quyền</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">longtalong</td>
        <td scope="col">Nguyễn Long</td>
        <td class="text-center" scope="col">Admin</td>
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

<!---- Edit Modal ---->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin tài khoản</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label text-end">Vai trò</label>
            <div class="col-sm-10">
              <select class="form-select">
                <option value="" disabled selected>Lựa chọn vai trò</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-2"></div>
            <div class="col-sm">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Danh mục
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Thu chi
                </label>
              </div>
            </div>
            <div class="col-sm">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Kho vận
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Báo cáo
                </label>
              </div>
            </div>
            <div class="col-sm">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Thu chi
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Thống kê
                </label>
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

  @endsection