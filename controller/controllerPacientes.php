<?php

class controllerPacientes {

    public function cadastrarPaciente($nome, $sobrenome, $email, $cep, $logradouro,
                                        $numero, $bairro, $cidade, $uf){
        try {
            $modelPacientes = new modelPacientes();
            return $modelPacientes->cadastrarPaciente($nome, $sobrenome, $email, $cep, $logradouro,
                                                        $numero, $bairro, $cidade, $uf);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function listarPacientes() {
        try {
            $modelPacientes = new modelPacientes();
            return $modelPacientes->listarPacientes();
            } catch (PDOException $e) {
                return false;
        }
    }

    public function atualizarPacientes($id_prontuario, $id_consulta) {
        try {
            $modelPacientes = new modelPacientes();
            return $modelPacientes->atualizarPacientes($id_prontuario, $id_consulta);
            } catch (PDOException $e) {
                return false;
    }
 }
}