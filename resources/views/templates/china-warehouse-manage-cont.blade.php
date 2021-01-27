@extends('layouts.app')

@section('title', 'China Warehouse Manage Cont')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary me-3" type="submit"><i class="fas fa-search"></i></button>
      <button class="btn btn-outline-success">Xóa</button>
    </form>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Số cont</th>
        <th scope="col">Tổng m3</th>
        <th scope="col">Tổng kg</th>
        <th scope="col">Tổng số kiện</th>
        <th scope="col">Dự kiến ngày KH</th>
        <th scope="col">Dự kiến ngày về</th>
        <th scope="col">Thông tin</th>
        <th scope="col">Tình trạng</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col"></td>
        <td scope="col"></td>
        <td class="text-center" scope="col"></td>
        <td scope="col"></td>
        <td class="text-center" scope="col"></td>
        <td class="text-center" scope="col"></td>
        <td class="text-center" scope="col">
          <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#contDetailModal">Chi tiết</button>
        </td>
        <td class="text-center" scope="col">Đã xếp</td>
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

<!---- Cont Detail Modal ---->
<div class="modal fade" id="contDetailModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết cont hàng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-bordered align-middle">
          <thead>
            <tr class="text-center align-middle">
              <th scope="col" rowspan="2">Số cont</th>
              <th scope="col" rowspan="2">Tổng số kiện</th>
              <th scope="col" rowspan="2">Tổng m3</th>
              <th scope="col" rowspan="2">Tổng KG</th>
              <th scope="col" colspan="2">Thống kê hàng hóa</th>
            </tr>
            <tr class="text-center">
              <th scope="col">Loại hàng</th>
              <th scope="col">Số kiện</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="col">1</th>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
            </tr>
            <tr>
              <th scope="col">2</th>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
            </tr>
            <tr>
              <th scope="col">3</th>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
            </tr>
            <tr>
              <th scope="col">4</th>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
              <td scope="col"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Quay lại</button>
      </div>
    </div>
  </div>
</div>

@endsection