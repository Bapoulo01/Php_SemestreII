<?php

namespace App\Controllers;
use App\Models\DetteModel;

class ArticleController {
    private ArticleModel $articleModel;


    public function __construct() {
        $this->articleModel = new ArticleModel();
    }
    public function index() {

        
    }
}