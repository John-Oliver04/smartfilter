<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BeneficiaryImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Excelfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BeneficiaryController extends Controller
{
    public function index()
    {
        return view('Table');
    }

    public function importbene(Request $request)
    {  
        if($request->hasFile('importfile')){
            $path = $request->file('importfile')->getRealPath();
            $ef = new Excelfile;
            $ef->adl =  $request->input('adl');
            $ef->uploader = $request->input('uploader');
            $ef->save(); 
            Excel::import(new BeneficiaryImport,$path);
             
     
        }
         // adl
        // 'firstname',
        // 'middlename',
        // 'lastname',
        // 'extname',
        // 'birthday',
        // 'brgy',
        // 'municipality',
        // 'province',
        // 'typeofid',
        // 'idnumber',
        // 'contact',
        // 'typeofpayment',
        // 'typeofbene',
        // 'occupation',
        // 'sex',
        // 'civilstatus',
        // 'age',
        // 'dependent',
        // 'interested',
        // 'nameoftraining'
        // uploader
  
        return redirect("/tables")->with("message","Successfully imported to database");
    }
}
