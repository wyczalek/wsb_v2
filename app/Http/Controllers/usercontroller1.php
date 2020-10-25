<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller1 extends Controller
{
    function index(Request $req)
    {
        // echo 'Kontroler';
        //return $req->input();
        //return $req->path();
        //return $req->url();
        //return $req->method();
        //return $req->input('address');

    // $this->validate($req,['address' => 'required'], ['address.required' => 'E-mail nie może być pusty']);
    // $this->validate($req,['surname' => 'required'], ['surname.required' => 'Nazwisko nie może być puste']);
    // $this->validate($req,['address' => 'required'], ['address.email' => 'Niepoprawny adres e-mail']);
    // $this->validate($req,['surname' => 'required|min'], ['surname.min' => 'Nazwisko musi mieć co najmniej 2 znaki']);


        $req->validate(
            [
              'address' => 'required | email',
              'surname' => 'required | min:2',
            ],
            [
                'address.required' => 'E-mail nie może być pusty',
                'surname.required' => 'Nazwisko nie może być puste',
                'address.email' => 'Niepoprawny adres e-mail',
                'surname.min' => 'Nazwisko musi mieć co najmniej 2 znaki'
            ]
        );

        return $req->input();
    }
}
