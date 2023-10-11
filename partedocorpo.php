<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "corpo";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

$CABECA = isset($_POST["CABECA"]) ? "1" : "0";
var_dump($CABECA);

$OMBRODIREITO = isset($_POST["OMBRODIREITO"]) ? "1" : "0";
var_dump($OMBRODIREITO);

$OMBROESQUERDO = isset($_POST["OMBROESQUERDO"]) ? "1" : "0";
var_dump($OMBROESQUERDO);

$comando = $conexao->query("INSERT INTO local (CABECA, OMBRODIREITO, OMBROESQUERDO) VALUES ('$CABECA', '$CABECA', '$OMBROESQUERDO')");
