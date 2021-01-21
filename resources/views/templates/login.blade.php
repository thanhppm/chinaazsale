@extends('layouts.app')

@section('title', 'Login')

<div class="text-center custom-sign-in">
  <form class="form-signin" method="POST">
    @csrf
    <h1 class="mb-3 font-weight-normal">Chinaazsale Admin</h1>
    <label for="inputUserName" class="visually-hidden">Email đăng nhập</label>
    <input type="email" name="email" class="form-control mb-2" placeholder="Email đăng nhập" required>
    <label for="inputPassword" class="visually-hidden">Mật khẩu</label>
    <input type="password" name="password" class="form-control mb-2" placeholder="Mật khẩu" required data-toggle="password">
    <div>
      <a href="#">Bạn quên mật khẩu?</a>
    </div>
    {{-- <p class="mt-2" style="color: red; visibility: visible;">Sai tên đăng nhập hoặc mật khẩu</p> --}}
    {{-- hiển thị thông báo lỗi khi đăng nhập --}}
    <div>
      @if (count($errors) >0)
        <div class="alert alert-warning">
                @foreach($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
        </div>
        @endif

        @if (session('notification'))
        <div class="alert alert-warning">
             {{ session('notification') }}
        </div>
        @endif

    </div>
    <button class="btn btn-md btn-success btn-block mt-4" type="submit">Đăng nhập</button>
  </form>
</div>