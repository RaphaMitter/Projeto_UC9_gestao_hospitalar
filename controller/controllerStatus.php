<?php

class controllerStatus {

    public function cadastrarStatus($descricao) {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->cadastrarStatus($descricao);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function listarStatus() {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->listarStatus();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarStatus($id_prontuario, $id_consulta) {
        try {
            $modelStatus = new modelStatus();
            return $modelStatus->atualizarStatus($id_prontuario, $id_consulta);
            } catch (PDOException $e) {
                return false;
    }
 }

    
}