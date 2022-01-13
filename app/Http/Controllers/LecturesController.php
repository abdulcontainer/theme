<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\employee;
use App\Mail\MyMail;

class LecturesController extends Controller
{
    //form Validation
    function validation_form(){
        return view('formvalidation');
    }
    function submit(Request $request){
        $request->validate([
            'username' => 'required | max:15',
            'password' => 'required | min:4'
        ]);
        return $request->input();
    }
    // Http Client
    function httpClient(){
        return Http::get("http:/api/apidata");
    }
    // Upload File
    function upload_file(Request $request){
        return $request->file('file')->storeAs('img','pic1.jpg');
    }
    // Localization
    function localProfile($lang){
        App::aetlocale($lang);
        return view('localprofile');
    }
    // Query Builder Fetch
    function queryBuilderFetch(){
        $data = DB::table('employees')->get();
        return view('querylist',['data'=>$data]);
    }
        // Query Builder Find
        function queryBuilderFind(){
            return DB::table('employees')
            ->where('address','Islamabad')->get();
            // ->count();
        }
        // Query Builder Insert
        function queryBuilderInsert(){
            return DB::table('employees')
            ->insert([
                'name'=>'QueryBuilder', 'email'=>'query@gmail.com', 'address'=>'Laravel'
            ]);
        }
        // Query Builder Update
        function queryBuilderUpdate(){
            return DB::table('employees')
            ->where('id',6)
            ->update([
                'name'=>'Query Builder Data', 'email'=>'query@gmail.com', 'address'=>'Larave'
            ]);
        }
        function queryBuilderDelete(){
            return DB::table('employees')
            ->where('id',19)->delete();
        }
    // Query Aggregate Methoods
    function queryMethods(){
        return DB::table('employees')
        //->min('name');
        //->sum('id'); 
        //->max('name');
        //->avg('id');
        ->select(DB::raw("min(id) as min_ID, max(id) as max_ID"))->get();
    }
    // Joins
    function joins(){
        return DB::table('employees')
        ->select('companies.*')
        ->where('employees.id','=','1')
        ->join('companies','employees.id','=','companies.employee_id')->get();
    }
    // Mutator
    function mutator(Request $request){
        $data = new employee; 
        $data->name = "Mutator Employee";
        $data->email = "mutat@gmail.com";
        $data->address = "Capital";
        $data->save();
        echo "Employee added using Mutrator and his Address Pakistan is added through Employee Model Using Mutator";
    }
    // One To One
    function oneToOne(){
        return employee::find(1)->companyData;
    }
    // One TO Many
    function oneToMany(){
        return employee::find(1)->companyManyData;
    }
    // Route Model Binding
    function binding(employee $key){
        return $key;
    }
    // Markdown Mail Template
    function mail(){
        return new MyMail();
    }
    // ORM
        // Fetch data
        function ormFetch(){
            return employee::find(1);
        }  
        // Insert Data
        function ormInsert(Request $req){
            $employee = new employee;
            $employee->name = $req->name;
            $employee->email = $req->email;
            $employee->address = $req->address;
            $employee->save();
            return "Data Insert Successfuly Using Eloquent ORM";
        }
        // Update
        function ormUpdate(Request $req){
            $orm = employee::find(22);
            $orm->name = $req->name;
            $orm->save();
            return "Data update Successfuly Using Eloquent ORM";
        }
        // Delete
        function ormDelete(Request $req){
            $orm = employee::find(21);
            $orm->delete();
            return "Data deleted by finding ID using Eloquent ORM";
        }
}
