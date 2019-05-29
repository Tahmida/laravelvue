<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Employee;

class SpaController extends Controller
{
    public function home(){
        return view('vueApp');
    }
    public function index(Request $request)
    {
       
            return Employee::orderBy('id','desc')->get();

     
    }

    public function store(Request $request)
    {
    	
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'The name field is required',
        ]); 
        //try{
           //$request->request->add(['created_by' =>  Auth::user()->id]);
           //$request->request->add(['created_at' =>  Carbon::now()]);

            Employee::insert($request->all());
            return response()->json(['status'=>'success','message'=>'Employee successfully saved !']);
        // } 
        // catch(\Exception $e){
        //     return response()->json(['status'=>'error','message'=>'Something Error Found !, Please try again']);
        // }
    }
    
}