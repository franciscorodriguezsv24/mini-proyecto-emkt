<?php

namespace App\Http\Controllers;

use App\Models\Dev;
use Illuminate\Http\Request;

class DevController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devs = Dev::all();
        return view('devs.index', compact('devs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('devs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|integer',
            'email' => 'required|email|unique:devs,email',
            'habilidades' => 'required',
        ]);

        Dev::create($request->all());

        return redirect()->route('somos-emkt.index')->with('success', 'Dev created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dev $dev)
    {
        return view('devs.show', compact('dev'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dev $dev)
    {
        return view('devs.edit', compact('dev'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dev $dev)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|integer',
            'email' => 'required|email|unique:devs,email,'.$dev->id,
            'habilidades' => 'required',
        ]);

        $dev->update($request->all());

        return redirect()->route('devs.index')->with('success', 'Dev updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dev $dev)
    {
        $dev->delete();

        return redirect()->route('devs.index')->with('success', 'Dev deleted successfully.');
    }
}
