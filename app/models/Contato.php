<?php



namespace app\models;

use app\core\Model;



class Contato extends Model{

    public function lista() {

        //instrução SQL

        $sql = "SELECT * FROM contato";

        $qry = $this->db->query($sql);

        return $qry->fetchAll(\PDO::FETCH_OBJ);

    }

    public function inserir($contato) {
        $sql = "INSERT INTO contato SET
        nome=:nome,
        cep=:cep,
        endereco=:endereco,
        complemento=:complemento,
        numero=:numero,
        bairro=:bairro,
        cidade=:cidade,
        estado=:estado,
        celular=:celular,
        email=:email,
        dtnasc=:dtnasc,
        cpf=:cpf
        ";
        $qry = $this->db->prepare($sql);
        $qry->bindValue(":nome", $contato->nome);

        $qry->bindValue(":cep", $contato->cep);

        $qry->bindValue(":endereco", $contato->endereco);

        $qry->bindValue(":complemento", $contato->complemento);

        $qry->bindValue(":numero", $contato->numero);

        $qry->bindValue(":bairro", $contato->bairro);

        $qry->bindValue(":cidade", $contato->cidade);

        $qry->bindValue(":estado", $contato->estado);

        $qry->bindValue(":celular", $contato->celular);

        $qry->bindValue(":email", $contato->email);

        $qry->bindValue(":dtnasc", $contato->dtnasc);

        $qry->bindValue(":cpf", $contato->cpf);
        $qry->execute();

        return $this->db->lastInsertId();

    }


}