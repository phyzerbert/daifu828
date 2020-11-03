<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        config(['site.page' => 'home']);
        config(['site.menu' => 'order']);
        return view('order.index');
    }

    public function create(Request $request) {
        config(['site.page' => 'alipay']);
        return view('order.create');
    }
}
