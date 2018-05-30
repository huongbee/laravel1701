<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function getHomePage(){
        echo __CLASS__;
        echo "<br>";
        echo __FUNCTION__;
    }

    function getHomePage2($p){
        echo $p;
    }

    function getHomePage3(Request $request){
        echo "1234234";
        echo '<br>';
        echo $request->product;
    }
    
}
