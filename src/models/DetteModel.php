<?php

namespace App\Models;
use App\Core\Model;

class DetteModel extends Model{

    public function FindDetteNonSolde()
    { 
        $sql = "select d.*, cl.*, SUM(p.montantpay) AS verse, (d.montantd - SUM(p.montantpay)) AS restant 
                FROM dette d JOIN client cl ON d.idcl = cl.idcl JOIN paiement p ON d.idd = p.idd GROUP BY d.idd, cl.idcl 
                HAVING verse < d.montantd";
        return $this->executeSelect($sql);
    }

    public function AddDette()
    { 
        $sql = "";
        return $this->executeSelect($sql);
    }

    public function DetailDette()
    { 
        $sql = "";
        return $this->executeSelect($sql);
    }

    public function FindDetteByTel(string $tel)
    { 
        $sql = "SELECT d.idd, cl.nom, cl.prenom, cl.email, cl.telephone, d.numero, d.dated, d.montantd AS montantd, 
        SUM(p.montantpay) AS verse, (d.montantd - SUM(p.montantpay)) AS restant 
        FROM dette d JOIN client cl ON d.idcl = cl.idcl LEFT JOIN paiement p ON d.idd = p.idd GROUP BY d.idd, cl.idcl 
        HAVING restant > 0 AND cl.telephone = '$tel';";
        return $this->executeSelect($sql);
    }

    public function FindDetteByDate(string $date)
    { 
        $sql = "SELECT d.idd, cl.nom, cl.prenom, cl.email, cl.telephone, d.numero, d.dated, d.montantd AS montantd, 
        SUM(p.montantpay) AS verse, (d.montantd - SUM(p.montantpay)) AS restant 
        FROM dette d JOIN client cl ON d.idcl = cl.idcl LEFT JOIN paiement p ON d.idd = p.idd GROUP BY d.idd, cl.idcl 
        HAVING restant > 0 AND d.dated = '$date';";
        return $this->executeSelect($sql);
    }

}