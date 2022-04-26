<?php

namespace App\Http\Controllers;
use App\Models\Casal;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CasalController extends Controller
{
    public function inicio(){
        return view('index');
    }
    
    public function add(){
        return view("add");
    }

    public function editar(){
        return view("editar");
    }

    public function eliminar(){

        return view("add");
    }

    public function addCasals(Request $request){
        $nom = $request->nom;
        $data_inici = $request->data_inici;
        $data_final = $request->data_final;
        $n_places = $request->n_places;
        $id_ciutat = $request->id;


        $data=array('nom'=>$nom,"data_inici"=>$data_inici,"data_final"=>$data_final,"n_places"=>$n_places,"id_ciutat"=>$id_ciutat);

        DB::table('casals')->insert($data);

        return view("index");
    }


}
