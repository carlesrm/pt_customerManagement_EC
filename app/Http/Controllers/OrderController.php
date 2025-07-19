<?php

namespace App\Http\Controllers;

abstract class OrderController extends Controller
{
    public function customers()
    {
        return view('customers');
    }
}
