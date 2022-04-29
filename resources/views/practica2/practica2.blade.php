<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{Route('resultado_pr2')}}" method="POST">
        {{ csrf_field() }}

        <label>Digite un numero</label>
        <input type="number" name="numero1">

        <input type="submit" name="btn_enviar" value="presionar">
    </form>

</body>
</html>