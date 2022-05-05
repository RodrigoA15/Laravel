@extends('Template.Template')
@section('plantillaweb')
    <form action="{{ Route('resultado6') }}" method="POST">
        {{ csrf_field() }}
<h1>Categoria y sueldo</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                    <label>Sueldo</label>
                    <input type="number" name="sueldo" required> <br>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 p-2">

                    <label>Categoria</label>
                    <input type="number" name="categoria" required><br>
                </div>


            </div>
        </div>
        <input type="submit" name="btn_enviar" value="enviar">

    </form>
@endsection
