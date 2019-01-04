<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customes = Customer::all();
        return view('customer.list', compact('customes'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customes = new Customer();
        $customes->id_customer = $request->input('id_customer');
        $customes->name = $request->input('name');
        $customes->email = $request->input('email');
        $customes->addres = $request->input('addres');
        $customes->number = $request->input('number');
        $customes->save();

    }

    public function edit(Request $id)
    {
            $customers = Customer::findOrFail($id);
            return view('customer.edit', compact('customers'));
    }

    public function update(Request $request, $id)
    {
        $customes = Customer::findOrFail($id);
        $customes->id_customer = $request->input('id_customer');
        $customes->name = $request->input('name');
        $customes->email = $request->input('email');
        $customes->addres = $request->input('addres');
        $customes->number = $request->input('number');
        $customes->save();

        return redirect()->route('customer.index');

    }

    public function destroy(Request $id)
    {
        $customes = Customer::findOrFail($id);

        $customes->delete();
    }
}
