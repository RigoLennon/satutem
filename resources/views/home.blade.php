<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SAT UTeM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{ asset('images/logo-SAT.jpg') }}" alt="sat" class="img-fluid" style="width: 40%">
        </div>
        <div class="col-lg">
            <p class="text-right">
                NOMBRE: Edson Gutierrez Renteria / RFC:EGR21121997 <br>
                TIPO DE DECLARACION: Nominal/Ejercicio 2017 <br>
                PERIODICIDAD: Mensual / Periodo: Junio
            </p>
        </div>
    </div>

    <div style="padding:2px;background-color:#005cbf;line-height:1.4;color: #ffffff;font-size: 0.8em">
        Declaracion provisional o Definitiva de impuestos Federales / Menu
    </div>

    <br>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center">
                    Descripcion de los pasos para el llenado de la declaracion
                </div>
                <div class="card-body">
                    1.-ej. <br>
                    2.-ej. <br>
                    3.-ej. <br>
                    4.-ej. <br>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center">
                    Obligaciones
                </div>
                <div class="card-body">

                    <table class="col-sm table-hover">
                        <th scope="col">
                            <h5 class="card-title">R7</h5>
                            <p class="card-text">ISR Personas fisicas: Actividad empresarial y profesional</p>
                        </th>
                    </table>

                    <br>

                    <table class="col-sm table-hover">
                        <th scope="col">
                            <h5>R21</h5>
                            <p class="card-text table-hover">Impuesto al Valor Agregado</p>
                        </th>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Administracion de la declaracion <br>
                    Enviar Declaracion
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center">
                    Total a pagar:
                </div>
                <p class="card-text text-center">$ 100</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
