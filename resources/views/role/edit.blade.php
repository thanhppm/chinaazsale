@extends('layouts.app')
@section('title', 'Chỉnh sửa vai trò')
@section('content')
    

 <h5 class="" style="text-align:center">Chỉnh sửa vai trò</h5>
            <div class="container">
                <div class="row">
                <form action="" class="col-md-4" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên vai trò</label>
                        
                            <input type="text" class="form-control" name="name" value="{{$role->name}}">
                        
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Đặc tả</label>
                       
                            <input type="text" class="form-control" name="description" value="{{$role->description}}">
                        
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="">Chức vụ</label>
                        <div class="col-sm-9">
                              
                        </div>
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        
                        <input type="password" class="form-control" name="password">      
                        
                    </div> --}}
                    <label for="">Phân quyền</label>
                    @foreach ($permissions as $pms)
                    <div class="mb-3 form-check">
                        <input 
                            {{$getallpermission->contains($pms->id) ? 'checked' : ''}}
                        type="checkbox" class="form-check-input"  name="permission[]" value="{{$pms->id}}">
                        <label class="form-check-label" for="exampleCheck1">{{$pms->description}}</label>
                    </div>
                    @endforeach
                    <hr>
                    <button type="submit" class="btn btn-success text-light" >Save</button>
                {{-- <button type="button"  class="btn" style="background-color: burlywood;">Close</button> --}}
                </form>
            </div>
            </div>
            
                
  
                
               
            
         
        

{{-- script ajax --}}

@endsection