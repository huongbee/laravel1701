<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;

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
        // $request->validate([
        //     'fullname'=>'required| min:10|max: 50',
        //     'title'=>'required| min:10|max: 50',
        //     'message'=>'required',
        //     'password'=>'required|min:6',
        //     're_password'=>'required|min:6|same:password',            
        //     'email'=>'required|email'
        // ],[
        //    'fullname.required' => 'Vui lòng nhập fullname',
        //    'fullname.min' => "Fullname ít nhất :min kí tự",
        //    'fullname.max' => "Fullname ko quá :max kí tự",
        //    're_password.same' => "Pw không giống nhau",
        // ]); 

        $validator = Validator::make($request->all(), [
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

        if ($validator->fails()) {
            return Redirect::route('get-contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        echo $request->fullname;
        echo $request->input('tilte');
        dd($request->input());

        //fullname. title: require, min:10, max: 50
        //email: require, valid,
        //messages: require
    }

    function getForm(){
        return view('upload');
    }

    

    function postForm(Request $req){
        if($req->hasFile('image')){
            $file = $req->file('image');
            //dd($file);
            // echo $file->getClientSize();
            // echo $file->getClientMimeType();
            // echo $file->getClientOriginalExtension();
            // echo $file->getClientOriginalName();
            //move_uploaded_file();
            //$file->move('files',$file->getClientOriginalName());
            //echo "success";
            $size =  $file->getClientSize();

            $arrExt = ['png','jpg','gif'];
            $ext = $file->getClientOriginalExtension(); //png

            if($size < 1024*1024){
                if(in_array($ext,$arrExt)){
                    $name = $file->getClientOriginalName();
                    $newName = date('Y-m-d-H-i-s-',time()).$name;
                    $file->move('files',$newName);

                    echo "success";
                }
                else{
                    return redirect()->back()->with('error','File not allow!');
                }
                // $flag = false;
                // foreach($arrExt as $e){
                //     if($e == $ext){
                //         $flag = true;
                //     }
                // }
                // if($flag){
                //     //2018-6-6-18-47-34-a.png
                //     $name = $file->getClientOriginalName();
                //     $newName = date('Y-m-d-H-i-s-',time()).$name;
                //     $file->move('files',$newName);

                //     echo "success";
                // }
                // else{
                //     return redirect()->back()->with('error','File not allow!');
                // }
            }
            else{
                return redirect()->back()->with('error','File too large!');
            }
            //check file size
            //file type
            //rename

            //dd($file);
        }
        else{
            return redirect()->back()->with('error','Vui long chon file');
        }
    }

    function postUploadMultilpe(Request $req){
        if($req->hasFile('image')){
            $file  = $req->file('image');
            foreach($file as $f){
                $name = $f->getClientOriginalName();
                $f->move('files',$name);
            }
        }
        else{
            return redirect()->back()->with('error','Vui long chon file');
        }
        
    }
}
