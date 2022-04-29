<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>El numero digitado es: {{$numero1}} </h1>
    {{$a=0;}}
    @while ($a <= $numero1) <br>
        {{$a+=1;}}
       {{$numero1 . "*".$a . "=". $numero1*$a;}}
    @endwhile
    
</body>
</html>