<?php require 'database.php';
$message = '';
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {
	$sql = "INSERT INTO users (name,email,password,cpassword) VALUES (:name, :email, :password, :cpassword)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':name', $_POST['name']);
	$stmt->bindParam(':email', $_POST['email']);
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':cpassword', $_POST['cpassword']);

	if ($stmt->execute()) {
		$message = 'Usuario creado correctamente';
	} else {
		$message = 'Lo siento ha ocurrido un error, revisa los campos';
	}
}
?>
<?php include("templates/header.php"); ?>
<section class="forms">
	<div class="pag-contenedor">
		<div class="forms-content" style="background-image: url('image/banner-form.jpg'); background-size:100% 100%">
			<form class="form-detalles" action="form.php" method="POST">
				<h2>Formulario de registro</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="name" id="full-name" class="input-text" placeholder="Tu nombre" required>
					</div>
					<div class="form-row">
						<input type="text" name="email" id="your-email" class="input-text" placeholder="Tu correo" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="password" name="password" id="password" class="input-text" placeholder="Contraseña" required>
					</div>
					<div class="form-row">
						<input type="password" name="cpassword" id="comfirm-password" class="input-text" placeholder="Confirmar contraseña" required>
					</div>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Registrar">
				</div>

				<?php if (!empty($message)) : ?>
					<p><?= $message ?></p>
				<?php endif; ?>


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