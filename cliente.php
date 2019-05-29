<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <h1 align = "center">PEDIDOS</h1>
	</head>
	<body>
<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } 
?>


<form action="php/process_registration.php" method="post">
     <center>
  <!--   <h2 align = "center" >Registro de tienda</h2>  -->
	  <label>Producto: </label>
	  
	  <select name ="type" required = "required">
	  <option value="">Seleccione...</option>
	  <option value="administrador">Administrador</option>
	  <option value="cliente">Cliente</option>
	  </select>
	 </div>
     <div>
	 <pre>
     <label>Cantidad : <input type="text" name="username" required ="required"  /></label>
     </div>

     </center>
      <br>
      <center><input type="submit" value="REGISTRAR"/> </center>
</form>
   

	</body>

</html>	