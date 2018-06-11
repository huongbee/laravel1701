<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryBuilderController extends Controller
{
    function index(){
        // $users = DB::table('users')->get(); //SELECT * FROM users
        // //dd($users);
        // foreach($users as $u){
        //     echo $u->email;
        //     echo "<br>";
        // }
        //$products = DB::table('products')->get();
        // $products = DB::table('products')
        //             ->where([
        //                 ['id','<=',10]
        //             ])
        //             ->select('name','price','detail')
        //             ->orderBy('id','DESC')
        //             ->offset(3)  // position
        //             ->limit(5)  //quantity
        //             ->get(); // loadMoreRows

        // $products = DB::table('products')
        //             ->where('id',1)->first(); //loadOneRow
        // echo $products->name;

        // $bill = DB::table('bills')
        //         ->whereDay('date_order',21)
        //         ->where([
        //             ['total','>=',100000000],
        //             ['id','=',4]
        //         ])
        //         ->get();
        // $bill = DB::table('bills')
        //         ->whereDay('date_order',21)
        //         ->where([
        //             ['total','>=',100000000],
        //             ['id','=',4]
        //         ])
        //         ->orWhere('id',5)
        //         ->get();
        
        // $products = DB::table('products')
        //             ->selectRaw('categories.name as TenLoai, products.name as TenSP, price')
        //             ->join('categories','categories.id','=','products.id_type')
        //             ->where('categories.id',5)
        //             ->get();

        // $products = DB::table('products')
        //             ->selectRaw('categories.name as TenLoai, products.name as TenSP, price')
        //             ->join('categories',function($join){
        //                 $join->on('categories.id','=','products.id_type');
        //                 $join->where('categories.id',5);
        //             })
        //             ->get();

        $products = DB::table('products')
                    ->selectRaw('categories.name as TenLoai, count(products.name) as tongSP')
                    ->join('categories','categories.id','=','products.id_type')
                    ->groupBy('categories.name')
                    ->havingRaw('count(products.name) >=5')
                    ->get();

        dd($products);
    }
}
