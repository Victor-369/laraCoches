<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coche;


class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coches = Coche::orderBy('id', 'DESC')->paginate(config('pagination.coches', 10));

        $total = Coche::count();

        return view('coches.index', ['coches' => $coches,
                                    'total' => $total]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                            'marca' => 'required|max:255',
                            'modelo' => 'required|max:255',
                            'precio' => 'required|numeric',
                            'kms' => 'required|integer',
                            'matriculado' => 'sometimes'
                        ]);
        
        $coche = Coche::create($request->all());

        return redirect()->route('coches.show', $coche->id)
                    ->with('success', "Coche $coche->marca $coche->modelo añadida satisfactoriamente.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coche = Coche::findOrFail($id);

        return view('coches.show', ['coche' => $coche]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coche = Coche::findOrFail($id);

        return view('coches.update', ['coche' => $coche]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'marca' => 'required|max:255',
            'modelo' => 'required|max:255',
            'precio' => 'required|numeric',
            'kms' => 'required|integer',
            'matriculado' => 'sometimes'
        ]);

        $coche = Coche::findOrFail($id);
        $coche->update($request->all() + ['matriculado' => 0]);

        return back()->with('success', "Coche $coche->marca $coche->modelo actualizada.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coche = Coche::findOrFail($id);
        $coche->delete();

        return redirect('coches')->with('success', "Coche $coche->marca $coche->modelo eliminado.");
    }

    // Entrada manual de confirmación de borrado
    public function delete($id)
    {
        $coche = Coche::findOrFail($id);

        return view('coches.delete', ['coche' => $coche]);
    }
}
