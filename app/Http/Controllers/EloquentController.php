<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\PageUrl;
use App\Categories;
use App\User;
use App\Role;
use App\Customers;

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
        // $data = PageUrl::with('products')
        //         ->limit(10)
        //         ->get();
        // $data = Products::with('pageUrlProduct')->limit(5)->get();
        // foreach($data as $p){
        //     echo $p->name;
        //     echo "<br>";
        //     echo $p->pageUrlProduct->url;
        //     echo "<hr>";
        // }
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
            // $data = Categories::with('products','pageUrl','products.pageUrlProduct')
            //         ->skip(6)->take(4)->get();

            // foreach($data as $key=>$loai){
            //     echo $key. '. '.$loai->name;
            //     echo "----";
            //     echo $loai->pageUrl->url;
            //     echo "<br>";
            //     foreach($loai->products as $sp){
            //         echo "- ".$sp->name;
            //         echo "::::";
            //         echo $sp->pageUrlProduct->url;
            //         echo "<br>";
            //     }
            //     echo "<hr>";
            // }

            // $data = Products::with('categories','pageUrlProduct','categories.pageUrl')->limit(10)->get();
            // foreach($data as $sp){
            //     echo "SP: ".$sp->name.'------'.$sp->pageUrlProduct->url;
            //     echo "<br>";
            //     echo "Thuoc loai: ".$sp->categories->name.'--------'.$sp->categories->pageUrl->url;
            //     echo "<hr>";
                
            // }

            // $data = User::with('role')->get();
            // foreach($data as $user){
            //     echo "DS quyen cua: ".$user->username." la: ";
            //     echo "<br>";
            //     foreach($user->role as $r){
            //         echo $r->id. ': '.$r->role;
            //         echo "<br>";
            //     }
            //     echo "<hr>";
            // }
            // $data = Role::with('user')->get();
            // foreach($data as $role){
            //     echo "DS user giu quyen: ".$role->role." la: ";
            //     echo "<br>";
            //     foreach($role->user as $u){
            //         echo $u->id. ': '.$u->username;
            //         echo "<br>";
            //     }
            //     echo "<hr>";
            // }

            // $data = Products::with('bill',"bill.cus")->limit(10)->get();
            // foreach($data as $p){
            //     echo "<b>".$p->name."</b>";
            //     echo "<br>Danh sach khach hang da mua : <br>";

            //     foreach($p->bill as $b){
            //         echo $b->id_customer.':'.$b->cus->name.'---'.$b->total;
            //         echo '<br>';
            //     }
            //     echo "<hr>";
            // }
            $data = Customers::with('billDetail')->get();
            dd($data);
    }
}
