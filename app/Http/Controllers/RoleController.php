<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
class RoleController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:عرض الصلاحيات', ['only' => ['index']]);
        $this->middleware('permission:اضافة صلاحية', ['only' => ['create','store']]);
    }

    public function index(Request $request)
    {
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.show_roles',compact('roles'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $permission = Permission::get();
        return view('roles.create',compact('permission'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required|unique:roles,name',
        'permission' => 'required',
        ]);
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        return redirect()->route('roles.index')
        ->with('success','Role created successfully');
    }
    
    public function show($id)
    {
        
    }
   
    public function edit($id)
    {
        
    }
    
    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
       
    }
}