<?php
include 'includes/header.php';
?>
<!-- Page content -->
<div class="container-sm mt-5 text-white">
  <div class="row m-5 text-center">
    <button type="button" class="btn btn-secondary text-white" onClick="window.location.reload();">Vaudeville Me!</button>
  </div>
<!-- Dynamic content -->  
  <div class="row my-5">
  <div><?php include 'includes/random.php';?></div>
  </div>
</div>
<?php 
include 'includes/footer.php';
?>