<?php

namespace App\Http\Controllers;

use App\Models\Actions;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class CustomersController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:العملاء', ['only' => ['index']]);
        $this->middleware('permission:اضافة عميل', ['only' => ['create','store']]);
    }


    public function index()
    {
        $customers = Customers::all();
        return view('customers.show_customers',compact('customers')) ;
    }

    
    public function create()
    {
        $employees = User::all();
        $actions = Actions::all();
        return view('customers.Add_customers',compact('employees','actions'))  ; 
    }

    public function store(Request $request)
    {
        Customers::create
            (
                [
                    'customer_name' => $request->name,
                    'email' => $request->email,
                    'action_id' => $request->action_id,
                    'employee_id' => $request->employee_id,
                ]
            );

            session()->flash('Add', 'تم اضافة العميل بنجاح ');
            return redirect('csts');
    }

    
    public function show(Customers $customers)
    {
        //
    }

    
    public function edit(Customers $customers)
    {
        //
    }

    
    public function update(Request $request, Customers $customers)
    {
        //
    }


     
    public function destroy(Customers $customers)
    {
        //
    }
}
