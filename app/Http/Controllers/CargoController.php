<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;
class CargoController extends Controller
{
    public function lista(){
        $cargo = Cargo::all( );
        return response()->json( $cargo );
    }
}
