<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

use Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        config(['site.page' => 'home']);
        config(['site.menu' => 'order']);
        $keyword = '';
        $mod = new Order();
        $mod = $mod->where('user_id', Auth::id());
        $data = $mod->orderBy('created_at', 'desc')->get();
        return view('order.index', compact('data', 'keyword'));        
    }

    public function create(Request $request) {
        config(['site.page' => 'alipay']);
        return view('order.create');
    }

    public function store(Request $request) {

        $item = new Order();
        $item->user_id = Auth::id();
        $item->price = $request->get('price');
        $item->quantity = $request->get('quantity');
        $item->currency_id = $request->get('currency_id');
        $item->purchase_account = $request->get('purchase_account');
        $item->remark = $request->get('remark');
        $item->status = 0;
        $item->save();

        return back()->with('success', 'Submitted succesfully');
    }

    public function destroy($id) {
        Order::destory($id);
        return back()->with('success', 'Deleted Successfully');
    }
}
