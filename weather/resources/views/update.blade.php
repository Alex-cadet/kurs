<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/weather.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background:#8d8401e8">    
    @extends('layout_but')
    @section('butt')
        
    <H1 style="color:black;text-align:center">Внесение изменений в запись</H1>
    <form action="" method="POST">
        <label for="" class="region">Поменять у региона</label>
        <div class="box">
            <select name="region" id="s1" size=1 class="">
            <?php
            $regions = DB::table('region')
                    ->get();
                    foreach ($regions as $region) {
                        echo "<option>$region->name</option>";   
                    }
            ?>    
            </select>
        </div>
        <label for="" class="region"> значение типа региона на </label>
        <div class="box_update">
            <select name="type_of_region" id="s2" size=1>
            <?php
            $regions = DB::table('type_of_region')
                    ->get();
                    foreach ($regions as $region) {
                        echo "<option>$region->type_of_region</option>";   
                    }
            ?>    
            </select>
        </div>
        <input type="submit" value="Поменять">
        @csrf
    </form>

                                        {{-- Таблица --}}  

    <div >
        <table border=1 align="center" class='region'>          

     <?php
    use App\Models\region;
    //$sub = null;
    
     if(empty($sub))
     {
         foreach (region::all() as $reg)
            {  
             echo "<tr>
             <td>"."<font color='white'>".$reg->id."</td>
             <td>"."</font>".$reg->name."</td>".
             "<td >".$reg->type_of_region."</td>
             </tr>";
            }
     }
     else{
         foreach (region::all() as $reg)
         {
                if(($reg->name==$sub) and ($sub!=null))
                    {
                        echo "<tr>
                        <td>"."<font color='white'>".$reg->id."</td>
                        <td>"."</font>".$reg->name."</td>".
                        "<td style='background-color: #e9c5c7'>".$reg->type_of_region."</td>
                        </tr>";
                    }
                else
                    {
                        echo "<tr>
                        <td>"."<font color='white'>".$reg->id."</td>
                        <td>"."</font>".$reg->name."</td>".
                        "<td >".$reg->type_of_region."</td>
                        </tr>";
                    }
            }
        }
    ?>
    </table>
    </div>
@endsection 
</body>
</html>