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
    parent::rendorView("dette/ajout.Dette");

}
private function DetailDette(){
    parent::rendorView("dette/detail.Dette");

}




}