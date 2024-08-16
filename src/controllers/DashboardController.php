<?php

namespace App\Controllers;
use App\Models\DashboardModel;
use App\Core\Controller;


class DashboardController extends Controller {
    private DashboardModel $dashboardModel;

    public function __construct(){
        $this ->dashboardModel=new DashboardModel;
        $this->load();
    }
    public function load() {
        if (isset($_REQUEST["action"])) {
            if ($_REQUEST["action"]=="dash") {
                $datas=$this->dashboardModel->findNumberClient();
                // var_dump($datas);
                // die;
                // parent::rendorView("dashboard/liste");

                parent::rendorView("dashboard/liste",["datas"=>$datas]);
            }
        }
 
    }
}