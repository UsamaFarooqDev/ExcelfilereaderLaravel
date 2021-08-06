<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;

class excelimport extends Controller
{
    public function index(){
        return redirect('home');
    }
    public function importexcel(Request $request){
//dd($request->all());
    
          $validator = Validator::make($request->all(),
         
          [
              'files' => 'required|mimes:xlsx,csv'
          ]

    );
    if($validator->passes()){
        $request->session()->flash('msg','Project Updated Successfully ');
        return redirect('home');
    }
    else{
        $request->session()->flash('error','Please Upload CSV OR XLSX File ');
        return redirect('home');
    }
    }
}
