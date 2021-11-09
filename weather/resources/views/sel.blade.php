<?php
use Illuminate\Support\Facades\DB;


$users = DB::table('precipitation')
            ->get();
            foreach ($users as $user) {
                echo $user->precipitation;
            }
            
