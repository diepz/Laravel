<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function index()
    {


        $customers = Customer::paginate(5);
        return view('customer.list', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $customers = new Customer();
        $customers->name = $request->input('name');
        $customers->email = $request->input('email');
        $customers->addres = $request->input('addres');
        $customers->phone = $request->input('phone');

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = $request->image;
                $clientName = $image->getClientOriginalName();
                $path = $image->move(public_path('images/'), $clientName);
                $customers->image = $clientName;
            }
        }


//        $customers->image = json_encode($data);
        $customers->save();

        return redirect()->route('customer.index')->with('success', 'Your images has been successfulyy');
    }

    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        return view('customer.edit', compact('customers'));
    }

    public function update(Request $request, $id)
    {
        $customers = Customer::findOrFail($id);
        $customers->name = $request->input('name');
        $customers->email = $request->input('email');
        $customers->addres = $request->input('addres');
        $customers->phone = $request->input('phone');
        $customers->image = $request->input('image');
        $customers->save();

        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        $customers = Customer::findOrFail($id);
        $customers->delete();
        return redirect()->route('customer.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $customers = Customer::where('name', 'LIKE', '%' . $keyword . '%')
            ->orwhere('email', 'like', '%' . $keyword . '%')
            ->orwhere('addres', 'like', '%' . $keyword . '%')
            ->orwhere('phone', 'like', '%' . $keyword . '%')
            ->get();

        return view('customer.list', compact('customers'));
    }

    public function show($id)
    {
        $customers = Customer::findOrfail($id);
        return view('customer.show', compact('customers'));

    }

    public function CustomerController($language)
    {
        \Session::put('website_language', $language);
        return redirect()->route('customer.index');

    }

}
