<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<?php
    $a = new Area('Carousel');
    $a->display($c);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4">
      <div class="box">
        <img class="img-responsive" src="http://placehold.it/350x150"><h1>Lorem Ipsum</h1><p>Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="box">
        <?php
            $a = new Area('Gallery');
            $a->display($c);
        ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="box">
        <img class="img-responsive" src="http://placehold.it/350x150"><h1>Lorem Ipsum</h1><p>Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
      </div>
    </div>    
</div>
  <div class="row">
    <div class="col-sm-4">
      <div class="box">
        <img class="img-responsive" src="http://placehold.it/350x150"><h1>Lorem Ipsum</h1><p>Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="box">
        <img class="img-responsive" src="http://placehold.it/350x150"><h1>Lorem Ipsum</h1><p>Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="box">
        <img class="img-responsive" src="http://placehold.it/350x150"><h1>Lorem Ipsum</h1><p>Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
      </div>
    </div>    
</div>

 <div class="progress progress-striped active ">
  <div class="progress-bar pg1"  role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
    <span class="percentage-counter">45% Complete</span>
  </div>
</div>

<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php   $this->inc('elements/footer.php'); ?>