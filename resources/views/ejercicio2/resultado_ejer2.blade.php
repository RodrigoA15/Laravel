<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Su nombre es: {{$nombre}}</p>
    <p>Sus horas trabajadas son: {{$horas}}</p>
    <p>Valor de hora: {{$valorhora}}</p>
    <p>Su bonificacion es de: {{$bonificacion}}</p>
    <p>Auxilio de Transporte: {{$Aux}}</p>
    <p>Su credito es de: {{$credito}}</p><br>

    <h2>Su salario es: {{number_format($salario)}}</h2>

</body>
</html>