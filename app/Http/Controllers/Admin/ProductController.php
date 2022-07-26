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

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'product' => product::where('deleted_at', null)->get(),
        );
        return view('Admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'category' => category::where('deleted_at', null)->get(),
        );
        return view('Admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'mainimage' => 'required'
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        } else {

            $id = "PSP" . rand(999, 9999999);
            $i = 0;

            if ($request->file('mainimage')) {
                $image = $request->file('mainimage');
                $extension = $request->file('mainimage')->extension();
                $image_src = '/image/product/' . $id . '.' . $extension;
                $imagepath = storage_path('app/public/image/product/');
                $image->move($imagepath, $image_src);
            }

            $request->merge(['slug' => Str::slug($request->name)]);
            $request->merge(['userid' => Auth::id()]);
            $request->merge(['image' => $image_src]);
            $request->merge(['price' => $request->price]);
            $request->merge(['status' => 1]);
            $product = product::create($request->all());
            return redirect()->route('product.index')->with(['success' => 'Product' . $request->name . 'was successfully added!']);
        }
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
        $product = product::findorfail($id);
        $data = array(
            'product' => product::findorfail($id),
            'category' => category::get(),
        );
        return view('Admin.product.edit', $data);
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
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        } else {
            $product = product::findorfail($id);

            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->quantity = $request->input('quantity');
            $product->price = $request->input('price');
            $product->category_id = $request->input('category_id');

            if ($request->mainimage) {
                $registerid = "PSP" . rand(999, 9999999);
                $image = $request->file('mainimage');
                $extension = $request->file('mainimage')->extension();
                $image_src = '/image/product/' . $registerid . '.' . $extension;
                $imagepath = storage_path('app/public/image/product/');
                $image->move($imagepath, $image_src);
                $product->image = $image_src;
            }

            $product->update();
            return redirect()->route('product.index', $id)->with(['success' => 'Product ' . $request->input('name') . ' was successfully updated!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('id', $id)->update([
            'deleted_at' => now(),
        ]);
        return redirect()->route('product.index');
    }
}
