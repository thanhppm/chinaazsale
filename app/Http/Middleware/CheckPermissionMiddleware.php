<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Permission;
use Illuminate\Support\Facades\DB;

class CheckPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$permission=null)
    {
        //lấy tất cả các quyền khi user login vào hệ thống
        //1.lấy tất cả các roles của user login vào hệ thống
        $list_role_of_user = DB::table('users')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->where('users.id',auth()->id())
        ->select('roles.*')
        ->get()->pluck('id')->toArray();//join tất cả các bảng ,lấy ra các quyền của user đang đăng nhập vào hệ thống,lấy ra id của roles của người dùng
         //hàm toArray() chuyển object thành mảng 
         //2.lấy tất cả các quyền ki user login vào hệ thống
         $list_role_of_user = DB::table('roles')
        ->join('role_permission', 'roles.id', '=', 'role_permission.role_id')
        ->join('permissions', 'role_permission.permission_id', '=', 'permissions.id')
        ->whereIn('roles.id',$list_role_of_user)
        ->select('permissions.*')
        ->get()->pluck('id')->unique();

        // dd($list_role_of_user);
        //lấy ra màn hình tương ứng để check phân quyền
        $checkpms=Permission::where('name',$permission)->value('id');
        //kiểm tra xem user có được phép vào màn hình hay ko
        if($list_role_of_user->contains($checkpms))
        {
            return $next($request);
        }
        return redirect()->route('dashboard')->with('warning','Bạn không có quyền truy cập');   
    }
}