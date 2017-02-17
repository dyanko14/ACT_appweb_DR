  <?php
    $_SESSION["paciente"] = $_GET['id'];
  ?>
    <main>
    <blockquote class="center-align">
    <div class="row" style="border: 1px dotted gray">
      <h5 class="red-text">¿Desea eliminar todo registro del Paciente ID: <?= $_GET['id'] ?>?</h5>
    </div>
    </blockquote>