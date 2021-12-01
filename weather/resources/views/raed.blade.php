<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <a href="/">На главную</a>
    </div>
    <div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Состав населения</label>
    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Вкладка №2</label>

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Вкладка №3</label>

    <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Вкладка №4</label>
    <div id="txt_1">
    <h3 style="color:black;text-align:center">Состав населения (таблица)</h3>
    <table border="2" align="center">
        <tr bgcolor=yellow><td> id </td>
        <td>Дети</td>
        <td>Взрослые</td>
        <td>Пенсионеры</td></tr>

<?php
use Illuminate\Support\Facades\DB;


$users = DB::table('composition_of_population')
            ->get();
            foreach ($users as $user) {
                echo "<tr><td>". $user->ID."</td>";
                echo "<td align='center'>". $user->child."</td>";
                echo "<td align='center'>". $user->adults."</td>";
                echo "<td align='center'>". $user->pensioners."</td></tr>";
            }
?>
</table>
    </div>
</div>
<style>
    .tabs { width: 100%; padding: 0px; margin: 0 auto; }
    .tabs>input { display: none; }
    .tabs>input:checked + label {
    color: #000000;
    border: 1px solid #C0C0C0;
    border-bottom: 1px solid #FFFFFF;
    background: #FFFFFF;
    }
    .tabs>label {
    display: inline-block;
    padding: 7px;
    margin: 0 -5px -1px 0;
    text-align: center;
    color: #666666;
    border: 1px solid #C0C0C0;
    background: #E0E0E0;
    cursor: pointer;}
    .tabs>div {
    display: none;
    padding: 12px;
    border: 1px solid #C0C0C0;
    background: #FFFFFF;
}
    #tab_1:checked ~ #txt_1,
    #tab_2:checked ~ #txt_2,
#tab_3:checked ~ #txt_3,
#tab_4:checked ~ #txt_4 { display: block; }
</style>
</body>
</html>
