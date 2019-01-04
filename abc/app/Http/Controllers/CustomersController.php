<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {

        $customers = Customer::all();
        return view('customer.list', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customers = new Customer();
        $customers->id_khach_hang = $request->input('id_khach_hang');
        $customers->name = $request->input('name');
        $customers->addres = $request->input('addres');
        $customers->number = $request->input('number');
        $customers->save();
        return redirect()->route('customer.index');
    }

    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        return view('customer.edit' , compact('customers'));
    }

    public function update(Request $request, $id)
    {
            $customers = Customer::findOrFail($id);
            $customers->id_khach_hang = $request->input('id_khach_hang');
            $customers->name = $request->input('name');
            $customers->addres = $request->input('addres');
            $customers->number = $request->input('number');
            $customers->save();
            return redirect()->route('customer.index');
    }






}
