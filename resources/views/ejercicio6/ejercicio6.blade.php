<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('resultado6')}}" method="POST">
        {{ csrf_field() }}
        
        <label>Sueldo</label>
        <input type="number" name="sueldo" required> <br>

        <label>Categoria</label>
        <input type="number" name="categoria" required><br>

        <input type="submit"  name="btn_enviar" value="enviar">
    </form>
</body>
</html>