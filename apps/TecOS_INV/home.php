<?php
  $page_title = 'Pagina de Inicio';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>Esta es tu Aplicación para el Inventario!</h1>
         <p>Estas a momentos de poder gestionar tecnologicamente todo el inventario de tu empresa. Adelante!</p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
