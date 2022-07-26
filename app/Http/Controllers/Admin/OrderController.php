<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

use App\Models\product;
use App\Models\category;
use App\Models\order;
use App\Models\cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'order' => order::where('deleted_at', null)->get(),
        );
        return view('Admin.order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = order::findorfail($id);
        $cart = cart::where('order_id', $id)->get();
        $productlist = array();
        foreach ($cart as $carts) {
            $value = product::where('id', $carts->product_id)->first();
            if ($value) {
                $carts->name = $value->name;
                $carts->price = $value->price;
                $carts->image = $value->image;
                array_push($productlist, $carts);
            }
        }
        $data = array(
            'product' => $productlist,
            'order' => $order,
        );
        return view('Admin.order.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orders = order::findorfail($id);
        if ($request->value == 4) {
            $orders->payment_status = 2;
            $orders->order_status = 4;
        } else {
            $orders->order_status = $request->value;
        }
        $orders->save();
        return redirect()->route('order.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        order::where('id', $id)->update([
            'deleted_at' => now(),
        ]);
        return redirect()->route('order.index');
    }

    public function prnpriview($id, Request $request)
    {
        $order = order::findorfail($id);
        $orderdate = date('h:i:s A m/d/Y', strtotime($order->created_at));
        $cart = cart::where('order_id', $id)->get();
        $subtotal = 0;
        $productlist = array();
        foreach ($cart as $cartsingle) {
            $shop = Product::where('id', $cartsingle->product_id)->first();
            if ($shop) {
                $cartsingle->name = $shop->name;
                $cartsingle->image = $shop->image;
                $price = $cartsingle->price = $shop->price;
                $quantity = $cartsingle->quantity = $cartsingle->quantity;;
                $total = $cartsingle->total = ($price * $quantity);
                array_push($productlist, $cartsingle);
                $subtotal = $subtotal + $total;
            }
        }
        $data = array(
            'id' => $id,
            'product' => $productlist,
            'orderdate' => $orderdate,
            'order' => $order,
            'subtotal' => $subtotal,
        );

        return view('Admin.order.print', $data);
    }

    public function decline(Request $request, $id)
    {
        $orders = order::findorfail($id);
        if ($orders) {
            $orders->order_status = 5;
            $orders->reason = $request->reason;
            $orders->save();
        }
        return redirect()->route('order.index')->with(['warning' => 'Your order was Cancelled!']);
    }
}
