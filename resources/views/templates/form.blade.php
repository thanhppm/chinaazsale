@extends('layouts.app')

@section('title', 'Form')

@section('content')

@include('partials.nav')

<div class="navbar control-bar">
  <div class="container-fluid  justify-content-end">
    <button type="button" class="btn btn-outline-success me-2">Xuất file <i class="fas fa-inbox"></i></button>
    <div class="dropdown">
      <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Biểu mẫu
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>