<?php
	session_start();
    include "../class/ClassCrud.php";
    include "modal.php";
?>					
<!-- Loop -->
<?php
	$crud = new ClassCrud();
		$bFetch=$crud->selectDB(
			"*",
			"cars",
			"",
			array()
		);
		while ($fetch = $bFetch->fetch(PDO::FETCH_ASSOC)){
			?>
		<tr>
			<td><?php echo $fetch['id'];?></td>
			<td><?php echo $fetch['carro'];?></td>
			<td><?php echo $fetch['modelo'];?></td>
			<td><?php echo $fetch['ano'];?></td>
			
			<td>
				<a href="#" data-toggle="modal" data-target="#modalvisualizar" data-whateverid="<?php echo $fetch['id'];?>" data-whatevercarro="<?php echo $fetch['carro'];?>" data-whatevermodelo="<?php echo $fetch['modelo'];?>" data-whateverano="<?php echo $fetch['ano'];?>"><img src="assets/images/search.png" title="visualizar"></a>

				<a href="#" data-toggle="modal" data-target="#modaledit" data-whateverid="<?php echo $fetch['id'];?>" data-whatevercarro="<?php echo $fetch['carro'];?>" data-whatevermodelo="<?php echo $fetch['modelo'];?>" data-whateverano="<?php echo $fetch['ano'];?>"><img src="assets/images/edit.png" title="Editar"></a>

				<a class="delete" href="#" data-toggle="modal" data-target="#modaldel" data-whateverid="<?php echo $fetch['id'];?>" ><img src="assets/images/delete.png" title="Deletar"></a>

			</td>
		</tr>
<?php }?>