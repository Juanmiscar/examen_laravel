<?php
use Illuminate\Support\Facades\DB;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tablas</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>

<body id="page-top">  
    <header  style="text-align: center">Casals de la Generalitat de Catalunya</header>  
    <!-- Devolverá el contenido mediante la plantilla-->
    @yield('content')
    <footer style="text-align: center">Carrer Almogavers 34, 08034 Barcelona</footer>
</body>
</html>
