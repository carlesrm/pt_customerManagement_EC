<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders(Request $request)
    {
        $orders_detailed = Order::with('customer')->get();

        return view('orders.index', ['orders' => $orders_detailed]);
    }

    public function order(Request $request, $order_id)
    {
        $order = Order::findOrFail($order_id);
        $order_detailed = $order->with('customer')->first();

        return view('orders.show-order', ['order' => $order_detailed]);
    }

    public function addOrder(Request $request)
    {
        return view('orders.add');
    }

    public function addOrderPost(Request $request)
    {
        $validated = $request->validate([
            'customer_email' => 'required|email',
            'delivery_date' => 'required|date',
            'comment' => 'string|nullable',
        ]);

        $customer = Customer::where('email', $validated['customer_email'])->firstOrFail();

        $order = Order::createOrder($customer['id'], $validated['delivery_date'], $validated['comment']);

        return redirect(route('orders.index'));
    }

    public function updateOrder(Request $request, $order_id)
    {
        $order = Order::findOrFail($order_id);
        $order_detailed = $order->with('customer')->first();

        return view('orders.update', ['order' => $order_detailed]);
    }

    public function updateOrderPost(Request $request, $order_id)
    {
        $validated = $request->validate([
            'delivery_date' => 'required|date',
            'comment' => 'string|nullable',
        ]);

        $order = Order::findOrFail($order_id);
        $order->update($validated);

        return redirect(route('orders.index'));
    }

    public function deleteOrder(Request $request, $order_id)
    {
        Order::destroy($order_id);

        return redirect(route('orders.index'));
    }
}
