<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#30309b" >    
    @extends('layout_but')
    @section('butt')
        
    <H1 style="color:black;text-align:center">Выборка данных</H1>
    <div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Таблицы</label>
    {{-- <input type="radio" name="inset" value="" id="tab_2">
    <label for="tab_2">Вкладка №2</label> --}}

    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Параметры</label>

    <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Запросы</label>
                                    {{-- Таблицы  --}}


                                    {{--1 Возрастной состав региона --}}
    <div class="txt_1" id="t1">
        <h4 style="color:black;text-align:left; ">1</h2>
        <h2 style="color:black;text-align:center; background-color: #80ff00; width:350px;">
            Возрастной состав региона</h2>
        <button onclick="(document.getElementById('tab1').style.display='block')"class="custom-btn btn-12"><span>Таблицу</span><span>Открой</span></button>
        <button onclick="(document.getElementById('tab1').style.display='none')"class="custom-btn btn-12" id="close"><span>Таблицу</span><span>Закрой</span></button>

        <div id="tab1">
            <table border="2" align="center" style="background-color: cadetblue">
                <tr bgcolor=yellow><td> id </td>
                <td>Дети</td>
                <td>Взрослые</td>
                <td>Пенсионеры</td></tr>
                    <?php
                    use Illuminate\Support\Facades\DB;
                    $users = DB::table('composition_of_population')
                                ->get();
                                foreach ($users as $user) 
                                {
                                    echo "<tr><td>". $user->ID."</td>";
                                    echo "<td align='center'>". $user->child."</td>";
                                    echo "<td align='center'>". $user->adults."</td>";
                                    echo "<td align='center'>". $user->pensioners."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>

                                                {{--2 Население --}}

    <div class="txt_1" id="t2">
        <h4 style="color:black;text-align:left">2</h2>
        <h2 style="color:black;text-align:center; background-color: #80ff00; width:150px">Население</h2>
        <button onclick="(document.getElementById('tab2').style.display='block')"class="custom-btn btn-12"><span>Таблицу</span><span>Открой</span></button>
        <button onclick="(document.getElementById('tab2').style.display='none')"class="custom-btn btn-12" id="close"><span>Таблицу</span><span>Закрой</span></button>
        <div id="tab2" id="tab2">
            <table border="2" align="center" style="background-color: cadetblue">
                <tr bgcolor=yellow><td>id</td>
                <td>Число жителей</td>
                <td>Возрастной состав (код)</td>
                <td>Доля городскоого населения</td></tr>
                    <?php
                    $peoples = DB::table('population')
                                ->get();
                                foreach ($peoples as $people) 
                                {
                                    echo "<tr><td>".$people->id."</td>";
                                    echo "<td align='left'>".$people->count_people."000"." чел."."</td>";
                                    echo "<td align='left'>".$people->composition_of_population."</td>";
                                    echo "<td align='left'>".$people->citizen_count."%"."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>


                                                {{--3 Регион --}}

<div class="txt_1" id="t3">
        <h4 style="color:black;text-align:left">3</h2>
        <h2 style="color:black;text-align:center; background-color: #80ff00; width:150px">Регион</h2>
        <button onclick="(document.getElementById('tab3').style.display='block')"class="custom-btn btn-12"><span>Таблицу</span><span>Открой</span></button>
        <button onclick="(document.getElementById('tab3').style.display='none')"class="custom-btn btn-12" id="close"><span>Таблицу</span><span>Закрой</span></button>
        <div id="tab3">
            <table border="2" align="center" style="background-color: cadetblue">
                <tr bgcolor=yellow>
                <td>id</td>
                <td>Название</td>
                <td>Площадь</td>
                <td>Авиасообщение</td>
                <td>Тип региона</td>
                <td>Экологический статус (код)</td>
                <td>Население (код)</td></tr>
                    <?php
                    $regs = DB::table('region')
                                ->get();
                                foreach ($regs as $reg) 
                                {
                                    echo "<tr><td>".$reg->id."</td>";
                                    echo "<td align='left'>".$reg->name."</td>";
                                    echo "<td align='left'>".$reg->square." км"."&sup2"."</td>";
                                    echo "<td align='left'>".$reg->avia_connection."</td>";
                                    echo "<td align='left'>".$reg->type_of_region ."</td>";
                                    echo "<td align='left'>".$reg->ecology_state_id ."</td>";
                                    echo "<td align='left'>".$reg->population_id ."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>


                                                    {{--4 Эклолгический статус --}}
    <div class="txt_1" id="t4">
        <h4 style="color:black;text-align:left">4</h2>
        <h2 style="color:black;text-align:center; background-color: #80ff00; width:250px">
            Эклолгический статус</h2>
        <button onclick="(document.getElementById('tab4').style.display='block')"class="custom-btn btn-12"><span>Таблицу</span><span>Открой</span></button>    
        <button onclick="(document.getElementById('tab4').style.display='none')"class="custom-btn btn-12" id="close"><span>Таблицу</span><span>Закрой</span></button>
        <div id="tab4">
            <table border="2" align="center">
                <tr bgcolor=yellow>
                <td>id</td>
                <td>Количество ТС</td>
                <td>Число заводов</td>
                <td>Класс загрязнения воздуха</td>
                <td>Показатель загрязнения почвы</td></tr>
                    <?php
                    $ecos = DB::table('ecology_state')
                                ->get();
                                foreach ($ecos as $eco) 
                                {
                                    echo "<tr><td>".$eco->id."</td>";
                                    echo "<td align='left'>".$eco->count_vehicles." 000"."</td>";
                                    echo "<td align='left'>".$eco->count_plants."</td>";
                                    echo "<td align='left'>".$eco->air_pollution_class."</td>";
                                    echo "<td align='left'>".$eco->soil_erosion_indicator."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>



                                                {{--5 Погода --}}
    <div class="txt_1" id="t5">
        <h4 style="color:black;text-align:left">5</h2>
        <h2 style="color:black;text-align:center; background-color: #80ff00; width:150px">Погода</h2>
        <button onclick="(document.getElementById('tab5').style.display='block')"class="custom-btn btn-12"><span>Таблицу</span><span>Открой</span></button>        
        <button onclick="(document.getElementById('tab5').style.display='none')"class="custom-btn btn-12" id="close"><span>Таблицу</span><span>Закрой</span></button>
        <div id="tab5">
            <table border="2" align="center">
                <tr bgcolor=yellow>
                <td>id</td>
                <td>Температура</td>
                <td>Осадки</td>
                <td>Ветер</td>
                <td>Атмосферное давление</td>
                <td>Дата</td>
                <td>Код региона</td>
                <td>Облачность</td></tr>
                    <?php
                    $weas = DB::table('weather')
                                ->get();
                                foreach ($weas as $wea) 
                                {
                                    echo "<tr><td>".$wea->PK."</td>";
                                    echo "<td align='center'>".$wea->temperature."&#176"."C"."</td>";
                                    echo "<td align='left'>".$wea->precipitation ."</td>";
                                    echo "<td align='left'>".$wea->wind."</td>";
                                    echo "<td align='left'>".$wea->atmospheric_pressure ."</td>";
                                    echo "<td align='left'>".$wea->date."</td>";
                                    echo "<td align='center'>".$wea->region_id ."</td>";
                                    echo "<td align='left'>".$wea->cloudiness."</td></tr>";
                                }
                    ?>
            </table>
        </div>
    </div>


                                                        {{-- Параметры --}}

    <div id="txt_3">
    <div class="query">
        <div id="sq">
            <label for="" class="l1">Показать регионы, у которых площадь</label>
            <form action="/square" method="post">
            <select name="symbol">
                <option>больше</option>
                <option>меньше</option>
                <option>равно</option>
                <option>не равно</option>
            </select>
            <input type="text" placeholder="Площадь" name='square'>
            <input type="submit" value="Показать">
            @csrf
            </form>
        </div>
        <div></div>
    </div>    
</div>                                                   


    
                                            {{-- Запросы --}}

    <div id="txt_4">        
        <div class="query">
        <label for="" class="l2">Вывести регионы, где температура ниже нуля</label>
        <button class="open"  onclick="(document.getElementById('reg').style.display='block')">Открыть</button>
        <button class="close" onclick="(document.getElementById('reg').style.display='none')">Закрыть</button>
        <div></div>
        <div id="reg">
            <table border=1 class="t1">
                <tr><td style="background-color: #0e41f1; font-size: 24px;">Регион</td>
                    <td style="background-color: #0e41f1; font-size: 24px;">Температура</td>
                @foreach ($minus as $min)
                <tr><td>{{ $min->name}}</td><td>{{$min->temperature}}</tr>        
                @endforeach   
            </table>
        </div>     
        </div>
        <div class="query">
            <label for="" class="l2">Открыть по датам и возможности вылета промышленные регионы, в которых
                процент взрослого населения больше 30%</label>
            <button class="open" onclick="(document.getElementById('reg1').style.display='block')">Открыть</button>
            <button class="close" onclick="(document.getElementById('reg1').style.display='none')">Закрыть</button>
            <div></div>
            <div id="reg1">
                <table border=1 class="t1">
                    <tr><td style="background-color: #86e20c; font-size: 24px; width:100px">Дата</td>
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
    .t1{
        background-color: #C0C0C0);
        font-size: 20px;
        font-weight: bolder;
        }
    .l2{
        background-color: rgb(5, 90, 116);
        font-size: 20px;
        font-weight: bolder;
        }

    .l1{
        background-color: rgb(5, 90, 116);
        font-size: 20px;
        font-weight: bolder;
        }
    #sq{
        display:inline-flex;
    }
    .tabs { width: 1000px; padding: 0px; margin: 0 auto; text-align: center}
    .tabs>input { display: none; }
    .tabs>input:checked + label {
    color: #000000;
    border: 1px solid #C0C0C0;
    border-bottom: 1px solid #FFFFFF;
    background: #06a893;
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
    border: 1px solid hsl(30, 85%, 5%);
    background: #086ab9;}    
    .query{
        margin-top: 5px;
        position: relative;
        border: 2px solid rgb(63, 8, 8);
        align-content: stretch;
    }
    .open{background-color:#4aec4a}
    #close span {
  background: rgb(1, 17, 10);
  background: linear-gradient(0deg, rgb(15, 34, 2) 0%, rgb(14, 24, 1) 100%);
  display: block;
  position: absolute;
  width: 130px;
  height: 40px;
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  border-radius: 5px;
  margin:0;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .3s;
  transition: all .3s;
}
#tab_1:checked ~ .txt_1,
#tab_2:checked ~ #txt_2,
#tab_3:checked ~ #txt_3,
#tab_4:checked ~ #txt_4 { display: block; }
#reg{
    display: none;
    margin-top: 20px;}
#reg1,#reg2{
    display: none;
    margin-top: 20px;}
#tab1,#tab2,#tab3,#tab4,#tab5{
    background-color: rgb(14, 196, 241);
    display: none;
    margin-top: 5px;
    border: 2px solid rgb(63, 8, 8);
    }
.txt_1{
    display: inline-flexbox;
    margin:0 auto;
    text-align: center;
    align-self: center;
    width: 900px;
    background-color: #086ab9;
    margin-top: 10px;
    border: 2px solid rgb(63, 8, 8);
    float:center;
    /* height: 120px; */
}
#t1{
    background-image: url("/images/1.png");
}
#t2{background-image:url("/images/население.png"); }
#t3{background-image:url("/images/регион.jpg"); }
#t4{background-image:url("/images/экология.png"); }
#t5{background-image:url("/images/погода.jpg"); }

.custom-btn {
  width: 130px;
  height: 40px;
  color: rgb(124, 9, 9);
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}
.btn-12{
  position: relative;
  right: 20px;
  bottom: 20px;
  border:none;
  box-shadow: none;
  width: 130px;
  height: 40px;
  line-height: 42px;
  -webkit-perspective: 230px;
  perspective: 230px;
}
.btn-12 span {
  background: rgb(145, 6, 6);
  background: linear-gradient(0deg, rgb(114, 5, 14) 0%, rgb(85, 3, 17) 100%);
  display: block;
  position: absolute;
  width: 130px;
  height: 40px;
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  border-radius: 5px;
  margin:0;
  text-align: center;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .3s;
  transition: all .3s;
}
.btn-12 span:nth-child(1) {
  box-shadow:
   -7px -7px 20px 0px #fff9,
   -4px -4px 5px 0px #fff9,
   7px 7px 20px 0px #0002,
   4px 4px 5px 0px #0001;
  -webkit-transform: rotateX(90deg);
  -moz-transform: rotateX(90deg);
  transform: rotateX(90deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12 span:nth-child(2) {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
  -webkit-transform-origin: 50% 50% -20px;
  -moz-transform-origin: 50% 50% -20px;
  transform-origin: 50% 50% -20px;
}
.btn-12:hover span:nth-child(1) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
.btn-12:hover span:nth-child(2) {
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
 color: transparent;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
}

</style>
@endsection

</body>
</html>
