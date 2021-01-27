@extends('layouts.app')

@section('title', 'Reason')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid  justify-content-end">
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#addReasonModal">Thêm lý do <i class="fas fa-plus-circle"></i></button>
  </div>
</div>
<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center align-middle">
        <th scope="col">#</th>
        <th scope="col">Lý do chi</th>
        <th scope="col">Tham phiếu (chi phí)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col">Vé tàu</td>
        <td scope="col">Tk454</td>
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

<!---- Add Reason Modal ---->
<div class="modal fade" id="addReasonModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content custom-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Thêm lý do mới</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label text-end">Lý do chi</label>
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