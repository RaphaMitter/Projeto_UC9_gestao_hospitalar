<?php

include_once("services/conexao.php");
include_once("services/controllerPacientes.php");
include_once("model/modelPacientes.php");

$data = json_decode(file_get_contents("php://input"), true);

$nome = $data["nome"];
$sobrenome = $data["sobrenome"];
$id_cargo = $data["id_cargo"];
$id_status = $data["id_status"];

$controllerFuncionarios = new controllerFuncionarios();
$resultado = $controllerFuncionarios->cadastrarFuncionarios($nome, $sobrenome, $id_cargo, $id_status);

if($resultado) echo "deu certo";
?>