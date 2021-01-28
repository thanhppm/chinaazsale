@extends('layouts.app')

@section('title', 'Quản lí User')

@section('content')

    @include('partials.nav')

    {{-- search --}}
    <div class="navbar control-bar">
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary me-3" type="submit"><i class="fas fa-search"></i></button>
                <button class="btn btn-outline-success">Xóa</button>
               
            </form>
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <strong>Chúc mừng !</strong>{{\Session::get('success')}}
                </div>
            @endif
            <a type="button" class="btn btn-outline-success"  href="{{ route('user.add') }}">Thêm tài
                khoản <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>

    <!---- Table ---->
    {{-- @include('extend_templates.notification.success') --}}
    <div class="container-fluid">
        <table class="table table-striped table-bordered align-middle">
            <thead>
                <tr class="text-center">
                    <th scope="col">STT</th>
                    <th scope="col">Tên đăng nhập</th>
                    <th scope="col">Tên nhân viên</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Vai trò</th>
                    <th scope="col">Thay đổi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cats as $key => $cat)
                    
                    <tr>
                        <th class="text-center" scope="col">{{ $cat->id }}</th>
                        <td scope="col">{{ $cat->name }}</td>
                        <td scope="col">{{ $cat->username }}</td>
                        <td class="text-center" scope="col">{{ $cat->phone }}</td>
                        <td scope="col">{{ $cat->email }}</td>
                        <td class="text-center" scope="col">Admin</td>
                        <td class="text-center" scope="col">
                            <div class="btn-group btn-group-sm" role="group">
                                <a type="button" class="btn btn-outline-primary" href="{{ route('user.edit',['id'=>$cat->id]) }}">
                                    <i class="fas fa-pencil-alt"></i></a>
                                </button>
                                <a class="btn btn-outline-primary" href="{{ route('user.delete',['id'=>$cat->id]) }}"><i
                                        class="fas fa-times"></i></a>
                                {{-- <button type="button" class="btn btn-outline-primary"><i
                                        class="fas fa-times"></i></button> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- pagination --}}
    <div class="d-flex justify-content-center custom-pagination">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Lùi lại</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Tiếp theo</a></li>
            </ul>
        </nav>
    </div>
    <!---- Add Modal ---->
    {{-- @include('extend_templates.admin.user.form.add_edit') --}}

    {{-- script --}}
    {{-- @include('extend_templates.elements.script') --}}
    <script type="text/javascript">
        $("div.alert").delay(3000).slideUp();//đóng thông báo
    </script>
@endsection
