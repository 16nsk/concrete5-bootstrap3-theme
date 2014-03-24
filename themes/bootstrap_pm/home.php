<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php Loader::element('header_required'); ?>
    <!-- Bootstrap -->
    <link href="<?php print $this->getThemePath(); ?>/css/project.css" rel="stylesheet">
    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container-fluid">

  <div class="row top">
    <div class="col-sm-12">
      <h1>Pickmedia</h1>
      <p>We hebben het zo druk gehad met websites maken</p>
      <p>Dat onze eigen site nog niet klaar is</p>
      <!-- Standard button -->
      <a href="" type="button" class="btn btn-primary">Pickmedia</a>
    </div>
  </div>

</div>

<?php   $this->inc('elements/footer.php'); ?>