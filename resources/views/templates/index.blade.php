@extends('layouts.app')

@section('title', 'Index')

@section('content')

<div class="custom-sign-in">
    <form class="text-center form-signin">
        <div class="mb-3">
            <label for="orderId" class="form-label visually-hidden">Mã đơn hàng</label>
            <input type="text" class="form-control" id="orderId" placeholder="Mã đơn hàng">
        </div>
        <button type="submit" class="btn btn-success">Tìm kiếm</button>
    </form>
    <button class="btn btn-success signin-btn"><a href="/login">Đăng nhập</a></button>
</div>


@endsection