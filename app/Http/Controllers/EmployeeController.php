<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use Excel ;


class EmployeeController extends Controller
{
    public function importForm() {
        return view('form') ;
    }
    public function import(Request $request) {
        $fileName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->storeAs('public/csv/', $fileName);
       // dd($request->file->getClientOriginalName()); get file name
        $rows = Excel::toArray(new EmployeeImport ,$request->file)[0];
       // dd(count($rows)); /// count rows in csv
    //    foreach($rows as $row){
    //        echo $row[0] . ' ' . $row[1] . ' ' . $row[2] . '</br>';
    //    }
    return view('display' , compact('rows'));
        return "Records Are Imported Succsefully";
    }
}
