@extends('plantilla')
@section('content')


<div style="border: solid 1px black; margin: 2%">
<form action="/addCasals" method="POST" style="text-align:center;">
    @csrf
  <p>Nombre: <input type="text" name="nombre" id="nombre" size="20"></p>
  <p>Fecha Inicio: <input type="date" id="f_inicio" name="f_inicio"></p>
  <p>Fecha Fin: <input type="date" id="f_fin" name="f_fin"></p>
  <p>Numero plazas: <input type="number" id="n_plazas" name="n_plazas"></p>
    <p>Ciudad:<select name="menu">
        <?php
        $casals = DB::table('ciutats')->get();

        foreach ($casals as $casal) {
            echo "<option>".$casal->nom."</option>";
        }
        ?>
    </select></p>
  
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>
</form>
</div>
@stop
