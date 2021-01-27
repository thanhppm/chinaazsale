@extends('layouts.app')

@section('title', 'Expense')

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
        <th scope="col">Thời gian</th>
        <th scope="col">Số chứng từ</th>
        <th scope="col">Chi phí lương</th>
        <th scope="col">Chi phí kho bãi</th>
        <th scope="col">Chi phí khác</th>
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