@extends('layouts.app')

@section('title', 'Outcome')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="date" placeholder="Từ ngày">
      <input class="form-control me-2" type="date" placeholder="Đến ngày">
      <button class="btn btn-outline-success text-nowrap" type="submit">Tìm kiếm</button>
    </form>
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addOutcomeModal">Thêm phiếu <i class="fas fa-plus-circle"></i></button>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Số phiếu</th>
        <th scope="col">Đối tượng</th>
        <th scope="col">Thời gian</th>
        <th scope="col">Lý do</th>
        <th scope="col">Tham chiếu</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Ghi chú</th>
        <th scope="col">Thay đổi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">PT00014</td>
        <td scope="col">longtalong</td>
        <td class="text-center" scope="col">26/12/2020</td>
        <td scope="col">Cước tàu</td>
        <td class="text-center" scope="col">TK 454</td>
        <td scope="col">Đã duyệt</td>
        <td scope="col"></td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editOutcomeModal"><i class="fas fa-pencil-alt"></i></button>
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

<!---- Add Outcome Modal ---->
<div class="modal fade" id="addOutcomeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Thêm phiếu mới</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Số phiếu</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Đối tượng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Thời gian</label>
            <div class="col-sm-9">
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Số tiền</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Lý do</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Tham chiếu</label>
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
            <label class="col-sm-3 col-form-label text-end">Ghi chú</label>
            <div class="col-sm-9">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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

<!---- Edit Outcome Modal ---->
<div class="modal fade" id="editOutcomeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin tài khoản</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Số phiếu</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Đối tượng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Thời gian</label>
            <div class="col-sm-9">
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Số tiền</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Lý do</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Tham chiếu</label>
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
            <label class="col-sm-3 col-form-label text-end">Ghi chú</label>
            <div class="col-sm-9">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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