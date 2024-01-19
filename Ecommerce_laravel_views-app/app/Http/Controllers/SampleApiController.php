<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class SampleApiController extends Controller
{
    public function Getdata($id=null){
        if($id){
            $data=Product::find($id);
        }
        else{
            $data= Product::all();
        }
        return $data;
       
    }
    public function Adddata(Request $request){
        $data=new Product;
        $data->product_name=$request->product_name;
        $data->product_category=$request->product_category;
        $data->product_price=$request->product_price;
        $data->product_quantity=$request->product_quantity;
        $result=$data->save();
        if($result){
            return "data saved";
        }
    }
    public function Updatedata(Request $request){
        $data=Product::find($request->id);
        $data->product_name=$request->product_name;
        $data->product_category=$request->product_category;
        $data->product_price=$request->product_price;
        $data->product_quantity=$request->product_quantity;
        $result=$data->save();
        if($result){
            return "update done";
        }
    }
    public function Deletedata($id){
        $data=Product::find($id);
        $result=$data->delete();
        if($result){
            return "data deleted";
        }
    }
    public function Validatedata(Request $request){
        $rules=array(
            'product_name'=>'required|min:1|max:100',
            'product_category'=>'required|min:1|max:100',
            'product_price'=>'required|numeric',
            'product_quantity'=>'required|numeric'
        ); 
        $validator= Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }
            $data=new Product;
            $data->product_name=$request->product_name;
            $data->product_category=$request->product_category;
            $data->product_price=$request->product_price;
            $data->product_quantity=$request->product_quantity;
            $result=$data->save();
            if($result){
                return "result added";
            }
    }      
}

