@extends('layout')
<div class="form" name="f2">        
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

    <style>
        input[type=text] {padding:5px; border:2px solid rgb(204, 204, 204); 
    -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    input[type=text]:focus {border-color:rgb(197, 10, 10); }
    
    input[type=submit] {    
  width: 130px;
  height: 40px;
  color: #fff;
  border-radius: 5px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background:rgba(17, 20, 167, 0.781) ;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
   box-shadow:inset 2px 2px 2px 0px rgba(187, 9, 9, 0.5),
   7px 7px 20px 0px rgba(245, 48, 48, 0.1),
   4px 4px 5px 0px rgba(235, 38, 38, 0.1);
  outline: none;
}
input[type=submit] {
  background: rgb(8, 55, 185);
  border: none;
  z-index: 1;
}
input[type=submit]:after {
  position: absolute;
  content: "";
  width: 100%;
  height: 0;
  top: 0;
  left: 0;
  z-index: -1;
  border-radius: 5px;
  background-color: #eaf818;
  background-image: linear-gradient(315deg, #eaf818 0%, #f6fc9c 74%);
   box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5);
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  transition: all 0.3s ease;
}
input[type=submit]:hover {
  color: #000;
}
input[type=submit]:hover:after {
  top: auto;
  bottom: 0;
  height: 100%;
}
input[type=submit]:active {
  top: 2px;
}




    
    
      input[type=submit]:active {
      box-shadow: none;
      -webkit-transform: translate(-7px, 8px);
      transform: translate(-7px, 8px);} 
    
        
    </style>
    </div>