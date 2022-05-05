@extends('Template.Template')
@section ('plantillaweb')
<form action="{{Route('resultado_ejer2')}}" method="POST">
     {{ csrf_field() }}

     <h1>Salario</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                <label>Nombre</label>
                <input type="text" name="nombre" required><br>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                <label>Horas de trabajo</label>
                <input type="number" name="horas" required><br>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                <label>Valor hora</label>
                <input type="number" name="valorhora" required><br>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                <label>Bonificacion</label>
                <input type="number" name="bonificacion" required><br>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                <label>Aux_Transporte</label>
                <input type="number" name="Aux" required><br>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                <label>Credito</label>
                <input type="number" name="credito" required><br>
            </div>

            
        </div>
    </div>
    <input type="submit" name="btn_enviar" value="enviar">


 </form>
@endsection
