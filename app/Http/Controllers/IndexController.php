<?php

namespace App\Http\Controllers;

use App\Models\Espais;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $espais = Espais::with('images')->paginate(9);


        return view('index', compact('espais'));
        
    }
}
