<?php

namespace App\Http\Controllers;

use App\Models\nmtNhacc;
use Illuminate\Http\Request;

class nmtNhaccController extends Controller
{
    public function List(){
        //Lấy dữ liệu từ DB thông qua ORM
        $nmtNhaccs = nmtNhacc::all();
        return view('nmtNhacc.List',['nmtNhaccs'=>$nmtNhaccs]);
    }
}
