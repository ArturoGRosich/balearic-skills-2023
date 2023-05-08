<?php

namespace App\Http\Controllers;

use App\Models\Espais;
use Illuminate\Http\Request;

class EspaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $data)
    {
        $search = $data->get('search');
        $espais = Espais::where('name', 'LIKE', '%'.$search.'%')->with('images')->get();

        return view('index', compact('espais', 'search'));
    }

    public function show(Request $data, $id)
    {
        $search = Espais::where('id', $id)->first();

        return view('show', compact('search'));
    }

}
