<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Product::all();

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Product;
        $data->Product_name=$request->Product_name;
        $data->Product_category=$request->Product_category;
        $data->Product_price=$request->Product_price;
        $data->Product_quantity=$request->Product_quantity;
        $result=$data->save();
        if($request){
            return "data saved";
        }
        else{
            return "data not saved";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Product::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Product::find($id);
        $data->product_name=$request->product_name;
        $data->product_category=$request->product_category;
        $data->product_price=$request->product_price;
        $data->product_quantity=$request->product_quantity;
        $result=$data->save();
        if($result){
            return "update done";
        }
        else{
            return "update not yet done";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Product::find($id);
        $result=$data->delete();
        if($result){
            return "data deleted";
        }
        else{
            return "data not deleted";
        }
    }
}
