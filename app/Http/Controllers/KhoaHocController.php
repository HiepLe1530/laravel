<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\khoahoc;
use App\Http\Requests\KhoaHocRequest;

class KhoaHocController extends Controller
{
    protected $khoahoc;
    public function __construct(){
        $this->khoahoc = new khoahoc();
    }
    public function getallkhoahoc(){
        return view('admin.khoahoc', ['title'=>'Khoá học', 'khoahoc'=>$this->khoahoc->getallkhoahoc()]);
    }

    public function addkhoahoc(){
        return view('admin.addkhoahoc', ['title'=>'Thêm khóa học']);
    }

    public function postaddkhoahoc(KhoaHocRequest $req){
        if($this->khoahoc->addkhoahoc($req)){
            return redirect(route('khoahoc.getlistkhoahoc'));
        }
    }
}
