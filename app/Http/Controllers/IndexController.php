<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

use DB;

class IndexController extends Controller
{

    //主界面
    public function index(){
        dump(Article::get_content5());
        $data = [
            //文章界面（6个的）
            'area5' => [
                "image" =>Article::get_image5(),
                "title" =>$this->array_to(Article::get_content5()),
                "sentence" =>$this->array_to(Article::get_content5())
            ], 

            'area6' => [
                "image" =>Article::get_image6(),
                "title" => $this->array_to(Article::get_content6()),
                "sentence" =>$this->array_to(Article::get_content6()),
            ],

            'area7' => [
                "title" =>$this->array_to(Article::get_content7()),
                "sentence" =>$this->array_to(Article::get_content7()),
            ],

            'area8' => [
                "image" => Article::get_image8(),
                "title" => $this->array_to(Article::get_content8()),
                "sentence" =>$this->array_to(Article::get_content8()),

            ],

            'area9' => [
                "big_title" => $this->only_array(Article::get_title9()),
                "title" => $this->array_to(Article::get_content9()),
                "sentence" =>$this->array_to(Article::get_content9()),
                "image" => Article::get_image9(),

            ],


        ];
        return laravel_frontend_view('index2',['data'=> $data]);
      
    	
    }
    //转换数组函数
    public function array_to($data){

        foreach ($data as $key => $value) 
        {
            
            $a[] = explode("==========", strip_tags($value));                     
        }   
             return $a;
    }

    public function only_array($data){
        foreach ($data as $key => $value) 
        {
            
            $a[] = strip_tags($value); 

        } 
        return $a;

    }   

}
