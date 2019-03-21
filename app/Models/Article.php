<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{
    //区块5
    static public function get_image5(){

        return DB::table('articles')->where('title','区块5_图片')->pluck('thumb')->take(3);
    }
    static public function get_content5(){

        return DB::table('articles')->where('title','区块5_文字')->pluck('content')->take(6);
    }
    

   //区块6
    static public function get_image6(){

    	return DB::table('articles')->where('title','区块6_标题和图片')->pluck('thumb')->take(3);
    }

    static public function get_content6(){

    return DB::table('articles')->where('title','区块6_标题和图片')->pluck('content')->take(3);
    }
    //区块7
    static public function get_content7(){

    	return DB::table('articles')->where('title','区块7_ 内容')->pluck('content')->take(1);
    }

    //区块8
    static public function get_image8(){
        return DB::table('articles')->where('title','区块8_图片内容')->pluck('thumb')->take(3);
    }
    
    static public function get_content8(){
        return DB::table('articles')->where('title','区块8_图片内容')->pluck('content')->take(3);
    }

    //区块9
    static public function get_title9(){
        return DB::table('articles')->where('title','区块9_标题')->pluck('content')->take(3);
    }

    static public function get_content9(){
        return DB::table('articles')->where('title','区块9_文字')->pluck('content')->take(3);
    }
    static public function get_image9(){
        return DB::table('articles')->where('title','区块9_文字')->pluck('thumb')->take(3);
    }



}
