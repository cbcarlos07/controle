<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Pessoa;
class PessoaController extends Controller
{
    public function add( Request $request ){
        //Retrieving data
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

    public function getData( Request $request ){
        $id = $request->input( 'codigo' );
        $pessoa = Pessoa::with([ 'empresa','setor','cargo' ])->first();
        return response()->json( $pessoa );
    }

    public function edit( Request $request ){
        //Retrieving data
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
        //Retrieving data
        $id        = $request->input( 'codigo' );

        $pessoa = Pessoa::find( $id );
        //Deleting data from database
        $teste = $pessoa->delete();
        return response()->json( array('retorno' => $teste ) );
    }

    public function lista( Request $request ){
        //Getting data
        $nome     = "%".$request->input( 'nome' )."%";
        $telefone = "%".$request->input( 'telefone' )."%";
        $empresa  = $request->input( 'empresa' );
        $setor    = $request->input( 'setor' );
        $cargo    = $request->input( 'cargo' );
        $email    = "%".$request->input( 'email' )."%";
        //echo "teste";


        //Inner join in tables
        $pessoa = Pessoa::with(['empresa', 'setor','cargo'])
                         ->where( [
                                     [ 'nm_pessoa', 'like', $nome],
                                     [ 'telefone', 'like', $telefone ],
                                     [ 'email', 'like', $email ],
                                     [ 'cd_empresa', 'like', $empresa ],
                                     [ 'cd_setor', 'like', $setor ],
                                     [ 'cd_cargo', 'like', $cargo ]
                                ] )
                         ->get();
      //  dd( $pessoa );
        //returning result
        return response()->json( $pessoa );

    }

    public function listaPessoas(){
        $pessoa = Pessoa::orderBy( 'nm_pessoa' )->get();
        return response()->json( $pessoa );
    }

    public function listaTelefone(){
        $pessoa = Pessoa::orderBy( 'nm_pessoa' )->get();
        return response()->json( $pessoa );
    }

    public function listaEmail(){
        $pessoa = Pessoa::orderBy( 'nm_pessoa' )->get();
        return response()->json( $pessoa );
    }

    public function listaNome( Request $request ){
        //Getting data
        $nome     = "%".$request->input( 'nome' )."%";
        //echo "teste";


        //Inner join in tables
        $pessoa = Pessoa::with(['empresa', 'setor','cargo'])
            ->where( [
                [ 'nm_pessoa', 'like', $nome]
            ] )
            ->get();
        //  dd( $pessoa );
        //returning result
        return response()->json( $pessoa );

    }


}
