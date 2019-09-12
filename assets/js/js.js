
function confirmE() {
   if (confirm("Tem certeza que deseja excluir?")) {
		location.href="<?php controllers/ControllersDel.php?id={$fetch['id']}?>";
   }else{
		window.event.preventDefault()
   }
}

 
 $(document).ready(function() {
   $('#insert_car').on("submit", function(){
     event.preventDefault();
 
     if($('#nomecarro').val() == '')
       {
          alert("Digite o  nome do Carro");
       }
       else if($('#modelo').val() == '')
       {
          alert("Digite o Modelo");
       }
       else if($('#ano').val() == '')
       {
          alert("Digite o Ano");
 
       }else{ 
 
       $.ajax({  
         url:"controllers/ControllersInsert.php",  
         method:"POST",  
         data:$('#insert_car').serialize(), 
 
         success:function(data){ 
         $('#modalcad').modal('hide');
         $('#insert_car')[0].reset();
         $('tbody').load('includes/lista.php');
         $('#result').html(data); 
 
         }  
       });
     }
   });
 
   $('#formedit').on("submit", function(event){  
     event.preventDefault();
     
     if($('#carroedits').val() == '')
       {
          alert("Digite o  nome do Carro");
       }
       else if($('#modeloedits').val() == '')
       {
          alert("Digite o Modelo");
       }
       else if($('#anoedits').val() == '')
       {
          alert("Digite o Ano");
 
       }else{   
     
       $.ajax({ 
         url:"controllers/ControllersEdit.php",  
         method:"POST",  
         data:$('#formedit').serialize(),  
 
         success:function(data){
         $('#modaledit').modal('hide');
         $('#insert_car')[0].reset();
         $('tbody').load('includes/lista.php');
         $('#result').html(data);  
         }  
       });
     }
   });
 
 $('#formdel').on("submit", function(event){  
     event.preventDefault();  
     
    $.ajax({  
     url:"controllers/ControllersDel.php",  
     method:"POST",  
     data:$('#formdel').serialize(),  
 
     success:function(data){
      $('#modaldel').modal('hide');
       $('#insert_car')[0].reset();
      $('tbody').load('includes/lista.php');
      $('#result').html(data);  
     }  
    });  
   });
 
 });

