<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>

<div class="container-fluid">

<?php $this->inc('elements/bootstrap_grid.php');?>


 <div class="progress progress-striped active ">
  <div class="progress-bar pg1"  role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
    <span class="percentage-counter">45% Complete</span>
  </div>
</div>
</div>
<?php   $this->inc('elements/footer.php'); ?>