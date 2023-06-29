<?php

namespace App\Http\Livewire;

use App\Models\Beneficiary;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Benestable extends Component
{
    public $search;
    public $optitem='';

    public $dupfname;
    public $dupfnamecount = 0;

    public $duplname;
    public $duplnamecount = 0;
    
    public $dupid;
    public $dupidcount = 0;

    public $dupbirthday;
    public $dupbirthdaycount = 0;

    public $dupbrgy;
    public $dupbrgycount = 0;



    public function fnamepass()
    {
        $this->search = $this->optitem;
    }
    public function lnamepass()
    {
        $this->search = $this->optitem;
    }
    public function idpass()
    {
        $this->search = $this->optitem;
    }
    public function birthdaypass()
    {
        $this->search = $this->optitem;
    }
    public function brgypass()
    {
        $this->search = $this->optitem;
    }

    public function filternow()
    {
        // firstname ------------------------------------------------------------------------
        $dupfname = DB::table('beneficiaries')
        ->select('firstname', DB::raw('COUNT(*) as `count`'))
        ->groupBy('firstname')
        ->havingRaw('COUNT(*) > 1')
        ->get(); 
        $dupfname = $dupfname->pluck('firstname');

        $fnames = [];
        foreach ($dupfname as $name) {
            $fnames[] = $name;
        }
        $this->dupfname = $fnames;
        $this->dupfnamecount = count($fnames);

        // lastname ---------------------------------------------------------------------------
        $duplname = DB::table('beneficiaries')
        ->select('lastname', DB::raw('COUNT(*) as `count`'))
        ->groupBy('lastname')
        ->havingRaw('COUNT(*) > 1')
        ->get(); 
        $duplname = $duplname->pluck('lastname');

        $lnames = [];
        foreach ($duplname as $name) {
            $lnames[] = $name;
        }
        $this->duplname = $lnames;
        $this->duplnamecount = count($lnames);

        // id number ----------------------------------------------------------------------------
        $dupid = DB::table('beneficiaries')
        ->select('idnumber', DB::raw('COUNT(*) as `count`'))
        ->groupBy('idnumber')
        ->havingRaw('COUNT(*) > 1')
        ->get(); 
        $dupid = $dupid->pluck('idnumber');

        $idnames = [];
        foreach ($dupid as $name) {
            $idnames[] = $name;
        }
        $this->dupid = $idnames;
        $this->dupidcount = count($idnames);

        // birthday ----------------------------------------------------------------------------
        $dupbirthday = DB::table('beneficiaries')
        ->select('birthday', DB::raw('COUNT(*) as `count`'))
        ->groupBy('birthday')
        ->havingRaw('COUNT(*) > 1')
        ->get(); 
        $dupbirthday = $dupbirthday->pluck('birthday');

        $birthdaynames = [];
        foreach ($dupid as $name) {
            $birthdaynames[] = $name;
        }
        $this->dupbirthday = $birthdaynames;
        $this->dupbirthdaycount = count($birthdaynames);

        // birthday ----------------------------------------------------------------------------
        $dupbirthday = DB::table('beneficiaries')
        ->select('brgy', 'municipality','province', DB::raw('COUNT(*) as `count`'))
        ->groupBy('brgy', 'municipality','province')
        ->havingRaw('COUNT(*) > 1')
        ->get(); 
        $dupbirthday = $dupbirthday->pluck('birthday');

        $birthdaynames = [];
        foreach ($dupid as $name) {
            $birthdaynames[] = $name;
        }
        $this->dupbirthday = $birthdaynames;
        $this->dupbirthdaycount = count($birthdaynames);

    }


    public function render()
    {
        return view('livewire.benestable', [
            'benesearch' => Beneficiary::where('firstname','LIKE', "%".$this->search."%" ?? '')
            ->orWhere('lastname','LIKE', "%".$this->search."%" ?? '')
            ->orWhere('idnumber','LIKE', "%".$this->search."%" ?? '')
            ->paginate(10),
        ]);
    }
}