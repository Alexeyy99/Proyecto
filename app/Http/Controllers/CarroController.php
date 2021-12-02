<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function registrarCarro()
    {
        $carro = new Carro();
        $carro->modelo = 'Malibu';
        $carro->año = '2005';
        $carro->precio = '2500';
        $carro->tipocarro = 'Economico';
        $carro->cilindros = 4;
        $carro->color = "Dorado";
        $carro->save();
    }

    public function index(){
        //$carros = Carro::where('tipocarro', 'Deportivo')->get();
        //$carros = Carro::all();
        //$carros = Carro::where('cilindros', 8)->get();
        //$carros = Carro::orderBy('precio', 'asc')->get();
        //$carros = Carro::where('tipocarro', 'LIKE', '%De%')->get();
        //$carros = Carro::where('tipocarro', 'LIKE', '%De%')->select('tipocarro as Tipo del carro', 'precio')->get();

        $carros = Carro::paginate(5);
        return view('carros.mostrarCarros', compact('carros'));
    }
}
