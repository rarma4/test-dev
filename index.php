<?php
	session_start();
	include "includes/header.php";
    include "class/ClassCrud.php";
    include "includes/modal.php";
?>

<div class="content">
	<h2>Cadastro de Carro <small>via Ajax</small></h2>
  <div id="result"></div>

   
<form method="post">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Marca</th>
					<th scope="col">Modelo</th>
					<th scope="col">Ano</th>
					<th scope="col">Ações</th>

				</tr>
			</thead>

      <tbody>
      <?php include "includes/lista.php";?>
      </tbody>
  </table>
	</form>
    </div>
</div>
<script>
$('#modaledit, #modalvisualizar, #modaldel').on('show.bs.modal', function (event) {
   var button = $(event.relatedTarget) 
   var id = button.data('whateverid')
   var carro = button.data('whatevercarro')
   var modelo = button.data('whatevermodelo')
   var ano = button.data('whateverano') 
   var modal = $(this)
  // modal.find('.modal-title').text('Editar ID: ' + id)
   modal.find('#idedit').val(id)
   modal.find('#carroedit').val(carro)
   modal.find('#modeloedit').val(modelo)
   modal.find('#anoedit').val(ano)
   modal.find('#idedits').val(id)
   modal.find('#carroedits').val(carro)
   modal.find('#modeloedits').val(modelo)
   modal.find('#anoedits').val(ano)
 })

</script>

<?php include "includes/footer.php";?>