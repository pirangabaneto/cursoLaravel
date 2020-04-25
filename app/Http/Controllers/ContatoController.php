<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){

    	$contatos = [
    		(object)["nome" => "Maria", "tel" => "40028922"],
    		(object)["nome" => "José", "tel" => "51139033"]
    	];

        $contato = new Contato();

        $con = $contato->lista();

        dd($con->nome);

    	return view('contato.index', compact('contatos'));
    }
}
