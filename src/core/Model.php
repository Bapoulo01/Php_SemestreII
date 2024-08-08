<?php

namespace App\Core;

abstract class  Model
{

    public function findAll()
    { 
        $calledClass=get_called_class();
        $table=str_replace("Model","",$calledClass);
        $sql = "select * from $table";
        return $this->executeSelect($sql);
    }

    public function findById(int $id)
    { 
        $calledClass=get_called_class();
        $table=str_replace("Model","",$calledClass); //donne la table
        $sql = "select * from $table where id=$id";
        return $this->executeSelect($sql,true); //single(fetch)
    }

    protected function executeSelect(string $sql,bool $single=false):mixed{
        $calledClass=get_called_class();
        $result = $this->openConnexion()->query($sql);
        $result->setFetchMode(\PDO::FETCH_CLASS,$calledClass);
        if(!$single){
        return $result->fetchAll();
            }
        return $result->fetch();
    }

  
    protected function openConnexion()
    {
        return new \PDO(
            'mysql:host=localhost;dbname=boutique_bd;charset=utf8',
            'Boutik',
            'passer123'
        );
    }


}
