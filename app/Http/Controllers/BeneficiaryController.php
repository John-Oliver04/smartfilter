<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BeneficiaryImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Excelfile;
use Illuminate\Support\Facades\Storage;

class BeneficiaryController extends Controller
{
    public function index()
    {
        return view('Table');
    }

    public function importbene(Request $request)
    { 
        // dd($request->file('importfile'));
        request()->validate([
            'importfile'   => ['mimes:xlsx', 'max:30048']
        ]);
  
        $file = $request->file('importfile');
        $file->move('importedexcel', $file->getClientOriginalName());
        Excel::import(new BeneficiaryImport, public_path().'/importedexcel/'.$file->getClientOriginalName());
        // (new BeneficiaryImport)->import(public_path().'/local/'.$file->getClientOriginalName(), 'local', \Maatwebsite\Excel\Excel::XLSX);
        $ef = new Excelfile();
        $ef->filename = $file->getClientOriginalName();
        $ef->uploader = $request->uploader;
        $ef->save();

        Storage::delete(public_path().'/importedexcel/'.$file->getClientOriginalName());
        return redirect("/tables")->with("message","Successfully imported to database");
    }
}
