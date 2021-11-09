<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Погода в регионе</title>
</head>
<body bgcolor="#6fd629">
    <h1 style="color:black;text-align:center">Курсовая работа</h1>
    <h2 style="color:cyan;text-align:center";">Погода</h2>
    <button onclick="window.location.href='sel'" style="color:red;margin:auto;
    display:block;background-color:yellow;top:50%"">Открыть</button>
<div class="wrapper">
    <div class="box">
    <select name="" id="" size=1>
    <?php
    use Illuminate\Support\Facades\DB;
    $users = DB::table('precipitation')
            ->get();
            foreach ($users as $user) {
                echo "<option>$user->precipitation</option>";   
            }
    ?>    
    </select>
    </div>

    <div class="box">
    <select name="" id="" size=1>
    <?php
    $users = DB::table('age_category')
            ->get();
            foreach ($users as $user) {
                echo "<option>$user->age_category</option>";   
            }
    ?>    
    </select>
    </div>

    <div class="box">
    <select name="" id="" size=1>
    <?php
    $users = DB::table('air_pollution_class')
            ->get();
            foreach ($users as $user) {
                echo "<option>$user->air_pollution_class</option>";   
            }
    ?>    
    </select>
    </div>

    <div class="box">
    <select name="" id="" size=1>
    <?php
    $users = DB::table('atmospheric_pressure')
            ->get();
            foreach ($users as $user) {
                echo "<option>$user->atmospheric_pressure</option>";   
            }
    ?>    
    </select>
    </div>
<style>
    .wrapper{text-align: center; /*располагаем содержимое блока по центру*/}
    .box {display: inline-block; /*располагаем блоки в ряд по горизонтали*/
          margin-right: 1.25em; /*убираем правый отступ между блоками*/
}
</style>
</div>
    
</body>
</html>