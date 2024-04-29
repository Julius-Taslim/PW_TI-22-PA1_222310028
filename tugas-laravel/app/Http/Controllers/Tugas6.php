<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class Tugas6 extends Controller
{
    // Latihan no 1
    // public function index(){
    //     return "Welcome to the Profile Page!";
    // }
    public function identity()
    {
        return "Welcome to the Profile Page sub menu identity";
    }
    public function family()
    {
        return "Welcome to the Profile Page sub menu family";
    }
    //Latihan no 2 dan 3
    // public function index(){
    //     $data = array();
    //     $matakuliah[] = array("title"=>"Matematika","type"=>"Diskrit","rate"=>4);
    //     $matakuliah[] = array("title"=>"Matematika","type"=>"Aljabar Linear","rate"=>3);
    //     $matakuliah[] = array("title"=>"Basis Data","type"=>"DDL","rate"=>2);
    //     $matakuliah[] = array("title"=>"Bahasa Inggris","type"=>"Speaker","rate"=>1);
    //     $data['matakuliah'] = $matakuliah;
    //     return $data;
    // }

    public function index()
    {
        $data = array();
        $matakuliah[] = array("title" => "Matematika", "type" => "Diskrit", "rate" => 4);
        $matakuliah[] = array("title" => "Matematika", "type" => "Aljabar Linear", "rate" => 3);
        $matakuliah[] = array("title" => "Basis Data", "type" => "DDL", "rate" => 2);
        $matakuliah[] = array("title" => "Bahasa Inggris", "type" => "Speaker", "rate" => 1);
        $data['matakuliah'] = $matakuliah;
        return view("tugas6.latihan4") -> with("data",$data);
    }

    public function latihan()
    {
        return view('tugas6.latihan');
    }
}
