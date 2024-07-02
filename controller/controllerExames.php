<?php

class controllerExames {

    public function listarExames(){
        try{
            $modelExames = new modelExames();
            return $modelExames->listarExames();
            }catch(Exception $e){
                return false;
        }
    }

    public function cadastrarExames($id_exame, $id_prontuario, $id_funcionario_solicitante, $id_prcedimentos_exame, $data_solicitacao) {
        try{
            $modelExames = new modelExames();
            return $modelExames->cadastrarExames($id_exame, $id_prontuario, $id_funcionario_solicitante, $id_prcedimentos_exame, $data_solicitacao);
            }catch(Exception $e){
                return false;
        }
    }

    public function atualizarExames($id_funcionario_solicitante, $id_prcedimentos_exame, $data_solicitacao) {
        try{
            $modelExames = new modelExames();
            return $modelExames->atualizarExames($id_funcionario_solicitante, $id_prcedimentos_exame, $data_solicitacao);
            }catch(Exception $e){
                return false;
           }
    }
}

?>