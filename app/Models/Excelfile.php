<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excelfile extends Model
{
    use HasFactory;
    protected $table = "excelfiles";
    
    protected $fillable = [
        'adl',
        'uploader',
    ];
}
