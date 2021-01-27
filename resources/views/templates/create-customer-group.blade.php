@extends('layouts.app')

@section('title', 'Customer')

@section('content')

@include('partials.nav')

<!-- Set event onlick vào "Tạo nhóm KH" để redirect với view này -->

<div class="container-fluid">
  <form class="d-flex">
    <input class="form-control" type="text" placeholder="Tên nhóm khách hàng" style="width: 30% !important;">
    <button class="btn btn-outline-success">Tạo</button>
  </form>
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
          <div>
            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="">
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

@endsection