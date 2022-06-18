<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

class AdminAreaController extends Controller
{
    public function recordsReport()
    {
        $equipment = Equipment::all();

        return view('records-report', [
            'equipments' => $equipment,
            'recordTypes' =>  $recordTypes = [1 => 'Preventiva', 2 => 'Corretiva', 3 => 'Urgente']
        ]);
    }
}
