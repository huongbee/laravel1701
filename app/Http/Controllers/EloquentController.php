<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\PageUrl;
use App\Categories;

class EloquentController extends Controller
{
    function index(){
        //$products = Products::get();
        // $products = Products::skip(0)->take(10)->get();
        // foreach($products as $p){
        //     echo $p->name;
        //     echo "<br>";
        // }

        // $products = Products::select('name','price','detail')
        //             ->orderBy('price','DESC')
        //             ->orderBy('name','ASC')
        //             ->limit(10)
        //             ->get();
        // dd($products);


        //select * from products inner join pu on ....
        // $data = Products::select('name')
        //         ->with('pageUrl')
        //         ->limit(10)
        //         ->get();
        // dd($data);
        // $data = PageUrl::select('url')
        //         ->with('products')
        //         ->limit(10)
        //         ->get();
        // dd($data);

        /*
        1. ip X
            -  name 1
            - 
            -
        2. ip 8
            - name 3
            -
            - 

            */
        $data = Categories::with('products')->get();

        foreach($data as $key=>$loai){
            echo $key. '. '.$loai->name;
            echo "<br>";
            foreach($loai->products as $sp){
                echo "- ".$sp->name;
                echo "<br>";
            }
            echo "<hr>";
        }
        dd($data);
    }
}
