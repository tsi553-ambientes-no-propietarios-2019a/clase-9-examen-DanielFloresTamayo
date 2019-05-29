<?php 
//include('common/utils.php');
//print_r($_SESSION['user']);
//$products = getProducts($conn);
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <h1 align = "center">REGISTRO</h1>
	</head>
	<body>

<form action="php/process_registration.php" method="post">
     <center>
  <!--   <h2 align = "center" >Registro de tienda</h2>  -->
	 <div>
	 <pre>
     <label>Nombre de producto: <input type="text" name="role" required ="required"  /></label>
     </div>
     
	 <div>
	 <pre>
     <label>Precio por unidad: <input type="text" name="username" required ="required"  /></label>
     </div>
     </center>
      <br>
      <center><input type="submit" value="REGISTRAR"/> </center>
</form>
   

	</body>


<body>
	<div><a href="php/logout.php">Cerrar sesión</a></div>

	<h1>Bienvenido <?php echo $_SESSION['user']['username']; ?></h1>
	<h2>Tienda: <?php echo $_SESSION['user']['store']; ?></h2>

	

	<table>
		<thead>
			<tr>
				
				<th>Producto</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($products as $p) { ?>
				<tr>
					<td><?php echo $p['name'] ?></td>
					<td><?php echo $p['price'] ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>