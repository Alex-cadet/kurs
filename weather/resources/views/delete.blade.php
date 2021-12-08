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
        <label for="" style="font-size:20px; font-weight:bold" >Удалите строку из таблицы "Погода", указав id:</label>
        <input type="text" name="weaId">
        <input type="submit" value="Удалить">
        @csrf
    </form>
    <div class="box">
    <table class="t1" border=2 align="center">
        <tr id='r1'>
            <td>id</td>
            <td>Ветер</td>
            <td>Атмосферное давление</td>
            <td width="100">Дата</td>
            <td>Регион</td>
            <td>Облачность</td>
            <td>Осадки</td>
            <td>Температура (ощущение)</td>
     <?php
    use App\Models\weather;
    $weather = new weather();
    $regWea = weather::join('region','region_id','=','region.id')
    ->get(['weather.*','region.*']);
    foreach ($regWea as $wea)
    {   
        $tempStatus = $wea->temperature;
        
        $tempStatus = $weather->AddDegree($tempStatus);
        
        if($tempStatus>0){  
            echo          
                "<tr style='background-color: #f1737a'>        
                 <td>".$wea->PK."</td>          
                 <td>".$wea->wind."</td>
                 <td>".$wea->atmospheric_pressure."</td>
                 <td>".$wea->date."</td>
                 <td>".$wea->name."</td>
                 <td>".$wea->cloudiness."</td>
                 <td>".$wea->precipitation."</td>
                 <td>".$tempStatus."</td>
                 </tr>";
        }
        elseif($tempStatus==0) {
            echo          
                "<tr style='background-color: #6ebe2b'>      
                 <td>".$wea->PK."</td>  
                 <td>".$wea->wind."</td>
                 <td>".$wea->atmospheric_pressure."</td>
                 <td>".$wea->date."</td>
                 <td>".$wea->name."</td>
                 <td>".$wea->cloudiness."</td>
                 <td>".$wea->precipitation."</td>
                 <td>".$tempStatus."</td>
                 </tr>";
        }
        elseif ($tempStatus<0) {
            echo
                "<tr style='background-color: #16d7f1'>
                <td>".$wea->PK."</td>        
                <td>".$wea->wind."</td>
                <td>".$wea->atmospheric_pressure."</td>
                <td>".$wea->date."</td>
                <td>".$wea->name."</td>
                <td>".$wea->cloudiness."</td>
                <td>".$wea->precipitation."</td>
                <td>".$tempStatus."</td>
                </tr>";
        }
    }
    ?>
    </table>
    </div> 
    <style>
        .box{
            margin-top: 50px;

        }
        .t1{
            background-color: #86225e;  
            color: rgb(0, 12, 12);      
            font-weight: 200;
            margin-left: 100px;


        }
        .t1 tr{
            font-weight: bold;
        }
        #r1{
            background-color: rgb(1, 1, 14);
            color: aliceblue
        
        }
    </style>

@endsection
</body>
</html>