<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Погода в регионе</title>
</head>
<body bgcolor="#89AC76">
    <h1 style="color:black;text-align:center">Курсовая работа</h1>
    <h2 style="color:#400080;text-align:center";">Погода в регионах</h2>
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
    </div>
 <div class="crud">
     <div class="button">
         <h3>C</h3>
         <button id=b1 onclick="window.location.href='create'">Create</button>
     </div>
     <div class="button">
        <h3>R</h3>
        <button id=b2 onclick="window.location.href='raed'">Read</button>
     </div>
     <div class="button">
        <h3>U</h3>
        <button id=b3>Update</button>
     </div>
     <div class="button">
        <h3>D</h3>
        <button id=b4>Delete</button>
     </div>
 </div>  
<style>
    .wrapper{text-align: center;margin-top: 10px;}
    .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 1.25em;
         }
    .crud{text-align: center;margin-top: 50px;}
    .button{display: inline-block; margin-right: 1.25em;}
    #b1{background-color: green}
    #b2{background-color: blue}
    #b3{background-color: yellow}
    #b4{background-color: red}
</style>
 
</body>
</html>