<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Contato;

class ContatoController extends Controller{
    
    public function index(){
        $objContato = new Contato();
        $dados["lista"] = $objContato->lista();
        $dados["view"] = "Contato/index";
        $this->load("template", $dados);

       

    } 
    public function create(){
        #a view que esta na pasta contato e se chama create.php
        $dados["view"] = "Contato/create";
        $this->load("template", $dados);
    }

    public function salvar(){
        $objContato = new Contato();

        $contato = new \stdClass();
       
        $contato->nome     = $_POST["nome"];

        $contato->cep     = $_POST["cep"];

        $contato->endereco   = $_POST["endereco"];

        $contato->complemento = $_POST["complemento"];

        $contato->numero    = $_POST["numero"];

        $contato->bairro    = $_POST["bairro"];

        $contato->cidade    = $_POST["cidade"];

        $contato->estado    = $_POST["estado"];

        $contato->celular   = $_POST["celular"];

        $contato->email    = $_POST["email"];

        $contato->dtnasc    = $_POST["dtnasc"];

        $contato->cpf     = $_POST["cpf"];

        $objContato->inserir($contato);
        header("location:".URL_BASE."contato");
    }
}