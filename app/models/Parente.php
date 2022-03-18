<?php



namespace app\models;

use app\core\Model;



class Parente extends Model{

    public function lista() {

        //instrução SQL

        $sql = "SELECT * FROM parentes";

        $qry = $this->db->query($sql);

        return $qry->fetchAll(\PDO::FETCH_OBJ);

    }

    public function inserir($parente) {
        $sql = "INSERT INTO parentes SET
        nome=:nome,
        nascimento=:nascimento,
        celular=:celular,
        email=:email,
        relacionamento=:relacionamento
        ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $parente->nome);

        $qry->bindValue(":nascimento", $parente->nascimento);

        $qry->bindValue(":celular", $parente->celular);

        $qry->bindValue(":email", $parente->email);

        $qry->bindValue(":relacionamento", $parente->relacionamento);
        $qry->execute();

        return $this->db->lastInsertId();

    }


}