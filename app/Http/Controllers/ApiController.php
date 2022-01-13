<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Validator;

class ApiController extends Controller
{
    // First API
    function apiData(){
        return ["name"=>'abdul',
            'email'=>'abdul@gmail.com'];
    }
    // Get data Form Employee table using API
    function getApi(){
        return employee::all();
    }
    // Get Data With Param ID
    function apiParam($id=null){
        return $id?employee::find($id):employee::all();
    }
        // Param NAME
        function apiPAramName(employee $key=null){
            return $key?employee::find($key):employee::all();
        } 
    // Post API
    function postApi(Request $request){
        $data = new employee;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
        $result=$data->save();
        if($result){
            return ["result"=>"Data Save through API in Employee Table Successfully.....!!"];
        }else{
            return ["result"=>"Post API Method Faild.....!!"];
        }
    }
    // Put API 
    function putApi(Request $request){
        $data = employee::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->address=$request->address;
        $result=$data->save();
        if($result){
            return ["result"=>"Update Data Using Put API Method in Employee Table Successfully.....!!"];
        }else{
            return ["result"=>"Put API Method Faild.....!!"];
        }
    }
    // Delete API 
    function deleteApi($id){
        $data = employee::find($id);
        $result = $data->delete();
        if($result){
            return ["result"=>"Delete API Delete Data from Employee Table in Database Successfully....!!"];
        }else{
            return ["result"=>"Delete Method API Faild...!!"];
        }
    }
    // Search API
    function searchApi($name){
        $result = employee::where("name","like", "%".$name."%")->get();
        if(count($result)>0){
            return $result;
        }else{
            return ["Result"=>"Ooppss!!! No Data Found"];
        }
    }
    // Validate API
    function apiValidation(Request $request){
        $rules=array(
            "name"=>"required | max:20",
            "email"=>"required | max:20",
            "address"=>"required | min:4"
        );
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }else{
            $data = new employee;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->address = $request->address;
            $result = $data->save();
            if($result){
                return ["Result"=>"Validated Data Save Successfully"];
            }else{
                return ["Result"=>"Operation Faild"];
            }
        }
    }
    // Upload File API
    function fileApi(Request $request){
        $result = $request->file('3rd')->store('ApiDocs');
        return ['Result'=>$result];
    }
            // new Folder
            // saveAs('folderName','fileName.extenssion');
}
