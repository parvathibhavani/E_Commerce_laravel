<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class SampleApiController extends Controller
{
    public function getdata($id=null){
        if($id){
            $data=Product::find($id);
        }
        else{
            $data= Product::all();
        }
        return $data;
       
        //return view('output',compact('data'));
    }
    public function add_data(Request $request){
        $data=new Product;
        $data->product_name=$request->product_name;
        $data->product_category=$request->product_category;
        $data->product_price=$request->product_price;
        $data->product_quantity=$request->product_quantity;
        $result=$data->save();
        if($request){
            return "data saved";
        }
        else{
            return "data not saved";
        }
    }
    public function update_data(Request $request){
        $data=Product::find($request->id);
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
    public function delete_data($id){
        $data=Product::find($id);
        $result=$data->delete();
        if($result){
            return "data deleted";
        }
        else{
            return "data not deleted";
        }
    }
    public function validate_data(Request $request){
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
        else{
            $data=new Product;
            $data->product_name=$request->product_name;
            $data->product_category=$request->product_category;
            $data->product_price=$request->product_price;
            $data->product_quantity=$request->product_quantity;
            $result=$data->save();
            if($result){
                return "result added";
            }
            else{
                return "result not added";
            }
        }
    }

    
        
}
