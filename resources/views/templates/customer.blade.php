@extends('layouts.app')

@section('title', 'Customer')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary me-3" type="submit"><i class="fas fa-search"></i></button>
      <button class="btn btn-outline-success">Xóa</button>
    </form>
    <div>
      <button type="button" class="btn btn-outline-success justify-content-end" data-bs-toggle="modal" data-bs-target="#addCustomerModal">Thêm khách hàng <i class="fas fa-plus-circle"></i></button>
      <button type="button" class="btn btn-outline-success">Tạo nhóm KH <i class="fas fa-plus-circle"></i></button>
    </div>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Mã khách hàng</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Nhóm KH</th>
        <th scope="col">NVKD</th>
        <th scope="col">Người GT</th>
        <th scope="col">Bảng giá</th>
        <th scope="col">Thay đổi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col"></td>
        <td scope="col">Nguyễn Long</td>
        <td scope="col">0123554566</td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td class="text-center" scope="col">
          <button type="button" class="btn btn-outline-success btn-sm">Chi tiết</button>
        </td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCustomerModal"><i class="fas fa-pencil-alt"></i></button>
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
<div class="modal fade" id="addCustomerModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content custom-modal customer-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thông tin khách hàng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Loại KH</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Tên khách hàng</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Số điện thoại</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Mã khách hàng</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ngày sinh</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Khu vực</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Địa chỉ</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Nhóm KH</label>
                <div class="col-sm-9">
                  <select class="form-select">
                    <option value="" disabled selected>Tên nhóm khách hàng</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Giới tính</label>
                <div class="col-sm-9">
                  <div class="form-check form-check-inline radio-gender">
                    <label class="form-check-label" for="male">
                      Nam
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    </label>
                  </div>
                  <div class="form-check form-check-inline radio-gender">
                    <label class="form-check-label" for="female">
                      Nữ
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    </label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ghi chú</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">NVKD</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Người GT</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
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
<div class="modal fade" id="editCustomerModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content custom-modal customer-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thông tin khách hàng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Loại KH</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Tên khách hàng</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Số điện thoại</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Mã khách hàng</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ngày sinh</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Khu vực</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Địa chỉ</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Nhóm KH</label>
                <div class="col-sm-9">
                  <select class="form-select">
                    <option value="" disabled selected>Tên nhóm khách hàng</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Giới tính</label>
                <div class="col-sm-9">
                  <div class="form-check form-check-inline radio-gender">
                    <label class="form-check-label" for="male">
                      Nam
                      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    </label>
                  </div>
                  <div class="form-check form-check-inline radio-gender">
                    <label class="form-check-label" for="female">
                      Nữ
                      <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                    </label>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ghi chú</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">NVKD</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Người GT</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-success text-light">Áp dụng</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Bỏ qua</button>
      </div>
    </div>
  </div>
</div>


@endsection