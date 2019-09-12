<?php
session_start();
include ("../includes/variaveis.php");
include ("../class/ClassCrud.php");

	$crud = new ClassCrud();
	$crud->delDB(
		"cars",
		"id = ?",
		array($id)
	);
	if($crud){
		$output .= "<div class='alert alert-success alert-dismissible fade show' role='alert'>
		<strong>Apagado </strong> com sucesso!
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		</div>";    
	
		echo($output);

	}else{
		$output .= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		<strong>Erro </strong> ao apagar!
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		<span aria-hidden='true'>&times;</span>
		</button>
		</div>";    

		echo($output);
	}
?>

