<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function __construct()
    {
        $this->middlewear('auth')->except('showusername2');
    }

    public function showusername()
    {
        return 'worker';
    }
    public function showusername2()
    {
        return 'worker2';
    }
    public function showusername3()
    {
        return 'worker3';
    }
    public function showusername4()
    {
        return 'worker4';
    }
}
