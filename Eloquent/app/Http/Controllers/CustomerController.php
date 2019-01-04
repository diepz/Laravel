<?php

namespace App\Http\Controllers;

use App\Customer;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.light', compact('customers'));
    }

    public function store(Request $request)
    {
        $customers = new Customer();
        $customers->name = $request->input('name');
        $customers->email = $request->input('email');
        $customers->dob = $request->input('dob');
        $customers->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');

    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
    }

    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
    }
}
