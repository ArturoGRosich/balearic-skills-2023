<?php

namespace App\Http\Controllers;

use App\Models\Espais;
use Illuminate\Http\Request;

class EspaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Espais $espais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Espais $espais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Espais $espais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Espais $espais)
    {
        //
    }
}
