@extends('Template.Template')
@section('plantillaweb')
    <form action="{{ Route('resultado5') }}" method="POST">
        {{ csrf_field() }}
        <h1>Calculadora</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">

                    <label>Numero1</label>
                    <input type="number" name="numero1" required><br>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">

                    <label>Operacion</label>
                    <input type="text" name="operacion" required><br>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">

                    <label>Numero2</label>
                    <input type="number" name="numero2" required><br>
                </div>


            </div>
        </div>
        <input type="submit" name="btn_enviar" value="enviar">


    </form>
@endsection
