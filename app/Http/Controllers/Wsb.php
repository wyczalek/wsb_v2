<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Wsb extends Controller
{
    function index(){
        // return DB::select('SELECT * FROM user');
        // return DB::table('user')->get();

        // return DB::table('user')
        // ->where('surname','Nowak') 
        // ->get();

        // $data = DB::table('user')->count();

        // $data = DB::table('user')->first();

        // echo getype($data);
        // echo $data;
        $data = DB::table('user')->find(3);

        // echo '<pre>'; 
        //     print_r($data);
        // echo '</pre>'; 

        // return DB::table('user')
        // ->where('surname','Pawlak')
        // ->delete();

        // $data = DB::table('user')
        // ->insert(
        //     [
        //         'name'=>'Tomem',
        //         'surname'=>'Nowak',
        //         'brthday'=>'1980-10-22',
        //         'email'=>'tomek@gmail.com'
        //     ]
        // );

        $data = DB::table('user')
        ->where(
            [
                'name'=>'Agnieszka',
                'surname'=>'Kowalska'
            ]
        )
        ->update(
            [
                'name'=>'Anna',
                'surname'=>'Nowak'
            ]
        );

        echo '<pre>'; 
            print_r($data);
        echo '</pre>';
    }
}
