<?php
include_once("services/conexao.php");
include_once("services/controllerPacientes.php");
include_once("model/modelPacientes.php");

$data = json_decode(file_get_contents("php://input"), true);

$id_exame["id_exmae"];
$id_prontuario["id_prontuario"];
$id_funcionario_solicitante["id_funcionario_solicitante"];
$id_procedimentos_exame["id_procedimento_exames"];

$controllerExames = new controllerExames();
$resultado = $controllerExames->cadastrarEaxames($id_exame, $id_prontuario, $id_funcionario_solicitante, $id_procedimentos_exame);

if($resultado) echo "deu certo";
?>