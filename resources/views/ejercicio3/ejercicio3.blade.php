@extends('Template.Template')
@section('plantillaweb')
    <form action="{{Route('resultado3')}}" method="POST">
        {{ csrf_field() }}
        <h1>Valor de x</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Digite le valor de X</label>
                    <input type="number" name="numero">
                </div>

            </div>
        </div>
        <input type="submit" name="btm_enviar" value="enviar">

    </form>
@endsection
