<?php
if (isset($_POST['acao'])){
	$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['acao'])){
	$acao = filter_input(INPUT_GET, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$acao = "";
}

if (isset($_POST['carro'])){
	$carro = filter_input(INPUT_POST, 'carro', FILTER_SANITIZE_SPECIAL_CHARS);
}

if (isset($_POST['modelo'])){
	$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_SPECIAL_CHARS);
}

if (isset($_POST['ano'])){
	$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_SPECIAL_CHARS);
}

if (isset($_POST['id'])){
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
	$id = "";
}

?>

