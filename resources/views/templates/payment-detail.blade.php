@extends('layouts.app')

@section('title', 'Payment Detail')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid">
    <form class="btn-group p-0 m-0 align-items-center">
      <input class="form-control me-2" type="date" placeholder="Từ ngày">
      <input class="form-control me-2" type="date" placeholder="Đến ngày">
      <button class="btn btn-outline-success text-nowrap" type="submit">Tìm kiếm</button>
    </form>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center">
        <th scope="col">#</th>
        <th scope="col">Ngày chứng từ</th>
        <th scope="col">Số phiếu chi</th>
        <th scope="col">Số tiền thu</th>
        <th scope="col">Số tiền chi</th>
        <th scope="col">Đối tượng nộp/nhận</th>
        <th scope="col">Kết thúc</th>
        <th scope="col">Trạng thái</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">1</th>
        <td scope="col"></td>
        <td scope="col">Bán hàng</td>
        <td scope="col">0</td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td class="text-center" scope="col">
          <div>
            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="">
          </div>
        </td>
        <td scope="col">Đã hoàn thành</td>
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