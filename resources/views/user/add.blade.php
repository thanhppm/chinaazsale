@extends('layouts.app')
@section('title', 'Thêm mới tài khoản')
@section('content')
@include('partials.nav')  

 <h5 class="" style="text-align:center">Tạo tài khoản mới</h5>
            <div class="container">
                <div class="row">
                <form action="" class="col-md-4" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên đăng nhập</label>
                        
                            <input type="text" class="form-control" name="name">
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Tên nhân viên</label>
                       
                            <input type="text" class="form-control" name="username">
                        
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        
                           <input type="email" class="form-control" name="email">
                       
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        
                          <input type="tel" class="form-control" name="phone">
                        
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="">Chức vụ</label>
                        <div class="col-sm-9">
                              
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        
                        <input type="password" class="form-control" name="password">      
                        
                    </div>
                    <div class="form-group">
                        <label for="">Chức vụ</label>
                        <select class="form-control" name="roles[]" multiple="multiple">

                            <option selected>default</option>
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{ $role->description}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-success text-light" >Save</button>
                {{-- <button type="button"  class="btn" style="background-color: burlywood;">Close</button> --}}
                </form>
            </div>
            </div>
            
                
  
                
               
            
         
        

{{-- script ajax --}}

@endsection