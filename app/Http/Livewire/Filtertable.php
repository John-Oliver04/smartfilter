<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Beneficiary;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\Wizard\Duplicates;

class Filtertable extends Component
{


    public function render()
    {
        return view('livewire.filtertable'); 
    }
}
