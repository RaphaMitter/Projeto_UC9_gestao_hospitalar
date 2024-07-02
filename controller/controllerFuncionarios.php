<?php

class controllerFuncionarios{
 
    public function listarFuncionarios(){
    try{
        $funcionarios = new modelFuncionarios();
        return $modelFuncionarios->listarFuncionarios();
    } catch (PDOException $e) {
        return false;

    }
 }

 public function cadastrarFuncionarios($nome, $sobrenome, $id_cargo, $id_status){
    try{
        $funcionarios = new modelFuncionarios();
        return $modelFuncionarios->cadastrarFuncionarios($nome, $sobrenome, $id_cargo, $id_status);
    } catch (PDOException $e) {
        return false;

    }
 }

 public function atualizarFuncionarios($nome, $sobrenome, $id_cargo, $id_status){
    try{
        $funcionarios = new modelFuncionarios();
        return $modelFuncionarios->atualizarFuncionarios($nome, $sobrenome, $id_cargo, $id_status);
    } catch (PDOException $e) {
        return false;

    }
 }

}
?>