<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\product;
use App\Models\category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'category' => category::where('deleted_at', null)->get(),
        );
        return view('Admin.category.index', $data);
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
        $validation = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validation->fails()) {
            return redirect()->back()->with('error', 'Category adding something wrong.');
        } else {
            $categorye = category::create($request->all());
            return redirect()->route('category.index')->with('success', 'Category Added successfully.');
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
        $category = category::findorfail($id);
        $data = array(
            'category' => $category,
        );
        if ($category->deleted_at == null) {
            return view('Admin.category.edit', $data);
        } else {
            return redirect()->route('category.index');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Please enter a name',

            ]
        );
        $category = category::findorfail($id);
        $category->update($request->all());
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = category::where('id', $id)->get();
        foreach ($category as $categorys) {
            category::where('id', $categorys->id)->update([
                'deleted_at' => now(),
            ]);
        }
        return redirect()->route('category.index');
    }
}
