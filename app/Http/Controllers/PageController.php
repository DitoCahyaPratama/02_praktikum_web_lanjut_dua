<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        echo "Selamat Datang";
    }
    function about(){
        echo "Dito Cahya Pratama - 1941720030";
    }
    function articles($id){
        echo "Halaman Artikel dengan Id ".$id;
    }
}
