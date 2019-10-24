<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\nhadautu;
use App\bds;

class NhaDauTuController extends Controller
{
    public function themnhadautu(){
        return view('NDT.ThemNDT');
    }

    public function postthemnhadautu(Request $request){
        $NDT_Ten = $request->input('NDT_Ten');
        $NDT_DiaChi = $request->input('NDT_DiaChi');
        $NDT_SDT = $request->input('NDT_SDT');
        $NDT_Email = $request->input('NDT_Email');

        $data = array('NDT_Ten'=>$NDT_Ten, 'NDT_DiaChi'=>$NDT_DiaChi, 'NDT_SDT'=>$NDT_SDT, 'NDT_Email'=>$NDT_Email);
        DB::table('nhadautu')->insert($data);
        return redirect('/home/danhsachnhadautu')->with('success', 'NHÀ ĐẦU TƯ đã được thêm vào danh sách.');
    }

    public function danhsachnhadautu(){
        $DanhSachNDT = DB::table('nhadautu')->get();

        return view('NDT.DanhSachNDT', ['DanhSachNDT' => $DanhSachNDT]);
    }
}
