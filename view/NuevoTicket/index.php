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
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra generar nuevos tickets de Helpdesk:
				</p>

				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categorias</label>
							<input type="text" class="form-control" id="exampleInput" placeholder="First Name">
							<small class="text-muted">We'll never share your email with anyone else.</small>
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Titulo</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingreso Titulo">
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Descripcion</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</fieldset>
					</div>
				</div><!--.row-->

				
			</div>
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