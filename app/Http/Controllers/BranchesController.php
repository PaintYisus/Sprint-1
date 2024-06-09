<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BranchModel;

class BranchesController extends Controller
{
        public function index(){
        return view('welcome');
    }
    public function guardar(Request $request){
        $sucursal = new BranchModel();
            $sucursal->nomSucursal = $request->nomSucursal;
            $sucursal->lugar = $request->lugar;
            $sucursal->direccion = $request->direccion;
            $sucursal->email = $request->email;
            $sucursal->telefono = $request->telefono;
            $sucursal->encargado = $request->encargado;
            $sucursal->horaApertura = $request->horaApertura;
            $sucursal->horaCierre = $request->horaCierre;
            $sucursal->save();
            return redirect()->route('sucursal');
    }
}
