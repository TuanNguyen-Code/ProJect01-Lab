<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class quanlitaikhoan extends Controller
{
    //
    public function index(){
        return "<h1>Hello There.</h1>";
    }
    //create form
    public function create(){
        return view('TaoTaiKhoan');
    }
    public function show(){
        return view('Detail Account');
    }
    // action return data to view
    public function showdata(){
        // tạo mock data
        $data = array('2310900114','Nguyễn Minh Tuấn');
        return view('Showdata', ['NMTdata'=>$data]);
    }
    //action return list data to view
    public function listAccount(){
        $data = array(
            ["id"=>1,"Username"=>"Nguyễn Minh Tuấn","Password"=>"12345678","Lastname"=>"Tuấn"],
            ["id"=>2,"Username"=>"Nguyễn Viết Đăng","Password"=>"12345678","Lastname"=>"Đăng"]
        );
        return view('Account-List', ['list'=>$data]);
    }
    // action connect DB, get data to view
    public function GETALL(){
        // đọc dữ liệu từ bảng trong sql
        $data = DB::table('account_table')->get();
        return view('getall', ['list'=>$data]);
    }
}
