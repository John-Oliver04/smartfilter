<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $table = "beneficiaries";
    protected $fillable = [
        'filename',
        'firstname',
        'middlename',
        'lastname',
        'extname',
        'birthday',
        'brgy',
        'municipality',
        'province',
        'typeofid',
        'idnumber',
        'contact',
        'typeofpayment',
        'typeofbene',
        'occupation',
        'sex',
        'civilstatus',
        'age',
        'dependent',
        'interested',
        'nameoftraining'
    ];

}
