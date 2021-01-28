<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private $user;
    private $role;
    public function __construct(User $user,Role $role)
    {
        $this->user=$user;
        $this->role=$role;
    }

    

    public function index()
    {
        return view('user.index');
    }
    public function login()
    {
        return view('templates.login');
    }
    public function post_login(Request $request)
    {
            $this->validate($request,[
                'email'=> 'required',
                'password' => 'required'
            ],[
                'email.required' => 'bạn chưa nhập email',
                'password.required' => 'bạn chưa nhập mật khẩu'
            ]);
        
            if (Auth::attempt(['email'=>$request->email,'password'=>$request->password]) && Auth::check()) {
                //dd(Auth::user()->cant('route.name'));
                return redirect('admin/dashboard');
            } else {
                return redirect('login')->with('notification', 'Đăng nhập không hợp lệ! Bạn không có quyền truy cập.');
            }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function add()
    {
        
        $roles=$this->role->all();
        return view('user.add',compact('roles'));
    } 
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            //đổ dữ liệu vào DB
        $user_create=$this->user->create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' =>bcrypt($request->password),
            'status' => 1,
        ]);
        //đổ dữ liệu vào bảng trung gian role_user

        // $roles=$request->roles;
        // foreach ($roles as $roleId) {
        //     DB::table('role_user')->insert([
        //         'user_id' => $user_create->id,
        //         'role_id' => $roleId,
        //     ]);
        // }
        $user_create->roles()->attach($request->roles);//->roles():gọi phương thức roles() trong model User
        DB::commit();
        return redirect()->route('user.index')->with('success','Thêm tài khoản thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
        
    } 

    public function edit($id){
        $roles=$this->role->all();
        $user=$this->user->findOrFail($id);
       $list_role_of_user=DB::table('role_user')->where('user_id',$id)->pluck('role_id');//pluck lấy tất cả các giá trị của khóa đã cho
       
        return view('user.edit',compact('roles','user','list_role_of_user'));
    }
    
    public function update(Request $request,$id)
    {
        try {
            DB::beginTransaction();
        //cập nhật bảng user
        $this->user->where('id',$id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        //cập nhật bảng role_user
        DB::table('role_user')->where('user_id',$id)->delete();
        $user_update=$this->user->find($id);
        $user_update->roles()->attach($request->roles);
        DB::commit();
        return redirect()->route('user.index')->with('success','Sửa tài khoản thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
        
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            //xóa user
            $user=$this->user->find($id);
            $user->delete($id);
            //xóa vai trò của user
            $user->roles()->detach();//detach nguwocjj lại với attach,nó sẽ xóa đi tất cả bản ghi thuộc user này
            DB::commit();
            return redirect()->route('user.index')->with('success','Xóa tài khoản thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }
}
