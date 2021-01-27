@extends('layouts.app')

@section('title', 'China Warehouse')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid  justify-content-end">
    <button type="button" class="btn btn-outline-success me-2">Import <i class="fas fa-inbox"></i></button>
    <button type="button" class="btn btn-outline-success me-2">Xuất file <i class="fas fa-inbox"></i></button>

    <div class="dropdown me-2">
      <button class="btn btn-outline-success" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Tạo cont <i class="fas fa-plus-circle"></i>
      </button>
      <form class="dropdown-menu dropdown-menu-end p-4 custom-dropdown">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="cont" class="col-form-label">Số cont</label>
          </div>
          <div class="col-9">
            <input type="text" id="cont" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-success">Tạo cont</button>
      </form>
    </div>
    <div class="dropdown">
      <a class="btn btn-outline-success me-2 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        Chuyển trạng thái
      </a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
        <li><input type="search" placeholder="Tìm kiếm"></li>
        <li><a class="dropdown-item" href="#">Cont 1</a></li>
        <li><a class="dropdown-item" href="#">Cont 2</a></li>
        <li><a class="dropdown-item" href="#">Cont 3</a></li>
        <li><a class="dropdown-item" href="#">Cont 4</a></li>
        <li><a class="dropdown-item" href="china-warehouse-manage-cont">Quản lý cont</a></li>
      </ul>
    </div>
  </div>
</div>

<!---- Table ---->

<div class="container-fluid">
  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center align-middle">
        <th scope="col">
          Gom theo KH (Mã KH)
          <div><input type="search" placeholder="Tìm kiếm"></div>
        </th>
        <th scope="col">
          <div class="row">
            <div class="col-6">
              <div class="row">
                <div class="col-6 text-start d-flex flex-column justify-content-center">
                  <div>Ngày tàu chạy dự kiến:</div>
                  <div>Ngày về dự kiến:</div>
                </div>
                <div class="col-6 text-start d-flex flex-column justify-content-center">
                  <div><input type="date"></div>
                  <div><input type="date"></div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row">
                <div class="col-3 d-flex align-items-center">
                  <div><button class="btn btn-outline-success">Lưu</button></div>
                </div>
                <div class="col-3 d-flex align-items-center text-end justify-content-end">
                  Luồng:
                </div>
                <div class="col-3 text-end d-flex align-items-end flex-column">
                  <div class="mb-2"><label for="red">Đỏ</label></div>
                  <div class="mb-2"><label for="yellow">Vàng</label></div>
                </div>
                <div class="col-3 text-start d-flex align-items-center justify-content-center flex-column">
                  <div class="mt-1 mb-2"><input type="checkbox" name="red" id="red" value="red"></div>
                  <div class="mt-2 mb-2"><input type="checkbox" name="yellow" id="yellow" value="yellow"></div>
                </div>
              </div>
            </div>
          </div>
        </th>
        <th scope="col">Tổng m3</th>
        <th scope="col">Tổng KG</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="col">Tất cả</th>
        <td scope="col"></td>
        <td scope="col">2000000000</td>
        <td scope="col">2000000000</td>
      </tr>
    </tbody>
  </table>

  <table class="table table-striped table-bordered align-middle">
    <thead>
      <tr class="text-center align-middle">
        <th scope="col" rowspan="2">Chọn</th>
        <th scope="col" rowspan="2">
          Ngày nhập HT VC : (TN/NC)
          <div class="mt-2"><button class="btn btn-outline-success btn-sm">Tờ khai</button></div>
        </th>
        <th scope="col" rowspan="2">Mã KH</th>
        <th scope="col" rowspan="2">Mã vận đơn</th>
        <th scope="col" rowspan="2">Ảnh hàng</th>
        <th scope="col" rowspan="2">Loại hàng</th>
        <th scope="col" rowspan="2">SL kiện</th>
        <th scope="col" colspan="3">Kích thước</th>
        <th scope="col" rowspan="2">M3/kiện</th>
        <th scope="col" rowspan="2">Tổng m3</th>
        <th scope="col" rowspan="2">Kg/kiện</th>
        <th scope="col" rowspan="2">Tổng Kg</th>
        <th scope="col" rowspan="2">Chuyển trạng thái</th>
        <th scope="col" rowspan="2">Thay đổi</th>
      </tr>
      <tr class="text-center">
        <th scope="col">D</th>
        <th scope="col">R</th>
        <th scope="col">C</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="text-center" scope="col">
          <div>
            <input class="form-check-input" type="checkbox" id="" value="">
          </div>
        </th>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td class="text-center" scope="col">
          <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#pictureModal">Picture</button>
        </td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td scope="col"></td>
        <td class="text-center" scope="col">
          <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#changeLogModal">Chi tiết</button>
        </td>
        <td class="text-center" scope="col">
          <div class="btn-group btn-group-sm" role="group">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editOrderModal"><i class="fas fa-pencil-alt"></i></button>
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

<!---- Picture Modal ---->
<div class="modal fade" id="pictureModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body image-modal">
        <img src="https://baokhanhhoa.vn/dataimages/202003/original/images5397877_Matuy.jpg" alt="none">
        <img src="https://baokhanhhoa.vn/dataimages/201906/original/images5365858_MT2.jpg" alt="none">
      </div>
    </div>
  </div>
</div>

<!---- Change Log Modal ---->
<div class="modal fade" id="changeLogModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Lịch sử chỉnh sửa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Tài khoản</th>
              <th scope="col">Thời gian</th>
              <th scope="col">Mục chỉnh sửa</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>longlong89</td>
              <td>12h30 - 30 / 09 / 2020</td>
              <td>Tổng m3 , tổng Kg ...</td>
            </tr>
            <tr>
              <td>none</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>none</td>
              <td></td>
              <td></td>
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
</div>

<!---- Add Order Modal ---->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content custom-modal customer-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Tạo đơn hàng mới</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ngày nhập</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control">
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
                <label class="col-sm-3 col-form-label ">Mã KH</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Loại hàng</label>
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
                <label class="col-sm-3 col-form-label ">Mã vận đơn</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Số lượng kiện</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kích thước</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="D:">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="R:">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="C:">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">m3/Kiện</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Kg</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ghi chú</label>
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
<div class="modal fade" id="editOrderModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content custom-modal customer-modal">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa đơn hàng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ngày nhập</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control">
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
                <label class="col-sm-3 col-form-label ">Mã KH</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Loại hàng</label>
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
                <label class="col-sm-3 col-form-label ">Mã vận đơn</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Số lượng kiện</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Kích thước</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="D:">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="R:">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" placeholder="C:">
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">m3/Kiện</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Kg</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label ">Ghi chú</label>
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