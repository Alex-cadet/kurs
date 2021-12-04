<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background:#8d8401e8">
    <div class="main">
        <a href="/">На главную</a>
    </div>
    <H1 style="color:black;text-align:center">Изменение</H1>
    <form action="" method="POST">
        <label for="">Поменять у региона</label>
        <div class="box">
            <select name="region" id="" size=1>
            <?php
            $regions = DB::table('region')
                    ->get();
                    foreach ($regions as $region) {
                        echo "<option>$region->name</option>";   
                    }
            ?>    
            </select>
        </div>
        <label for=""> значение типа региона на </label>
        <div class="box">
            <select name="type_of_region" id="" size=1>
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
    <div class='region'>
    <?php
    use App\Models\region;
    foreach (region::all() as $reg)
    {
        echo "<font color='white'>".$reg->id."</font>"." ".$reg->name ." ".$reg->type_of_region."<br>";
    }
    ?> 
    </div>
    <style>
        .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 0.15em;
         }
         .region{margin-top: 50px;}
    </style>
</body>
</html>