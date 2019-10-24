<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function themnhanvien(){
        return view('NhanVien.ThemNhanVien');
    }
}
