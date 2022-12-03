<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\sections;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = sections::all();
        $products = products::all();

               return view('products.products',compact('products','sections'));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        //return $request;
        $validatedData = $request->validate([
            'Product_name' => 'required|unique:products|max:255'
        ],
        [
            'Product_name.required' => 'يرجى اضافة اسم المنتج',
            'Product_name.unique' => 'اسم المنتج موجود مسبقاً'
        ]);


        products::create([
            'Product_name' => $request->Product_name,
            'section_id' => $request->section_id,
            'description'=>$request->description
        ]);
//        return $request->Product_name;
        session()->flash('Add','تمت اضافة المنتج بنجاح');
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
        $id = sections::where('section_name',$request->section_name)->first()->id;
        $products = $products::findOrFail($request->pro_id);
        $products->update([
            'Product_name' => $request->Product_name,
            'section_name' => $request->section_name,
            'description' => $request->description,
            'section_id' => $id
        ]);
        session()->flash('Edit','تمت عملية التعديل بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $product = products::findOrFail($request->pro_id);
        $product->delete();
        session()->flash('تمت عملية الحذف بنجاح');
        return redirect('/products');


    }
}
