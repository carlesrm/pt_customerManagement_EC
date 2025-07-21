<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customers(Request $request)
    {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }

    public function customer(Request $request, $customer_id)
    {
        $customer = Customer::findOrFail($customer_id);
        $customer_with_orders = $customer->with('orders')->get();

        return view('customers.show-customer', compact('customer_with_orders'));
    }

    public function addCustomer(Request $request)
    {
        return view('customers.add');
    }

    public function addCustomerPost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ]);

        $customer = Customer::createCustomer($validated['name'], $validated['address'], $validated['email']);

        return redirect(route('home'));
    }

    public function updateCustomer(Request $request, $customer_id)
    {
        $customer = Customer::findOrFail($customer_id);

        return view('customers.update', compact('customer'));
    }

    public function updateCustomerPost(Request $request, $customer_id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
        ]);

        $customer = Customer::findOrFail($customer_id);
        $customer->update($validated);

        return redirect(route('home'));
    }

    public function deleteCustomer(Request $request, $customer_id)
    {
        Customer::destroy($customer_id);

        return redirect(route('home'));
    }
}
