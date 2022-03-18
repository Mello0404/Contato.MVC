<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Parente;

class ParenteController extends Controller{
    
    public function index(){
        $objParente = new Parente();
        $dados["lista"] = $objParente->lista();
        $dados["view"] = "Parente/index";
        $this->load("template", $dados);

       

    } 
    public function create(){
        #a view que esta na pasta contato e se chama create.php
        $dados["view"] = "Parente/create";
        $this->load("template", $dados);
    }

    public function salvar(){
        $objParente = new Parente();

        $parente = new \stdClass();
       
        $parente->nome     = $_POST["nome"];

        $parente->nascimento    = $_POST["nascimento"];

        $parente->celular   = $_POST["celular"];

        $parente->email    = $_POST["email"];

        
        $parente->relacionamento    = $_POST["relacionamento"];


        $objParente->inserir($parente);
        header("location:".URL_BASE."parente");
    }
}