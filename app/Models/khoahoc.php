<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class khoahoc extends Model
{
    use HasFactory;

    public function getallkhoahoc(){
        $khoahocs = DB::select('select * from khoahoc');
        return $khoahocs;
    }

    public function addkhoahoc($req){
        try{
            DB::insert('insert into khoahoc(image, title, description) values(?,?,?)',[$req->input('image'), $req->input('title'), $req->input('description')]);
            return true;
        }
        catch(Exception $ex){
            return false;
        }
        
    }
}
