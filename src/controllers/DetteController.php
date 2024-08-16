<?php

namespace App\Controllers;
use App\Models\DetteModel;
use App\Core\Controller;

class DetteController extends Controller{
    private DetteModel $detteModel;

public function __construct(){
    $this ->detteModel=new DetteModel;
    $this->load();
}

public function load(){

    if (isset($_REQUEST["action"])) {
        if ($_REQUEST["action"]=="dette") {
            $this->FindDetteNonSolde();
        }
        elseif ($_REQUEST["action"]=="addDette") {
            $this->AddDette();
        }
        elseif ($_REQUEST["action"]=="detail") {
            $this->DetailDette();
        }
    }
    else{
        $this->FindDetteNonSolde();
    }

}

private function FindDetteNonSolde(){

    $datas=$this->detteModel->FindDetteNonSolde();

    if (isset($_POST["telSearch"])) {
        $datas=$this->detteModel->FindDetteByTel($_POST["telSearch"]);
    }
    if (isset($_POST["dateSearch"])) {
        $datas=$this->detteModel->FindDetteByDate($_POST["dateSearch"]);
    }
    parent::rendorView("dette/liste.dette",["datas"=>$datas]);

}

private function AddDette(){
    $datas=[];
    if (isset($_POST["tel"])) {
        $datas=$this->detteModel->FindDetteByTel($_POST["tel"]);
        // var_dump($datas);
        // die;
    }
    
    if (isset($_POST["ref"])) {
        $datas=$this->detteModel->FindArticleByRef($_POST["ref"]);
        // var_dump($datas);
        // die;
    }
    parent::rendorView("dette/ajout.Dette",["datas"=>$datas]);

}


private function DetailDette(){
    // var_dump($_REQUEST);
    // die;
    parent::rendorView("dette/detail.Dette",["datas"=>$this ->detteModel->FindDetailDetteByClient(intval($_REQUEST['idcl']))]);

}






}