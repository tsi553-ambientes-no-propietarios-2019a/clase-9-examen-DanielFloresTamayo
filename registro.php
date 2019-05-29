<?php 
include('common/conexion.php');
//print_r($_SESSION['user']);
//$products = getProducts($conn);

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <h1 align = "center">REGISTRO</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	</head>
	<body>
<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } 
?>


<form action="php/process_registration.php" method="post">
     <center>
  <!--   <h2 align = "center" >Registro de tienda</h2>  -->
     <div>
	 <pre>
     <label>Nombre : <input type="text"  name="name" required ="required"  /></label>
     </div>
     <div> 
	  <label>Rol: </label>
	  
	  <select name ="rol" required = "required">
	  <option value="">Seleccione...</option>
	  <option value="administrador">Administrador</option>
	  <option value="cliente">Cliente</option>
	  </select>
	 </div>
     <div>
	 <pre>
     <label>Nombre de usuario : <input type="text" name="username" required ="required"  /></label>
     </div>
     <div>
	 <pre>
     <label>Contraseña : <input type ="password" name = "pass"  required ="required"></label>
     </div>
     <div>
	 <pre>
     <label>Ronfirmar constraseña : <input type ="password" name = "pass1"  required ="required"></label>
     </div>
     </center>
      <br>
      <center><input type="submit" value="REGISTRAR"/> </center>
</form>
   

	</body>

</html>	