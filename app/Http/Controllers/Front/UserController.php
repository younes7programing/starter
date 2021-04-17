<?php


namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function showUserName()
    {
        return 'Younes From Front Controller';
    }

    public function getIndex()
    {
        $data = [];
        $data['name'] = "Younes";
        $data['age'] = 27;
        return view('welcome', $data);
    }
}
