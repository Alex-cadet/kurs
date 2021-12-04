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
    </div>