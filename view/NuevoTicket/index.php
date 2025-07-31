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
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Inicio</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
            
            <div class="box-typical box-typical-padding">
				<p>
					Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt</code>; elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.control-label</code> class.
				</p>

                <h5 class="m-t-lg with-border">Vertical Inputs</h5>

                <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">First Name</label>
							<input type="text" class="form-control" id="exampleInput" placeholder="First Name">
							<small class="text-muted">We'll never share your email with anyone else.</small>
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="mail@mail.com">
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group">
							<label class="form-label" for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</fieldset>
					</div>
				</div><!--.row-->
                        
            </div>

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