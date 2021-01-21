@extends('layouts.app')

@section('title', 'Register')
<style>
.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}</style>

<div class="container">
    <form class="form-signin" action="{!! route('post_register')!!}" method="POST">
        @csrf

        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <label for="name" class="sr-only">Name</label>
        <input type="text"  name="name" class="form-control" placeholder="Name" required autofocus>
        @if($errors->has('name'))
        {{$errors->first('name')}}
        @endif
        <br>
        <label for="email" class="sr-only">Email address</label>
        <input type="email"  name="email" class="form-control" placeholder="Email address" required autofocus>
        @if($errors->has('email'))
        {{$errors->first('email')}}
        @endif
        <br>
        <label for="password" class="sr-only">Password</label>
        <input type="password"  name="password" class="form-control" placeholder="Password" required>
        @if($errors->has('password'))
        {{$errors->first('password')}}
        @endif
        <br>
        <label for="password" class="sr-only">Confirm Password</label>
        <input type="password"  name="passwordAgain" class="form-control" placeholder="Confirm Password" required>
        @if($errors->has('passwordAgain'))
        {{$errors->first('passwordAgain')}}
        @endif
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
      </form>

</div>
