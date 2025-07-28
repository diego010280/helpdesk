<<<<<<< HEAD
<?php
	require_once("../../config/conexion.php"); 
  	if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
	<?php require_once("../MainHead/head.php");?>
	<title>AnderCode</>::Nuevo Ticket</title>
</head>
<body class="with-side-menu">

	<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
	
	<?php require_once("../MainNav/nav.php");?>
	
	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div>
	</div>

	<?php require_once("../MainJs/js.php"); ?>
	<script src="nuevoticket.js"></script>
</body>
</html>

<?php
 } else {
	 header("Location:".Conectar::ruta()."index.php");
}
?>
=======
<H1>NUEVO TICKET</H1>
>>>>>>> 3d7404276725f309cb2be04f5305ea9f1ac20ed0
