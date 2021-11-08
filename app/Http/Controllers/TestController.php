<?php

namespace App\Http\Controllers;

use App\Events\test1;
use App\Events\test2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    //


    public function  test1(){
        echo __FUNCTION__;
       // Log::info("handleTest1:",[]);
        event(new test1());
    }

    public function test2(){
        echo __METHOD__;
        Log::info('test2');
        event(new test2());
    }

}

