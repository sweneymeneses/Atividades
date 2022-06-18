<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class RecordController
 * @package App\Http\Controllers
 */
class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recordTypes = [1 => 'Preventiva', 2 => 'Corretiva', 3 => 'Urgente'];
        return view('records.index', [
            'records' =>  Record::all(),
            'recordTypes' => [1 => 'Preventiva', 2 => 'Corretiva', 3 => 'Urgente'],
            'recordTypes' => $recordTypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create', [
            'record' => new Record(),
            'equipments' => Equipment::all(),
            'recordTypes' => [1 => 'Preventiva', 2 => 'Corretiva', 3 => 'Urgente'],
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Record::create($request->all());

        return redirect('/records')
            ->with('success', 'Manutenção cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('records.edit', [
            'record' => Record::find($id),
            'equipments' => Equipment::all(),
            'recordTypes' => [1 => 'Preventiva', 2 => 'Corretiva', 3 => 'Urgente'],
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Record $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Record::find($id)
            ->update([
                'equipment_id' => $request->equipment_id,
                'user_id' => $request->user_id,
                'description' => $request->description,
                'date' => $request->date,
                'type' => $request->type,
            ]);

        return redirect('/records')
            ->with('success', 'Manutenção atualizada com sucesso.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Record::find($id)->delete();
        return redirect('/records')
            ->with('success', 'Manutenção removida com sucesso.');
    }
}
