<?php
session_start();
include ("../includes/variaveis.php");
include ("../class/ClassCrud.php");

$crud = new ClassCrud();
	$crud->insertDB(
	        "cars",
	        "?,?,?,?",
	        array($id, $carro, $modelo, $ano)
	);

	$output .= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
	<strong>Gravado </strong> com sucesso!
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	<span aria-hidden='true'>&times;</span>
	</button>
	</div>";    

	echo($output);

?>