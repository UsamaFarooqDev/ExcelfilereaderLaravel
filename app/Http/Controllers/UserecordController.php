<?php

namespace App\Http\Controllers;

use App\Models\userecord;
use Illuminate\Http\Request;
use App\Imports\userimport;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Excel;
use Validator;
class UserecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userecord  $userecord
     * @return \Illuminate\Http\Response
     */
    public function show(userecord $userecord)
    {
        return view('home')->with('dataArr',$userecord::all());

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userecord  $userecord
     * @return \Illuminate\Http\Response
     */
    }
    public function edit(userecord $userecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userecord  $userecord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userecord $userecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userecord  $userecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(userecord $userecord)
    {
        //
    }
    public function import(){
        return redirect('home');
    }
    public function importexcel(Request $request){
//dd($request->all());
Excel::import(new userimport, $request->file('files'));
$request->session()->flash('msg','File Uploaded Successfully ');
return redirect('home');

// $path = $request->file('files')->getRealPath();

// $import_data = Excel::import(new userimport , $path , function($reader){
//     $reader->select(array('name','email','phone'))->get();
// })->get();
// $import_data_filter = array_filter($import_data->toArray());
// if(!empty($import_data_filter)){
//     dd($import_data_filter);
// }
// $reader = new Spreadsheet($path);
// $insert = [];
// foreach($insert as $insertitem){
//     $validator = Validator::make($insertitem , (new userimport())->rules());
//     if($validator->fails()){
//         dd($validator->errors());
//     }
//     else{
//         Excel::import(new userimport, $request->file('files'));
//     }
// }





// $request->session()->flash('msg','File Uploaded Successfully ');
// return redirect('home');
    
    }
}
