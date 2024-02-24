<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function articles($articleId){
        return"Halaman Artikel dengan ID $articleId";
    }
} 
//public function about(){
        //return'Nama : Galihwahyu <br> NIM : 2141762095';
    //}
//public function index(){
        //return'Selamat Datang';
    //}