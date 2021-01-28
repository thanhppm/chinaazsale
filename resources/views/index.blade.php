@extends('layouts.app')

@section('title', 'Dashboad')

@section('content')

@include('partials.nav')
{{-- @include('extend_templates.notification.warning') --}}
@if(\Session::has('warning'))
<div class="alert alert-warning">
    <strong>Cảnh báo !</strong>{{\Session::get('warning')}}
  </div>
@endif
<h1>DASHBOARD</h1>


@endsection