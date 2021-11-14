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
    <table border="2" align="center">
        <tr bgcolor=yellow><td>id</td>
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
</body>
</html>