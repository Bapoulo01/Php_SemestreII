<?php

namespace App\Controllers;
use App\Models\DetteModel;

class ArticleController {
    private ArticleModel $articleModel;

    public function __construct(){
        $this ->articleModel=new ArticleModel;
        $this->load();
    }
    public function load() {

        
    }
}