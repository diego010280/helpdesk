<?php
	require_once("../../config/conexion.php"); 
  	if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
	<?php require_once("../MainHead/head.php");?>
	<title>AnderCode</>::Home</title>
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

	<script src="../../js/lib/jquery/jquery.min.js"></script>
	<script src="../../js/lib/tether/tether.min.js"></script>
	<script src="../../js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../../js/plugins.js"></script>

<script src="../../js/app.js"></script>
</body>
</html>

<?php
 } else {
	 header("Location:".Conectar::ruta()."index.php");
}
?>