<?php 

require 'database.php';
$message = '';
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['cpassword'])) {
	$sql = "INSERT INTO users (name,email,password,cpassword) VALUES (:name, :email, :password, :cpassword)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':name', $_POST['name']);
	$stmt->bindParam(':email', $_POST['email']);
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password', $password);
	$cpassword = password_hash($_POST['cpassword'], PASSWORD_BCRYPT);
	$stmt->bindParam(':cpassword', $password);

	if ($stmt->execute()) {
		$message = 'Usuario creado correctamente';
	} else {
		$message = 'Lo siento ha ocurrido un error, revisa los campos';
	}
}
?>
<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="image/logotipo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Organización de eventos</title>
</head> -->
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
						<input type="password" pattern="[a-z]{1,15}" name="password" title="La contraseña debe contener minusculas y un rango no mayor a 15 caracteres" id="password" class="input-text" placeholder="Contraseña" required>
					</div>
					<div class="form-row">
						<input type="password" pattern="[a-z]{1,15}" name="cpassword" title="Las contraseñas no coinciden" id="comfirm-password" class="input-text" placeholder="Confirmar contraseña" required>
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