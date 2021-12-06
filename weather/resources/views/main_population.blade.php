<div class="form">
    <form method="POST" action="">
        <h3 style="color:black;text-align:center">Население</h3>
        @extends('layout')
        @section('mian_create')
        <input name="id" type="text" placeholder="id">
        <input name="count_people" type="text" placeholder="Число жителей">
        <input name="citizen_count" type="text" placeholder="Доля городского населения">
        {{-- composition_of_population --}}
        
        <div class="box">
            <label for=""> Код возрастного состава населения региона </label>
            <select name="composition_of_population" id="" size=1>
            <?php
            $composition_of_populations = DB::table('composition_of_population')
                    ->get();
                    foreach ($composition_of_populations as $composition_of_population) {
                        echo "<option>$composition_of_population->ID</option>";   
                    }
            ?>    
            </select>
        </div>
        <input type="submit" value="Отослать">
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
background: linear-gradient(#ec482b, #f54323);}

input[type=submit]:active {
box-shadow: none;
-webkit-transform: translate(-7px, 8px);
transform: translate(-7px, 8px);} 
@endsection  

</style>
</body>
</html>