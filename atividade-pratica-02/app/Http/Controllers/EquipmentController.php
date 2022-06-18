<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

/**
 * Class EquipmentController
 * @package App\Http\Controllers
 */
class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipment.index', ['equipment' => Equipment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipment.create', ['equipment' => new Equipment()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Equipment::create($request->all());

        return redirect('/equipment')
            ->with('success', 'Equipamento cadastrado com sucesso.');
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
        return view('equipment.edit', ['equipment' => Equipment::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Equipment $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Equipment::find($id)
            ->update([
                'name' => $request->name
            ]);

        return redirect('/equipment')
            ->with('success', 'Equipamento atualizado com sucesso');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        Equipment::find($id)->delete();
        return redirect('/equipment')
            ->with('success', 'Equipamento deletado com sucesso');
    }
}
