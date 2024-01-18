<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class studentcontroller extends Controller
{
    
    public function index(){
        /*$obj =new Customer;
        $obj->name='bhava';
        $obj->email='bhava@gmail.com';
        $obj->phone='578635';
        $obj->country='italy';
        $obj->save();*/
        
        /*$single_customer_data=Customer::find(2);
        //$single_customer_data=Customer::where('id',1)->first();
        $single_customer_data->name='hand';
        $single_customer_data->email='hand@gmail.com';
        $single_customer_data->update();*/

        $single_customer_data=Customer::find(2);
        $single_customer_data->delete();
        



    }
    public function show(){

        $customer_data=Customer::get();
        //dd($customer_data);
            return view('output',compact('customer_data'));
    }
    
}
