<div class="form">
    <form method="POST" action="">
        <h3 style="color:black;text-align:center">Экологический статус</h3>
        @extends('layout')
        @section('mian_create')
        <input name="id" type="text" placeholder="id">
        <input name="count_vehicles" type="text" placeholder="Количество ТС">
        <input name="count_plants" type="text" placeholder="Число заводов">

        {{-- air_pollution_class --}}
        
        <div class="box">
            <label for="">Класс загрязнения воздуха</label>
            <select name="air_pollution_class" id="" size=1>
            <?php
            $air_pollution_classs = DB::table('air_pollution_class')
                    ->get();
                    foreach ($air_pollution_classs as $air_pollution_class) {
                        echo "<option>$air_pollution_class->air_pollution_class</option>";   
                    }
            ?>    
            </select>
        </div>


        {{-- soil_erosion_indicator --}}
        
        <div class="box">
            <label for="">Показатель загрязнения почвы</label>
            <select name="soil_erosion_indicator" id="" size=1>
            <?php
            $soil_erosion_indicators = DB::table('soil_erosion_indicator')
                    ->get();
                    foreach ($soil_erosion_indicators as $soil_erosion_indicator) {
                        echo "<option>$soil_erosion_indicator->soil_erosion_indicator</option>";   
                    }
            ?>    
            </select>
        </div>
        
        <input type="submit" value="Создать">
        @csrf
    </form>
    </div>
<style>
input[type=text] {padding:5px; border:2px solid rgb(204, 204, 204); 
-webkit-border-radius: 5px;
border-radius: 5px;
}
input[type=text]:focus {border-color:rgb(197, 10, 10); }

input[type=submit] {padding:5px 15px; background:rgb(204, 4, 187); border:0 none;
cursor:pointer;
-webkit-border-radius: 28px;
border-radius: 25px;
position: relative;
display: inline-block;
font-weight: bold;
color: #000;
text-decoration: none;
text-shadow: -2px 2px rgba(255,255,255,.3);
line-height: 1.1;
padding: .5em 3em .5em .6em;
background: linear-gradient(#2b78ec, #0cb1f1);}

input[type=submit]:active {
box-shadow: none;
-webkit-transform: translate(-7px, 8px);
transform: translate(-7px, 8px);} 

@endsection  
</style>
</body>
</html>