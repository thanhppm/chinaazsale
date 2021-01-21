@extends('layouts.app')

@section('title', 'Login')

<div class="text-center custom-sign-in">
  <form class="form-signin">
    <h1 class="mb-3 font-weight-normal">ChinaAZ Admin</h1>
    <h5 class="mb-3 font-weight-normal">Quên mật khẩu</h5>
    <label for="inputPhoneNumber" class="visually-hidden">Số điện thoại</label>
    <input type="text" id="inputPhoneNumber" class="form-control mb-2" placeholder="Số điện thoại" required>
    <label for="inputEmail" class="visually-hidden">Email</label>
    <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email" required>
    <button class="btn btn-md btn-success btn-block mt-4" type="submit">Gửi</button>
  </form>
</div>