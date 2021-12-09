<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@extends('layout_but')
@section('butt')
<body class="bb">
    <div >
        <table border=1 id="reg2" class="tabSq">
            <tr><td style="background-color: #0e41f1; font-size: 24px;">Регион</td>
                <td style="background-color: #0e41f1; font-size: 24px;">Площадь</td>                    
            @foreach ($regSquare as $regSquar)
            <tr><td>{{ $regSquar->name}}</td><td>{{$regSquar->square}}</tr>        
            @endforeach   
        </table>
    </div>   

    
@endsection
   
    <style>

.bb{
   
    margin-top: 20px;
    background-color: #086ab9;
    font-size: 22px;
}

#reg2{
    margin-top: 20px;
    margin-left: 500px;
    background-color: #0da8f2;
}
    </style>
</body>
</html>