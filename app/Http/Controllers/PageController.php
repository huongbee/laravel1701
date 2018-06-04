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
    
    function getContact(){
        return view('contact');
    }

    function postContact(Request $request){
        $request->validate([
            'fullname'=>'required| min:10|max: 50',
            'title'=>'required| min:10|max: 50',
            'message'=>'required',
            'password'=>'required|min:6',
            're_password'=>'required|min:6|same:password',            
            'email'=>'required|email'
        ],[
           'fullname.required' => 'Vui lòng nhập fullname',
           'fullname.min' => "Fullname ít nhất :min kí tự",
           'fullname.max' => "Fullname ko quá :max kí tự",
           're_password.same' => "Pw không giống nhau",
        ]); 

        echo $request->fullname;
        echo $request->input('tilte');
        dd($request->input());

        //fullname. title: require, min:10, max: 50
        //email: require, valid,
        //messages: require
    }
}
