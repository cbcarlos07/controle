<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
class EmpresaController extends Controller
{
    public function lista(){
        $empresa = Empresa::all( );
        return response()->json( $empresa );
    }

}
