<?php

class controllerCargo {
    public function listarCargos() {
        try{
            $modelCargos = new modelCargos();
            return $modelCargos = listarCargos();
            }catch(Exception $e){
                return false;
        }
    }

    public function cadastrarCargos($descricao_cargo){
        try{
            $modelCargos = new modelCargos();
            return $modelCargos->cadastrarCargos($descricao_cargo);
        }catch (PDOException $e){
            return false;
        }
    }

    public function atualiazarCargos($id_cargo, $descricao_cargo){
        try{
            $modelCargos = new modelCargos();
            return $modelCargos->atualiazarCargos($id_cargo,
            $descricao_cargo);
            }catch (PDOException $e){
                return false;
            }
        }
}

?>