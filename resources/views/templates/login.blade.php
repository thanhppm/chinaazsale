@extends('layouts.app')

@section('title', 'Login')
@section('content')
    

<div class="text-center custom-sign-in">
  <form method="POST" action="login" accept-charset="UTF-8" class="form-signin">
    @csrf
    {{-- <input name="_token" type="hidden" value="lNVGnUCkD6Q5b1FBFPewKUVQVTavnb9fA3pQEkNC"> --}}
    <h1 class="mb-3 font-weight-normal">Chinaazsale Admin</h1>
    <label for="email" class="visually-hidden">Tên đăng nhập</label>
    <input class="form-control mb-2" required="" autofocus="" placeholder="Tên đăng nhập" name="email" type="email" value="">
    <label for="password" class="visually-hidden">Mật khẩu</label>
    <input class="form-control mb-2" required="" placeholder="Password" name="password" type="password" value="">
    <input name="task" type="hidden" value="login">
    {{-- <p>
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sampleAccount" aria-expanded="false" aria-controls="sampleAccount">
        Tài khoản mẫu
      </button>
    </p> --}}
    {{-- <div class="collapse" id="sampleAccount">
      <div class="card card-body">
        Tài khoản Admin: <span onclick="autoFill(0)" class="badge bg-warning">email: <code>admin@chinaaz.com</code> password: <code>123</code></span>
        Tài khoản Kế toán: <span onclick="autoFill(1)" class="badge bg-warning">email: <code>accountant@chinaaz.com</code> password: <code>123</code></span>
        Tài khoản Kho vận: <span onclick="autoFill(2)" class="badge bg-warning">email: <code>warehouse@chinaaz.com</code> password: <code>123</code></span>
        Tài khoản Kho TQ: <span onclick="autoFill(3)" class="badge bg-warning">email: <code>china-warehouse@chinaaz.com</code> password: <code>123</code></span>
        Tài khoản NVKD: <span onclick="autoFill(4)" class="badge bg-warning">email: <code>sale@chinaaz.com</code> password: <code>123</code></span>
        Tài khoản Kế toán trưởng: <span onclick="autoFill(5)" class="badge bg-warning">email: <code>chief-accountant@chinaaz.com</code> password: <code>123</code></span>
        Tài khoản Quản lý: <span onclick="autoFill(6)" class="badge bg-warning">email: <code>manager@chinaaz.com</code> password: <code>123</code></span>
      </div>
    </div> --}}
    <button type="submit" class="btn btn-md btn-success btn-block mt-4">Đăng nhập</button>
  </form>
</div>

{{-- <script>
  function autoFill(n) {
    var email = document.getElementsByTagName("span")[n].getElementsByTagName("code")[0].innerHTML;
    var password = document.getElementsByTagName("span")[n].getElementsByTagName("code")[1].innerHTML;
    document.getElementById("email").value = email;
    document.getElementById("password").value = password;
    return;
  }
</script> --}}
@endsection