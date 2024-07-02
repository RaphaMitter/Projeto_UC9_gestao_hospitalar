<?php 

class modelPacientes {

    public function cadastrarPacientes($nome, $sobrenome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf) {
        try {
            
            $nome = htmlspecialchars($nome, ENT_QUOTES);
            $sobrenome = htmlspecialchars($sobrenome, ENT_QUOTES);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $cep = filter_var($cep, FILTER_SANITIZE_NUMBER_INT);
            $logradouro = htmlspecialchars($logradouro, ENT_QUOTES);
            $numero = filter_var($numero, FILTER_SANITIZE_NUMBER_INT);
            $bairro = htmlspecialchars($bairro, ENT_QUOTES);
            $cidade = htmlspecialchars($cidade, ENT_QUOTES);
            $uf = htmlspecialchars($uf, ENT_QUOTES);

            $pdo = Database::conexao();
            $cadastrar = $pdo->prepare("CALL cadastrarPaciente(:nome, :sobrenome, :email, :cep, 
                                      :logradouro, :numero, :bairro, :cidade, :uf");
                                      
            $cadastrar->bindParam(":nome", $nome);
            $cadastrar->bindParam(":sobrenome", $sobrenome);
            $cadastrar->bindParam(":email", $email);
            $cadastrar->bindParam(":cep", $cep);
            $cadastrar->bindParam(":logradouro", $logradouro);
            $cadastrar->bindParam(":numero", $numero);
            $cadastrar->bindParam(":bairro", $bairro);
            $cadastrar->bindParam(":cidade", $cidade);
            $cadstrar->bindParam(":uf", $uf);
            $cadastrar->execute();
    
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }

    public function listarPacientes () {
        try {
            $pdo = Database::conexao();
            $listar = $pdo->query("SELECT * FROM pacientes");
            $resultado = $listar->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (PDOException $e) {
            return false;
        }
    }

    

public function atualizarPacientes($nome, $sobrenome, $email, $cep, $logradouro, $numero, $bairro, $cidade, $uf, $id_status) {
    try {
        $pdo = Database::conexao();
        $atualizar = $pdo->prepare("UPDATE tbl_pacientes SET nome = :nome,sobrenome, email, cep, logradouro, numero, bairro, cidade,uf
        VALUES (:nome, :sobrenime, :email, now())");

$atualizar->bindParam(":nome", $nome);
$atualizar->bindParam(":sobrenome", $sobrenome);
$atualizar->bindParam(":email", $email);
$atualizar->bindParam(":cep", $cep);
$atualizar->bindParam(":logradouro", $logradouro);
$atualizar->bindParam(":numero", $numero);
$atualizar->bindParam(":bairro", $bairro);
$atualizar->bindParam(":cidade", $cidade);
$atualizar->bindParam(":uf", $uf);
$atualizar->bindParam(":id_status", $id_status);
$atualizar->execute();

       return true;
    } catch(PDOException $e) {
        return false;
    }
}

function autenticarPacientes($email) {
    try{
        $pdo = Database::conexao();
        $autenticar = $pdo->prepare("SELECT 
                                   nome
                                   ,sobrenome
                                   ,email
                                   ,cep
                                   ,logradouro
                                   ,numero
                                   ,bairro
                                   ,cidade
                                   ,uf
                                   ,id_status;
                                   FROM tbl_pacientes 
                                   WHERE email = :email");
        $autenticar->execute();
                                   
       
      
        return true;
    } catch(PDOException $e) {
      return false;
    }
}






}

?>

