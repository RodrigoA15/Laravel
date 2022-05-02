<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('resultado5')}}" method="POST">
        {{csrf_field ()}}

        <label>Numero1</label>
        <input type="number" name="numero1" required><br>
        <label>Operacion</label>
        <input type="text" name="operacion" required><br>
        <label>Numero2</label>
        <input type="number" name="numero2" required><br>

        <input type="submit" name="btn_enviar" value="enviar">

    </form>

</body>
</html>