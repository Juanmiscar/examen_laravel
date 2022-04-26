@extends('plantilla')
@section('content')
    <div class="general"  style="text-align: center">
        <h2>GESTIO DE CASALS</h2>
        <a href="/add">Añadir</a>
        <table border="1" style="border-collapse: collapse;margin-left: auto;
margin-right: auto; margin-top: 2%;margin-bottom: 2%;">
            <tr>
                <td>Nom</td>
                <td>Data inici</td>
                <td>Data final</td>
                <td>Num places</td>
                <td>Ciutat</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php

                $casals = DB::table('casals')->get();

                foreach ($casals as $casal) {
                    echo "<tr>";
                    echo "<th>".$casal->nom."</th>";
                    echo "<th>".$casal->data_inici."</th>";
                    echo "<th>".$casal->data_final."</th>";
                    echo "<th>".$casal->n_places."</th>";
                    echo "<th>".$casal->id_ciutat."</th>";
                    echo "<th><a href='/editar'>Editar</a></th>";
                    echo "<th><a href='/eliminar'>Eliminar</th>";
                    echo "</tr>";
                    
                }
                ?>
        </table>
    </div>
@stop
