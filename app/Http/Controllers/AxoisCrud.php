<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AxoisCrud extends Controller
{
    public function ShowInfo() {
        return view('index');
    }
    public function OnInsert(Request $req) {
        $insert = DB::table('axios_crud')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'dept'=>$req->dept
        ]);
        if ($insert) {
            return "data send success";
        } else {
            return 'Data send failed';
        }

    }
    public function OnSelect() {
        $user = DB::table('axios_crud')->select()->get();
        return view('info', compact('user'));
    }
    public function OnDelete($id) {
        $user = DB::table('axios_crud')->where('id',$id)->delete();

    }
    public function OnEdit($id) {
        $sel = DB::table('axios_crud')->where('id',$id)->first();
        $arr = array();
        $arr=$sel;
        return json_encode($arr);
    }
    public function OnUpdate($hiddenId,Request $req) {
        $update = DB::table('axios_crud')->where('id',$hiddenId)->update([
            'name'=>$req->name,
            'email'=>$req->email,
            'dept'=>$req->dept
        ]);

    }
}
