<?php



Class Disciplina{

    public $id;
    public $nome;
    public $carga_horaria;


Public function inserir()
{
    
   $sql = "INSERT INTO tb_disciplina (nome,carga_horaria) VALUES (
    '".$this->nome."',
    '".$this->carga_horaria."'
    )";

   $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

   $conexao->exec($sql);

   echo "Registro gravado com sucesso";
}

public function listar()
{
    
    $sql = "SELECT * FROM tb_disciplina";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    $resultado = $conexao->query($sql);
    $lista = $resultado->fetchAll();

    return $lista;

}

public function excluir(){
    
    $sql = "DELETE FROM tb_disciplina where id=".$this->id;
    
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    $conexao->exec($sql);
}

public function carregar(){
    
    $sql = "SELECT * FROM tb_disciplina where id=".$this->id;

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

    $resultado = $conexao->query($sql);

    $linha = $resultado->fetch();

    $this->nome = $linha['nome'];
    $this->carga_horaria = $linha['carga_horaria'];

}

public function __construct($id = false)
{
    if ($id){

        $this->id = $id;
        $this->carregar();
    }
}

public function atualizar(){
    $sql = "UPDATE tb_disciplina SET
        nome = '$this->nome',
        carga_horaria = '$this->carga_horaria'
        where id = '$this->id'";    

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
        $conexao->exec($sql);
}   

}
?>