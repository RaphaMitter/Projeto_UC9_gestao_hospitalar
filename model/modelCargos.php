<?php

class modelCargos{

    public function listarCargos(){
        try{
            $conn = Database::conexao();
            $consultaCargos = $conn->query("SELECT * tbl_cargos");
            $resultado = $consultaCargos->fetAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        }catch(PDOException $e){

        }
    }

    public function cadastrarCargos($id_cargos, $descricao_cargo){
        try{
            $conn = Database::conexao();
            $inserirCargos = $conn->prepare("INSERT INTO tbl_cargos (id_cargos, descricao_cargos) VALUES (:id_cargos, :descricao_cargos, now()");

            $inserirCargos->bindParam(':id_cargos', $id_cargos);
            $inserirCargos->bindParam(':descricao_cargos', $descricao_cargos);
            $inserirCargos->execute();

            return true;
        }catch(PDOException $e){
                echo $e;
                return false;
        }
    
    }

    public function atualizarCargos($id_cargos, $descricao_cargos){
        try{
            $conn = Database::conexao();
            $atualizarCargos = $conn->prepare("UPDATE tbl_cargos SET id_cargos = :id_cargos, descricao_cargos, :descricao_cargos, WHERE id_cargos = :id_cargos");
           
            $atualizarCargos->bindParam(':id_cargos', $id_cargo);
            $atualizarCargos->bindParam(':descricao_cargos', $descricao_cargo);
            
            return true;
        }catch(PDOException $e){
            echo $e;
            return false;
        }
    }

}

?>