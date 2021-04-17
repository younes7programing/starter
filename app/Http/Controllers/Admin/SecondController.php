<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('showString1');
    }

    public function showString()
    {
        return 'show string';
    }

    public function showString1()
    {
        return 'show string';
    }
}
