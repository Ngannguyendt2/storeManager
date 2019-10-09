<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\Http\Requests\CreateBillRequest;
use App\Product;
use Illuminate\Http\Request;

class BillController extends Controller
{
    //
    private $bill;
    private $customer;
    private $product;

    public function __construct(Bill $bill, Customer $customer, Product $product)
    {
        $this->bill = $bill;
        $this->customer = $customer;
        $this->product = $product;
    }

    public function index()
    {
        $bills = $this->bill::all();
        return view('bills.list', compact('bills'));
    }

    public function product($id)
    {
        $bill = Bill::find($id);
        return view('bills.product', compact('bill'));
    }

    public function create()
    {
        $customers = $this->customer::all();
        $products = $this->product::all();
        return view('bills.create', compact('customers', 'products'));
    }

    public function insert(CreateBillRequest $request)
    {
        $bill = new Bill;
        $bill->customer_id = $request->customer_id;
        $bill->total = $this->total($request->check_list);
        $bill->date = $request->date;
        $bill->save();
        $bill->products()->attach($request->check_list);
        return redirect()->route('bills.index');
    }

    protected function total($arr)
    {
        $sum = 0;

        foreach ($arr as $value) {
            $product = $this->product::find($value);

            $sum = $sum + $product->price;
        }
        return $sum;
    }

    public function destroy($id)
    {
        $bill = Bill::find($id);
        $bill->products()->detach();
        $bill->delete();
        return redirect()->route('bills.index');
    }
}
