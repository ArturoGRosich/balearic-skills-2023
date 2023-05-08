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
        $name = $data->get('name');
        $espais = Espais::where('name', 'LIKE', $name)->with('images')->get();
        dd($espais);

        return view('index', compact('espais'));
    }

}
