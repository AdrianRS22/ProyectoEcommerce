<?php
    require_once 'shared/header.php';
?>

<form id="formActualizar" action="" method="post" onsubmit="">

  <div class="row p-2">
    <div class="container_sombreado container">
      <h1 class="text-center colorMarino">Perfil</h1>
      <hr>

      <div class="form-group">
        <div class="col-3">
          <label for="txtNombre">Nombre: </label>
        </div>

        <div class="col-12">
          <input type="text" class="form-control" id="txtNombre" name="txtNombre"
          value="<?php echo $_SESSION['usuario']['nombre']?>" />
        </div>
      </div>

      <div class="form-group">
        <div class="col-3">
          <label for="txtApellido">Apellidos: </label>
        </div> 

        <div class="col-12">
          <input type="text" class="form-control" id="txtApellido" name="txtApellido"
          value="<?php echo $_SESSION['usuario']['apellidos']?>" />
        </div>
      </div>

      <div class="form-group">
        <div class="col-3">
          <label>Correo: </label>
        </div> 

        <div class="col-12">
          <input type="text" class="form-control" id="txtCorreo" value="<?php echo $_SESSION['usuario']['correo'] ?>" readonly />
        </div>
      </div>

      <input type="submit" class="btn btn-success btn-block" id="btnActualizar" name="btnActualizar" value="Actualizar" />

    </div>
  </div>
</form>
   
   <form id="formActualizarClave" action="" method="post" onsubmit="">
    <div class="row p-2">
      <div class="container_sombreado container">
        <h1 class="text-center colorMarino">Cambiar Contraseña</h1>
        <hr>
        
        <div class="form-group">

          <div class="col-3">
            <label for="clave">Contraseña: </label>
          </div>
          <div class="col-12">
            <input type="text" class="form-control" id="password1" 
            name="clave" 
            data-parsley-minlength="6" 
            required data-parsley-required-message="La contraseña es requerida."
            data-parsley-required/>
          </div>

          
        </div>

        <div class="form-group">
          <div class="col-3">
            <label>Repita Contraseña: </label>
          </div>
          <div class="col-12">
            <input type="text" class="form-control" id="password2"
            data-parsley-equalto="#password1" 
            data-parsley-equalto-message="La contraseña debe ser igual" 
            data-parsley-required-message="La contra
            seña es requerida." 
            data-parsley-required
            />
          </div>
        </div>
        <input type="submit" class="btn btn-success btn-block" id="btnActualizarCable" name="btnActualizarCable" value="Actualizar Contraseña" />
        
      </div>
    </div>
   </form> 

</div>

<?php require_once 'shared/footer.php'; ?>
<script src="/assets/js/pages/index.js?v=<?php echo date('his'); ?>"></script>
<script src="/assets/js/pages/perfil.js"></script>

</body>

</html>