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
    //     $sql = "select cl.idcl, cl.nom, cl.prenom, cl.email, cl.telephone, cl.adresse, d.idd,d.numero AS numero_dette,d.dated AS date_dette,d.montantd AS montant_det,a.idA,
    // a.libelle,a.prixU AS prix_unitaire,a.qtestock AS quantite_stock,p.idp,p.referencep AS reference_paiement,p.datep AS date_paiement,p.montantpay AS montant_paiement
    // FROM client cl
    // JOIN dette d ON cl.idcl = d.idcl
    // LEFT JOIN artDette ad ON d.idd = ad.idd
    // LEFT JOIN article a ON ad.idA = a.idA
    // LEFT JOIN paiement p ON d.idd = p.idd ";
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

    public function FindDetailDetteByClient(int $idcl)
    { 
        $sql = "SELECT
    cl.idcl,
    cl.nom,
    cl.prenom,
    cl.email,
    cl.telephone,
    cl.adresse,
    d.idd,
    d.numero AS numero_dette,
    d.dated AS date_dette,
    d.montantd AS montant_det,
    a.idA,
    a.libelle,
    a.prixU AS prix_unitaire,
    a.qtestock AS quantite_stock,
    p.idp,
    p.referencep AS reference_paiement,
    p.datep AS date_paiement,
    p.montantpay AS montant_paiement
FROM
    client cl
    JOIN dette d ON cl.idcl = d.idcl
    LEFT JOIN artDette ad ON d.idd = ad.idd
    LEFT JOIN article a ON ad.idA = a.idA
    LEFT JOIN paiement p ON d.idd = p.idd
WHERE cl.idcl = '$idcl'";
        return $this->executeSelect($sql);
    }

    public function FindArticleByRef(string $ref){ 
        $sql = "SELECT * FROM article WHERE refA = '$ref' ";
        return $this->executeSelect($sql);
    }




}
