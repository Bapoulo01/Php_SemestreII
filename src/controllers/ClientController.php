<?php

namespace App\Controllers;
use App\Models\DetteModel;

class ClientController {
    private ClientModel $clientModel;


    public function __construct() {
        $this->clientModel = new ClientModel();
    }
    public function index() {

        
    }
}