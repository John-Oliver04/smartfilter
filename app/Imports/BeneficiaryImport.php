<?php

namespace App\Imports;

use App\Models\Beneficiary;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use PHPExcel_Shared_Date;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class BeneficiaryImport implements ToModel, WithCalculatedFormulas
{
    // use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
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
        // Enable calculation
        return new Beneficiary([
            'idofbene'      => $row[0],
           'firstname'      => $row[1],
           'middlename'     => $row[2],
           'lastname'       => $row[3],
           'extname'        => $row[4],
           'birthday'       =>  $row[5],
           'brgy'           => $row[6],
           'municipality'   => $row[7],
           'province'       => $row[8],
           'typeofid'       => $row[9],
           'idnumber'       => $row[10],
           'contact'        => $row[11],
        'typeofpayment'     => $row[12],
           'typeofbene'     => $row[13],
           'occupation'     => $row[14],
           'sex'            => $row[15],
           'civilstatus'    => $row[16],
           'age'            => $row[17],
           'dependent'      => $row[18],
           'interested'     => $row[19],
        'nameoftraining'    => $row[20],
        ]);
    }
}
