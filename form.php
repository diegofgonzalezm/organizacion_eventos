<link rel="icon" type="image/x-icon" href="image/logotipo.png">
<link rel="stylesheet" href="css/index.css">

<body class="forms">
	<header>
		<?php include("templates/header.php"); ?>
	</header>
	<section>
		<div class="pag-contenedor">
			<div class="forms-content" style="background-image: url('image/banner-form.jpg'); background-size:100% 100%">
				<form class="form-detalles" action="#" method="post">
					<h2>Formulario de registro</h2>
					<div class="form-row-total">
						<div class="form-row">
							<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Tu nombre" required>
						</div>
						<div class="form-row">
							<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Tu correo" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
						</div>
					</div>
					<div class="form-row-total">
						<div class="form-row">
							<input type="password" name="password" id="password" class="input-text" placeholder="Contraseña" required>
						</div>
						<div class="form-row">
							<input type="password" name="comfirm-password" id="comfirm-password" class="input-text" placeholder="Confirmar contraseña" required>
						</div>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Registrar">
					</div>
					<div class="text-form">¿Ya tienes una cuenta?
					<a class="log" href="login.php">Inicia sesión</a>
				</div>
				</form>
				
			</div>
		</div>
	</section>
	<footer class="text-center text-white" style="background-color: #000;">
		<?php include("templates/footer.php"); ?>
	</footer>
</body>

</html>