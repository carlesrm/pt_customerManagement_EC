<?php

namespace App\Http\Controllers;

abstract class CustomerController extends Controller
{
    public function customers()
    {
        return view('customers');
    }
}
