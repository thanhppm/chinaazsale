<nav class="navbar navbar-expand-lg custom-nav">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
        </li>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-bars"></i> Danh mục
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('user.index') }}">Tài khoản User</a></li>
            <li><a class="dropdown-item" href="{{ route('role.index')}}">Vai trò</a></li>
            <li><a class="dropdown-item" href="{{ route('customer') }}">Khách hàng</a></li>
            <li><a class="dropdown-item" href="{{ route('category') }}">Bảng giá loại hàng</a></li>
            <li><a class="dropdown-item" href="{{ route('account') }}">Tài khoản</a></li>
            <li><a class="dropdown-item" href="{{ route('form') }}">Biểu mẫu</a></li>
            <li><a class="dropdown-item" href="{{ route('reason') }}">Lý do chi</a></li>
            <li><a class="dropdown-item" href="{{ route('fee') }}">Chi phí</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-warehouse"></i> Kho vận
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('china-warehouse')}}">Kho TQ</a></li>
            <li><a class="dropdown-item" href="{{ route('hanoi-warehouse')}}">Kho Hà Nội</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-money-bill"></i> Thu chi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="income">Thu</a></li>
            <li><a class="dropdown-item" href="outcome">Chi</a></li>
            <li><a class="dropdown-item" href="payment-detail">Sổ chi tiết</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dunno"><i class="fas fa-coins"></i> Chi phí</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <i class="fas fa-book-open"></i> Báo cáo
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/revenue">Doanh thu</a></li>
            <li><a class="dropdown-item" href="/warehouse">Kho vận</a></li>
            <li><a class="dropdown-item" href="/fund">Quỹ tiền</a></li>
            <li><a class="dropdown-item" href="/cost">Chi phí</a></li>
            <li><a class="dropdown-item" href="/profit">Lợi nhuận</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/statistic"><i class="fas fa-clipboard-list"></i> Thống kê</a>
        </li>
      </ul>
      <div class="" style="position: absolute;right: 5%; padding: 0px;display: flex; align-items: center; color:white" >

        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white" href="#">
            <i class="fa fa-user-circle" aria-hidden="true" style="padding: 5px;"></i>
            {{ Auth::user()->name}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            {{-- <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal" data-id="6"> --}}

            {{-- <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addModal" data-id="{{Auth::user()->id}}" href="#">
                <i class="fa fa-id-card-alt" aria-hidden="true" style="padding: 5px;" ></i>Thông tin</a>
            </li> --}}

            <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt" aria-hidden="true" style="padding: 5px;"></i>Đăng xuất</a></li>
          </ul>
    </div>
    </div>
  </div>
</nav>
