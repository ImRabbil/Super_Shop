<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use DB;
use App\AllSupplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
   
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    //new customer form view

    public function index(){
        return view('add_supplier');
    }

     public function Store(Request $request){

         $validatedData = $request->validate([

        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'shop' => 'required|max:255',
        'address' => 'required',
        'phone' => 'required',
        'photo' => 'required',
        'accountholder' => 'required',
        'accountnumber' => 'required',
        'bankname' => 'required',


    ]);

        $data=array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['shop'] = $request->shop;
        $data['accountholder'] = $request->accountholder;
        $data['accountnumber'] = $request->accountnumber;
        $data['bankname'] = $request->bankname;
         $data['branchname'] = $request->branchname;
        $data['city'] = $request->city;
        $data['type'] = $request->type;

        // echo "<pre>";
        // print_r($data);
        // exit();
         $image = $request->file('photo');
        if($image){
            $image_name = str::random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.' .$ext;
            $upload_path = 'public/supplier/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            if($success){
                $data['photo']=$image_url;
                $supplier=DB::table('suppliers')->insert($data);

                if($supplier){
                    $notification = array(
                        'messege'=>'Succesfully Employee Inserted',
                         'alert-type'=>'success'
                    );
                    return Redirect()->route('all.supplier')->with($notification);
                }else{
                   $notification = array(
                        'messege'=>'Error', 
                        'alert-type'=>'success'
                    );
                         return Redirect()->back()->with($notification);

                }

            }else{
                return Redirect()->back();

            }


        }else{
            return Redirect()->back();
        }


 

    }



    public function AllSupplier()
    {
        $supplier = DB::table('suppliers')->get();
        return view('all_supplier',compact('supplier'));
    }
}
