<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{

    public function index()
    {
		$carro = new Carro();
        $carros = Carro::All();
		return view("carro.index", [
			"carro" => $carro,
			"carros" => $carros
		]);
    }

    public function store(Request $request)
    {
        if ($request->get("id") != "") {
			$carro = Carro::Find($request->get("id"));
		} else {
			$carro = new Carro();
		}
		$carro->marca = $request->get("marca");
		$carro->modelo = $request->get("modelo");
		$carro->placa = $request->get("placa");
		$carro->cor = $request->get("cor");
		$carro->ano = $request->get("ano");
		$carro->save();
		$request->Session()->flash("status", "salvo");
		return redirect("/carro");
    }

    public function edit($id)
    {
        $carro = Carro::Find($id);
		$carros = Carro::All();
		return view("carro.index", [
			"carro" => $carro,
			"carros" => $carros
		]);
    }

    public function destroy($id, Request $request)
    {
        Carro::Destroy($id);
		$request->Session()->flash("status", "excluido");
		return redirect("/carro");
    }
}
