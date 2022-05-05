@extends('Template.Template')
@section('plantillaweb')
    <form action="{{Route('resultado1')}}" method="POST">
     {{ csrf_field() }}

<h1>Nota final</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite nota1</label>
                    <input type="number" name="nota1">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite nota2</label>
                    <input type="number" name="nota2">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite Nota3</label>
                    <input type="number" name="nota3">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Nota Practica</label>
                    <input type="number" name="practica">
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Nota Examen Final</label>
                    <input type="number" name="final">
                </div>
            </div>
        </div>
        <input type="submit" name="btn_enviar" value="enviar">

    </form>
@endsection
