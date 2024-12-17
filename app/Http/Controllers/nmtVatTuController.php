<?php

namespace App\Http\Controllers;

use App\Models\nmtVatTu;
use Illuminate\Http\Request;

class nmtVatTuController extends Controller
{
    public function List(){
        //Lấy dữ liệu từ DB thông qua ORM
        $nmtvattus = nmtVatTu::all();
        return view('nmtNhacc.List',['nmtNhaccs'=>$nmtvattus]);
    }
}
