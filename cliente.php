<?php
include('templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.min.js"></script>
</head>


<style>
.login   {
  display: none;

}
</style>

<div style="width: 100%; background-color: #ffffff; margin: 0px; auto;
  padding: 10px; padding-top: 20px; border-radius: 0px">

  <h3><span style="color: #000000;"><i class="bi bi-person-circle"></i>
 Mis datos</h3>
 </div><br>

<div style="width: 100%; background-color: #f6f6f6; margin: 0px; auto;
  padding: 10px; padding-top: 10px; border-radius: 5px; ">

<?php
    $query=mysqli_query($conn, "SELECT * from users WHERE id=".'user_id');
    while($mostrar=mysqli_fetch_array($query)){
?>



<form method="post" action="actuliza_clientes.php">

   <font size="5" style = "font-family:calibri; font-weight: 900;"><span style="color: #000147;">Datos de contacto</span></font><br><br>


  <font size="4" style = "font-family:calibri; font-weight: 700;"><span style="color: #000147;">


  <div class="row">

<div class="login"><label for="">id</label>
    <input type="text" id="id" name="id" required="" value="<?php echo $mostrar['id'];?>" autocomplete="nope" autofocus></div>




  <div class="col-25">
    <label for="">Nombre</label>
    <input type="text" id="nombre" name="nombre" required="" value="<?php echo $mostrar['nombre'];?>" autocomplete="nope" autofocus>
  </div>

  <div class="col-25">
    <label for="">Correo </label>
    <input type="text" id="correo" name="correo" required="" value="<?php echo $mostrar['correo'];?>">
  </div>

  <div class="col-25">
    <label for="">Teléfono de contacto </label>
    <input type="text" id="tel" name="tel" required="" value="<?php echo $mostrar['telefono'];?>">
  </div>
</div>

  <div class="row">

<div class="col-25">
    <label for="">Ciudad</label>
    <input type="text" id="ciudad" name="ciudad" required="" value="<?php echo $mostrar['ciudad'];?>">
  </div>

  <div class="col-25">
    <label for="">Dirección</label>
    <input type="text" id="calle" name="calle" required="" value="<?php echo $mostrar['calle'];?>">
  </div>

   <div class="col-25">
    <label for="">Departamento </label>
    <input type="text" id="col" name="col"  value="<?php echo $mostrar['colonia'];?>">
  </div>


  <div class="col-25">
    <label for="">Código Postal </label>
    <input type="text" id="cp" name="cp"  value="<?php echo $mostrar['cp'];?>">
  </div>

</div>

 <hr class="solid">


<div class="row">

  <div class="col-25">
<a href="javascript:window.open('##','','width= 800,height=600');void(null)"><font size="2" style = "font-family:calibri; font-weight: 900;"><p style="text-align:left;"><br><span style="color: #000147;">Política de privacidad</small></p></span></font></a></div>

 <div class="col-25" style="text-align:right;">
<button class="button" id="reg_btn">Actualizar</button></div>

 </form>
</div>
<hr class="solid">
</div></div>

</div>
  </div>
</div>
</div>
</div>
</div></span></font>

 <?php
    }
 ?>




</html>





            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<?php

include('footer.php');

?>




