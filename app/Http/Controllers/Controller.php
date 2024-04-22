<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function signUp(Request $request) {

        $name = $request->input('name');

        DB::insert("insert into user_expenses (user_name) values ('$name')");

        session(['sessionName' => $name]);
        $sessionName = session('sessionName');


        return view('app', ['sessionName' => $sessionName]);
    }   

    public function logOut(Request $request) {

        $request->session()->flush();
        $request->session()->forget('sessionName');

        return view('welcome');

    }

    public function showAll(Request $request) {

       $names = DB::select('select user_name from user_expenses');

       return view('accounts', ['names' => $names]);
    }

}
