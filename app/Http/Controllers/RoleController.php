<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    private $role;
    public function __construct(Role $role,Permission $permission)
    {
        $this->role=$role;
        $this->permission=$permission;
    }

    //list all role
    public function index()
    {
        $listrole=$this->role->all();
        return view('role.index',compact('listrole'));
    }

    public function add()
    {
        
        $permissions=$this->permission->all();
        return view('role.add',compact('permissions'));
    } 
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            //đổ dữ liệu vào DB
        $role_create=$this->role->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        //đổ dữ liệu vào bảng trung gian role_user

        // $roles=$request->roles;
        // foreach ($roles as $roleId) {
        //     DB::table('role_user')->insert([
        //         'user_id' => $user_create->id,
        //         'role_id' => $roleId,
        //     ]);
        // }
        $role_create->permissions()->attach($request->permission);//->roles():gọi phương thức roles() trong model User
        DB::commit();
        return redirect()->route('role.index')->with('success','Thêm vai trò thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
        
    } 

    public function edit($id){
        $permissions=$this->permission->all();
        $role=$this->role->findOrFail($id);
        $getallpermission=DB::table('role_permission')->where('role_id',$id)->pluck('permission_id');
        return view('role.edit',compact('permissions','role','getallpermission'));
    }
    
    public function update(Request $request,$id)
    {
        try {
            DB::beginTransaction();
        //cập nhật bảng role
            $this->role->where('id',$id)->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
            

        //cập nhật bảng role_permission
        DB::table('role_permission')->where('role_id',$id)->delete();
        $role_update=$this->role->find($id);
        $role_update->permissions()->attach($request->permission);
        DB::commit();
        return redirect()->route('role.index')->with('success','sửa vai trò thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
        
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            //xóa role
            $role=$this->role->find($id);
            $role->delete($id);
            //xóa quyền của role trong bảng role_permisison
            $role->permissions()->detach();//detach nguwocjj lại với attach,nó sẽ xóa đi tất cả bản ghi thuộc user này
            DB::commit();
            return redirect()->route('role.index')->with('success','Xóa vai trò thành công');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

}
