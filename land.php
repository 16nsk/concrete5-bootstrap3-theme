<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<div class="top">

    <h1>Pickmedia Bootstrap 3 Theme for Concrete5</h1>
    <p>Compile less with grunt</p>
    <p>Watch folders & Livereload</p>
<!-- Standard button -->
<button type="button" class="btn btn-default">Default</button>

<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type="button" class="btn btn-primary">Primary</button>

<!-- Indicates a successful or positive action -->
<button type="button" class="btn btn-success">Success</button>

<!-- Contextual button for informational alert messages -->
<button type="button" class="btn btn-info">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type="button" class="btn btn-warning">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type="button" class="btn btn-danger">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type="button" class="btn btn-link">Link</button>

</div>

	<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide hidden-xs">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://lorempixel.com/1500/600/abstract/1">
      <div class="container">
        <div class="carousel-caption">
          <h1>PiCKMEDIA Bootstrap 3 Carousel Layout</h1>
          <p>This is an example layout with carousel that uses the Bootstrap 3 styles.</small></p>
          <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
        </p></div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/600/abstract/2">
      <div class="container">
        <div class="carousel-caption">
          <h1>Font Awesome Icons</h1>
          <p>The iconic font designed for Bootstrap included.</p>
          <p><i class="fa fa-camera-retro fa-5x"></i> fa-camera-retro</p>
          <p><a class="btn btn-large btn-primary" href="http://fontawesome.io/">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/600/abstract/3">
      <div class="container">
        <div class="carousel-caption">
          <h1>Changes to the Grid</h1>
          <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
          <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>    
    <div class="item">
      <img src="http://placehold.it/1500X500">
      <div class="container">
        <div class="carousel-caption">
          <h1>Percentage-based sizing</h1>
          <p>With "mobile-first" there is now only one percentage-based grid.</p>
          <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->

 <div class="progress progress-striped active ">
  <div class="progress-bar pg1"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
    <span class="sr-only">45% Complete</span>
  </div>
</div>

<div class="container">
<div class="row">
  <div class="col-md-1 bg-primary box">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
  <div class="col-md-1 bg-primary">.col-md-1 bg-primary</div>
</div>
<div class="row">
  <div class="col-md-8 bg-success">.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success</div>
  <div class="col-md-4 bg-success">.col-md-4 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success</div>
</div>
<div class="row">
  <div class="col-md-4 bg-info">.col-md-4 bg-info.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success</div>
  <div class="col-md-4 bg-info">.col-md-4 bg-info.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success</div>
  <div class="col-md-4 bg-info">.col-md-4 bg-info.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success</div>
</div>
<div class="row">
  <div class="col-md-6 bg-warning">.col-md-6 bg-warning.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success</div>
  <div class="col-md-6 bg-warning">.col-md-6 bg-warning.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success.col-md-8 bg-success</div>
</div>
</div>

<?php   $this->inc('elements/footer.php'); ?>