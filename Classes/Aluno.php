<?php 

class Aluno{

    public $id;
    public $nome;
    public $email;
    public $telefone;
    public $genero;
    public $curso;
    public $cep;
    public $endereco;
    public $bairro;
    public $cidade;
    public $estado;
    
    public function inserir(){

        $sql = "INSERT INTO tb_alunos (nome,email,telefone,genero,curso,cep,endereco,bairro,cidade,estado) VALUES (      '".$this->nome."',
        '".$this->email."',
        '".$this->telefone."',
        '".$this->genero."',
        '".$this->curso."',
        '".$this->cep."',
        '".$this->endereco."',
        '".$this->bairro."',
        '".$this->cidade."',
        '".$this->estado."')";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
        
    }

    public function listar(){
    
    $sql = "SELECT * FROM tb_alunos";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    $resultado = $conexao->query($sql);
    $lista = $resultado->fetchAll();

    return $lista;

}

public function excluir(){
    
    $sql = "DELETE FROM tb_alunos where id=".$this->id;
    
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    $conexao->exec($sql);
}

public function carregar(){
    
    $sql = "SELECT * FROM tb_alunos where id=".$this->id;

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    $resultado = $conexao->query($sql);

    $linha = $resultado->fetch();

    $this->nome = $linha['nome'];
    $this->email = $linha['email'];
    $this->telefone = $linha['telefone'];
    $this->curso = $linha['curso'];
    $this->cep = $linha['cep'];
    $this->endereco = $linha['endereco'];
    $this->bairro = $linha['bairro'];
    $this->cidade = $linha['cidade'];
    $this->estado = $linha['estado'];
    

}

public function __construct($id = false)
{
    if ($id){

        $this->id = $id;
        $this->carregar();
    }
}

}



?>