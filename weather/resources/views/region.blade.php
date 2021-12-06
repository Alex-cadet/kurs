<div class="form">
    <form method="POST" action="">
        <h3 style="color:black;text-align:center">Регион</h3>
        <input name="id" type="text" placeholder="id">
        <input name="name" type="text" placeholder="Название">
        <input name="square" type="text" placeholder="Площадь">
        <input name="avia_connection" type="text" placeholder="Авиасообщение">
        {{-- type_of_region --}}
        
        <div class="box">
            <select name="type_of_region" id="" size=1>
            <?php
            $type_of_regions = DB::table('type_of_region')
                    ->get();
                    foreach ($type_of_regions as $type_of_region) {
                        echo "<option>$type_of_region->type_of_region</option>";   
                    }
            ?>    
            </select>
        </div>

{{-- ecology_state --}}
        
<div class="box">
    <label for="">Код эко статуса</label>
    <select name="ecology_state" id="" size=1>
    <?php
    $ecology_states = DB::table('ecology_state')
            ->get();
            foreach ($ecology_states as $ecology_state) {
                echo "<option>$ecology_state->id</option>";   
            }
    ?>    
    </select>
</div>

{{-- population --}}
        
<div class="box">
    <label for="">Код населения</label>
    <select name="population" id="" size=1>
    <?php
    $populations = DB::table('population')
            ->get();
            foreach ($populations as $population) {
                echo "<option>$population->id</option>";   
            }
    ?>    
    </select>
</div>

        <input type="submit" value="Ввести">
        @csrf
    </form>
    </div>
    @extends('layout')
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
background: linear-gradient(#dc2bec, #b735eb);}

input[type=submit]:active {
box-shadow: none;
-webkit-transform: translate(-7px, 8px);
transform: translate(-7px, 8px);} 


</style>
</body>
</html>