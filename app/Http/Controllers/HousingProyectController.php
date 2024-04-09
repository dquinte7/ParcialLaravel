<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\housingProyect;

class HousingProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('housingProyects.index', ['housingProyects' => housingProyect::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('housingProyects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $housingProyect = new \App\Models\housingProyect($request->all());
        $housingProyect->save();
        return redirect()->route('housingProyect.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(housingProyect $housingProyect)
    {
        return view('housingProyects.show', [
            'housingProyect' => $housingProyect
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(housingProyect $housingProyect)
    {
        return view('housingProyects.edit', [
            'housingProyect' => $housingProyect
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(housingProyect $request, string $housingProyect)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(housingProyect $housingProyect)
    {
        $housingProyect->delete();
        return back();
    }
}
