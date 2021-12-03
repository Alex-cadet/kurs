<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body">
    <div class="main">
        <a href="/">←На главную</a>
    </div>
    <H1 style="color:black;text-align:center">Создание</H1>
    <div class="form">
    <form method="POST" action="">
{{-- Состав населения --}}
        <h3 style="color:black;text-align:center">Состав населения</h3>
        <input name="id" type="text" placeholder="id">
        <input name="adults" type="text" placeholder="Взрослые">
        <input name="child" type="text" placeholder="Дети">
        <input name="pensioners" type="text" placeholder="Пенсионеры">
        <input type="submit" value="Добавить">
        @csrf
    </form>
    </div>
{{-- Погода --}}
    <div class="form">
        <form method="POST" action="">
            <h3 style="color:black;text-align:center">Погода</h3>
            <input name="id_weather" type="text" placeholder="id">
            <input name="temperature" type="text" placeholder="Температура">
            
            {{-- wind --}}
            
            <div class="box">
                <select name="wind" id="" size=1>
                <?php
                $users = DB::table('wind')
                        ->get();
                        foreach ($users as $user) {
                            echo "<option>$user->wind</option>";   
                        }
                ?>    
                </select>
            </div>
            {{-- precipitation --}}
                <div class="box">
                    <select name="precipitation" id="" size=1>
                    <?php
                    $users = DB::table('precipitation')
                            ->get();
                            foreach ($users as $user) {
                                echo "<option>$user->precipitation</option>";   
                            }
                    ?>    
                    </select>
                </div>
            {{-- atmospheric_pressure --}}
                <div class="box">
                    <select name="atmospheric_pressure" id="" size=1>
                    <?php
                    $users = DB::table('atmospheric_pressure')
                            ->get();
                            foreach ($users as $user) {
                                echo "<option>$user->atmospheric_pressure</option>";   
                            }
                    ?>    
                    </select>
                </div>
            {{-- region --}}
                <div class="box">
                    <select name="region" id="" size=1>
                    <?php
                    $users = DB::table('region')
                            ->get();
                            foreach ($users as $user) {
                                echo "<option>$user->id</option>";   
                            }
                    ?>    
                    </select>
                </div>
            {{-- cloudiness --}}
                <div class="box">
                    <select name="cloudiness" id="" size=1>
                    <?php
                    $users = DB::table('cloudiness')
                            ->get();
                            foreach ($users as $user) {
                                echo "<option>$user->cloudiness</option>";   
                            }
                    ?>    
                    </select>
                </div>
                <input type="date" id="date" name="date"/>
                <input type="submit" value="Добавить">
            @csrf
        </form>
        </div>

    <style>
        .main{text-align: left;}
        .body{background-color: #008000;}
        .form{margin-top: 50px;}
        .box {
        display: inline-block; /*располагаем блоки в ряд по горизонтали*/
        margin-right: 0.15em;
         }
    </style>

</body>
</html>
