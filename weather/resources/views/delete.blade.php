<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background:#d4343c">
    @extends('layout_but')
@section('butt')
    
    <h1 style="color:black;text-align:center">Удаление</h1>
    <form method="POST" action=''>
        <label for="">Удалите строку из таблицы "Погода", указав id:</label>
        <input type="text" name="weaId">
        <input type="submit" value="Удалить">
        @csrf
    </form>
    <div class="box">
     <?php
    use App\Models\weather;
    $weather = new weather();
    foreach (weather::all() as $wea)
    {   
        $tempStatus = $wea->temperature;
        $tempStatus = $weather->AddDegree($tempStatus);
        echo "<font color='white'>".$wea->PK.
            "</font>"." ".$wea->precipitation ." ".$tempStatus."<br>";
    }
    ?>
    </div> 
    <style>
        .box{margin-top: 50px;}
    </style>

@endsection
</body>
</html>