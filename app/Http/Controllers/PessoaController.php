<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Pessoa;
class PessoaController extends Controller
{
    public function add( Request $request ){
        //Getting data
        $nome      = $request->input( 'nome' );
        $telefone  = $request->input( 'telefone' );
        $empresa   = $request->input( 'empresa' );
        $setor     = $request->input( 'setor' );
        $email     = $request->input( 'email' );
        $cargo     = $request->input( 'cargo' );
        /*
         * Validating information need;
         * The fields cannot be empty
         */
        $fields = array(
            "nome"      => $nome,
            "telefone"  => $telefone,
            "empresa"   => $empresa,
            "setor"     => $setor,
            "email"     => $email,
            "cargo"     => $cargo
        );

        $rules = array(
            "nome"      => "required",
            "telefone"  => "required",
            "empresa"   => "required",
            "setor"     => "required",
            "cargo"     => "required",

        );

        $validator = Validator::make(
            $fields,
            $rules
        );

        if( $validator->fails() ){
            return response()->json( $validator );
        }else{
            //trying save data in database
            $pessoa = new Pessoa();
            $pessoa->nm_pessoa  = $nome;
            $pessoa->telefone   = $telefone;
            $pessoa->cd_empresa = $empresa;
            $pessoa->cd_setor   = $setor;
            $pessoa->email      = $email;
            $pessoa->cd_cargo   = $cargo;
            $teste = $pessoa->save();
            //Returnin answer of the action
            return response()->json( array( 'retorno' => $teste ) );


        }

    }

    public function edit( Request $request ){
        //Getting data
        $id        = $request->input( 'codigo' );
        $nome      = $request->input( 'nome' );
        $telefone  = $request->input( 'telefone' );
        $empresa   = $request->input( 'empresa' );
        $setor     = $request->input( 'setor' );
        $email     = $request->input( 'email' );
        $cargo     = $request->input( 'cargo' );
        /*
         * Validating information need;
         * The fields cannot be empty
         */
        $fields = array(
            "nome"      => $nome,
            "telefone"  => $telefone,
            "empresa"   => $empresa,
            "setor"     => $setor,
            "email"     => $email,
            "cargo"     => $cargo
        );

        $rules = array(
            "nome"      => "required",
            "telefone"  => "required",
            "empresa"   => "required",
            "setor"     => "required",
            "cargo"     => "required",

        );

        $validator = Validator::make(
            $fields,
            $rules
        );

        if( $validator->fails() ){
            return response()->json( $validator );
        }else{
            //trying save data in database
            $pessoa = Pessoa::find( $id );
            $pessoa->nm_pessoa  = $nome;
            $pessoa->telefone   = $telefone;
            $pessoa->cd_empresa = $empresa;
            $pessoa->cd_setor   = $setor;
            $pessoa->email      = $email;
            $pessoa->cd_cargo   = $cargo;
            $teste = $pessoa->save();
            //Returnin answer of the action
            return response()->json( array( 'retorno' => $teste ) );


        }

    }

    public function delete( Request $request ){
        //Getting data
        $id        = $request->input( 'codigo' );
        $pessoa = Pessoa::find( $id );
        //Deleting data from database
        $teste = $pessoa->save();
        return response()->json( array('returno' => $teste ) );

    }

    public function list( Request $request ){
        $nome     = "%".$request->input( 'nome' )."%";
        $telefone = "%".$request->input( 'telefone' )."%";
        $email    = "%".$request->input( 'email' )."%";
        $empresa  = $request->input( 'empresa' );
        $setor    = $request->input( 'setor' );
        $cargo    = $request->input( 'cargo' );



        $pessoa = Pessoa::with(['empresa', 'setor','cargo'])
                         ->where( 'nm_pessoa', 'like', $nome )
                         ->orWhere( 'telefone', 'like', $telefone )
                         ->orWhere( 'email', 'like', $email )
                         ->orWhere( 'cd_empresa', $empresa )
                         ->orWhere( 'cd_setor', $setor )
                         ->orWhere( 'cd_cargo', $cargo )
                         ->get();

        return response()->json( $pessoa );

    }
}