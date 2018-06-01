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

    function callView(){
        $data = [1,2,3,4,5,6,4,3,2];
        $str = "Name";
        //return view('home',['data'=>$data, 'str'=>$str]);
        return view('home',compact('data','str'));
    }
    // function callView(){
        
    //     //return view('user.home');
    //     return view('home');
    // }


    function getTypePage(){
        $data = 1;
        return view('user.type', compact('data'));
    }
    
    function getDetailPage(){

        return view('user.detail');
    }
    
}
