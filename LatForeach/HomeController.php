<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){
   $data = array();
   $data ['title'] = "Blade";
   $students[] = array ("No"=> 1,"npm"=>212310015 , "name"=>"Dyas Tri Apriliansyah", "Gender"=>"Laki-laki", "Alamat"=> "JL Senin");
   $students[] = array ("No"=> 2,"npm"=>212310016 , "name"=>"Dyas Tri Apriliansyah", "Gender"=>"Laki-laki", "Alamat"=> "JL Senin");
   $students[] = array ("No"=> 3,"npm"=>212310017 , "name"=>"Dyas Tri Apriliansyah", "Gender"=>"Laki-laki", "Alamat"=> "JL Senin");
   $students[] = array ("No"=> 4,"npm"=>212310018 , "name"=>"Dyas Tri Apriliansyah", "Gender"=>"Laki-laki", "Alamat"=> "JL Senin");
   $students[] = array ("No"=> 5,"npm"=>212310019 , "name"=>"Dyas Tri Apriliansyah", "Gender"=>"Laki-laki", "Alamat"=> "JL Senin");
   $students[] = array ("No"=> 6,"npm"=>212310010 , "name"=>"Dyas Tri Apriliansyah", "Gender"=>"Laki-laki", "Alamat"=> "JL Senin");
  
   $data['students']= $students;
    return view('home')->with("data", $data);
 }   
}
