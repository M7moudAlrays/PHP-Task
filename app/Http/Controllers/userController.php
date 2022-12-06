<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Hash;


class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:الموظفين', ['only' => ['index']]);
        $this->middleware('permission:اضافة موظف', ['only' => ['create','store']]);  
    }
    
    public function index(Request $request)
    {
        $data = User::orderBy('id','Asc')->paginate(5);
        return view('users.show_users',compact('data')) ;
    }
    
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.Add_user',compact('roles'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, 
        [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|same:confirm-password',
        'roles_name' => 'required'
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
        ->with('success','User created successfully');
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
    
    public function destroy(Request $request)
    {
       
    }
}