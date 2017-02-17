<blockquote class="center-align">   
    <!--Form-->
    <div class="row">
    <div class="col l4 m2 s12">
    </div>
    <div class="col l4 m8 s12">
    <!--Form-->
    <div class="row">
      <div class="input-field col s12">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <i class="material-icons prefix">person_pin</i>
        <input id="icon_prefix" type="text" class="validate" name="name" value="<?php echo $name;?>">
        <label for="icon_prefix">Nombre <span class="red-text">*</span></label>
        <div class="red white-text center-align"><?php echo $nameErr;?></div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">person_pin</i>
        <input id="icon_prefix" type="text" class="validate" name="apellido1" value="<?php echo $apellido1;?>">
        <label for="icon_prefix">Apellido Materno <span class="red-text">*</span></label>
        <div class="red white-text center-align"><?php echo $apellido1Err;?></div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">person_pin</i>
        <input id="icon_prefix" type="text" class="validate" name="apellido2" value="<?php echo $apellido2;?>">
        <label for="icon_prefix">Apellido Paterno <span class="red-text">*</span></label>
        <div class="red white-text center-align"><?php echo $apellido2Err;?></div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">info_outline</i>
        <input id="icon_prefix"  class="validate" name="edad" value="<?php echo $edad;?>">
        <label for="icon_prefix">Edad <span class="red-text">*</span></label>
        <div class="red white-text center-align"><?php echo $edadErr;?></div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">mail_outline</i>
        <input id="icon_prefix" class="validate" name="email" value="<?php echo $email;?>">
        <label for="icon_prefix">Correo (Opcional)</label>
        <div class="red white-text center-align"><?php echo $emailErr;?></div>
      </div>
    </div>
    <div class="row">
    <div class="col l6">
      <input name="genero" type="radio" id="test1" value="M" checked="" />
      <label for="test1">Masculino</label>
    </div>
    <div class="col l6">
      <input name="genero" type="radio" id="test2" value="F"/>
      <label for="test2">Femenino</label>  
    </div>
    </div>
    <div class="row">
      <button class="waves-effect waves-light blue btn" type="submit" name="submit"><i class="material-icons left">done</i>Registrar</button>
    </div>
    </form>
    <!--/Form-->
    </div>
    <div class="col l4 m2 s12">
    </div>
    </div>
    <!--/Form-->
    <div class="row">
    <div class="col l4 m2 s12">
    </div>
    <div class="col l4 m8 s12">
      
    </div>
    <div class="col l4 m2 s12">
    </div>
    </div>

    </blockquote>
    </main>