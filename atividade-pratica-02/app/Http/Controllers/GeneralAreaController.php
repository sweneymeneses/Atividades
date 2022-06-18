<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Support\Facades\DB;

class GeneralAreaController extends Controller
{
    public function index()
    {
        $equipment = Equipment::orderBy('name')->get();

        $records = DB::select(
            "SELECT
                r.id,
                r.date,
                e.name AS equipment_name,
                u.name AS user_name,
                r.type,
                r.description
            FROM
                records r
            INNER JOIN users u ON (u.id = r.user_id)
            INNER JOIN equipment e ON (e.id = r.equipment_id)
            ORDER BY
                r.date ASC"
        );

        $recordTypes = [1 => 'Preventiva', 2 => 'Corretiva', 3 => 'Urgente'];

        return view('general', [
            'equipmentList' => $equipment,
            'records' => $records,
            'recordTypes' => $recordTypes
        ]);
    }
}
