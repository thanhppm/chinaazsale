@extends('layouts.app')

@section('title', 'Login')

<div class="text-center custom-sign-in">
  <form class="form-signin">
    <h1 class="mb-3 font-weight-normal">ChinaAZ Admin</h1>
    <h5 class="mb-3 font-weight-normal">Phục hồi mật khẩu</h5>
    <label for="inputUserName" class="visually-hidden">Tài khoản</label>
    <input type="text" id="inputUserName" class="form-control mb-2" placeholder="Tên tài khoản">
    <label for="inputRecoverPassword" class="visually-hidden">Mật khẩu mới</label>
    <input type="password" id="inputRecoverPassword" class="form-control mb-2" placeholder="Mật khẩu mới" required data-toggle="password">
    <label for="inputPasswordAgain" class="visually-hidden">Nhập lại mật khẩu</label>
    <input type="password" id="inputPasswordAgain" class="form-control mb-2" placeholder="Nhập lại mật khẩu" required data-toggle="password">
    <button class="btn btn-md btn-success btn-block mt-4" type="submit">Gửi</button>
  </form>
</div>