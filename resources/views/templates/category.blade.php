@extends('layouts.app')

@section('title', 'Category')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid  justify-content-end">
    <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#addItemModal">Thêm mặt hàng <i class="fas fa-plus-circle"></i></button>
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addPriceModal">Tạo bảng giá <i class="fas fa-plus-circle"></i></button>
  </div>
</div>
<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center align-middle">
        <th scope="col" rowspan="2">#</th>
        <th scope="col" rowspan="2">Kho</th>
        <th scope="col" rowspan="2">Loại mặt hàng</th>
        <th scope="col" rowspan="2">Giá theo KG</th>
        <th scope="col" rowspan="2">Giá theo m3</th>
        <th scope="col" colspan="2">Áp dụng cho khách hàng</th>
      </tr>
      <tr class="text-center">
        <th scope="col">Mã KH</th>
        <th scope="col">SĐT</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">Tiểu ngạch</td>
        <td scope="col">Quần áo</td>
        <td scope="col">0123554566</td>
        <td scope="col">admin</td>
        <td scope="col"></td>
        <td scope="col"></td>
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

<!---- Add Item Modal ---->
<div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Thêm mặt hàng mới</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Giá mặt hàng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Giá theo KG</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Giá theo m3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Loại kho</label>
            <div class="col-sm-9">
              <select class="form-select">
                <option value="" disabled selected>Loại kho</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
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

<!---- Add Price Modal ---->
<div class="modal fade" id="addPriceModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Tạo bảng giá mới cho KH</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Mã KH</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Tên khách hàng</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Mặt hàng</label>
            <div class="col-sm-9">
              <select class="form-select">
                <option value="" disabled selected>Loại hàng</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Giá theo m3</label>
            <div class="col-sm-9">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Giá theo kg</label>
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
@endsection