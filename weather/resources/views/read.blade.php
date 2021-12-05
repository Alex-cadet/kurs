<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#0000ff">
    <div class="main">
        <a href="/">На главную</a>
    </div>
    <H1 style="color:black;text-align:center">Чтение</H1>
    <div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Состав населения</label>
    <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Вкладка №2</label>

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Вкладка №3</label>

    <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Запросы</label>
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
    {{-- Запрос --}}
    
    <div id="txt_4">
        
        <div class="query">
        <label for="">Вывести регионы, где температура ниже нуля</label>
        <button class="open"  onclick="(document.getElementById('reg').style.display='block')">Показать</button>
        <button class="close" onclick="(document.getElementById('reg').style.display='none')">Скрыть</button>
        <div></div>
        <div id="reg">
            <table border=1>
                <tr><td style="background-color: #0e41f1; font-size: 24px;">Регион</td>
                    <td style="background-color: #0e41f1; font-size: 24px;">Температура</td>
                @foreach ($minus as $min)
                <tr><td>{{ $min->name}}</td><td>{{$min->temperature}}</tr>        
                @endforeach   
            </table>
        </div>     
        </div>
        <div class="query">
            <label for="">Показать по датам и возможности вылета промышленные регионы, в которых
                процент взрослого населения больше 30%</label>
            <button class="open" onclick="(document.getElementById('reg1').style.display='block')">Показать</button>
            <button class="close" onclick="(document.getElementById('reg1').style.display='none')">Скрыть</button>
            <div></div>
            <div id="reg1">
                <table border=1>
                    <tr><td style="background-color: #86e20c; font-size: 24px;">Дата</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Регион</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Доля взрослых</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Полёты</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Авиасообщение</td>
                        <td style="background-color: #86e20c; font-size: 24px;">Ветер</td><tr>
                    @foreach ($adReg as $ad)
                    <tr><td>{{$ad->date}}</td><td>{{ $ad->name}}</td><td>{{$ad->adults}}%
                        <td>{{$flySt->flyWeather($ad->avia_connection,$ad->wind)}}</td>
                        <td>{{$ad->avia_connection}}</td>
                        <td>{{$ad->wind}}</td></tr>        
                    @endforeach   
                </table>
            </div>     
            </div>           
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
    color: hsl(0, 75%, 36%);
    border: 1px solid #C0C0C0;
    background: rgb(128, 118, 216);
    cursor: pointer;}
    .tabs>div {
    display: none;
    padding: 12px;
    border: 1px solid hsl(32, 78%, 47%);
    background: #FFFFFF;}    
    .query{
        margin-top: 5px;
        border: 2px solid rgb(63, 8, 8);}
    .open{background-color:#4aec4a }
    .close{background-color:#f76d5b }
#tab_1:checked ~ #txt_1,
#tab_2:checked ~ #txt_2,
#tab_3:checked ~ #txt_3,
#tab_4:checked ~ #txt_4 { display: block; }
#reg{
    display: none;
    margin-top: 20px;}
#reg1{
    display: none;
    margin-top: 20px;}
</style>
</body>
</html>
