<?php 
defined('C5_EXECUTE') or die("Access Denied.");

/**
 *
 * The carousels view template
 *
 * @author Oliver Green <green2go@gmail.com>
 * @link http://olsgreen.com
 * @license Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 */

?>

<!-- Carousel !-->

<div id="bootstrap-carousel-<?php echo $bID; ?>" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for($i = 0; $i < count($slides); $i++) { ?>
        <li data-target="#bootstrap-carousel-<?php echo $bID; ?>" data-slide-to="<?php echo $i; ?>"<?php echo ($i == 0) ? ' class="active"' : ''; ?></l></li>
        <?php } ?>
    </ol>

    <!-- Carousel items -->
    <div class="carousel-inner">
        <?php $first = true; foreach($slides as $slide) { ?>
        <div class="item<?php echo ($first) ? ' active' : ''; ?>" style="<?php echo 'height:'.$height.';';?><?php echo 'width:'.$width.';';?>background-image:url('<?php echo $slide['image']->getURL(); ?>');">
            
            <div class="container">
                
            <?php if($slide['content']) { ?>
            <div class="carousel-caption">
                <?php echo $slide['content']; ?>
            </div>
            <?php } ?>
            </div>
        </div>
        <?php $first = false; } ?>
    </div>
    <!-- Carousel nav -->

  <!-- Controls -->
  <a class="left carousel-control" href="#bootstrap-carousel-<?php echo $bID; ?>" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#bootstrap-carousel-<?php echo $bID; ?>" data-slide="next">
    <span class="icon-next"></span>
  </a>  

     <!-- <a class="left carousel-control" href="#bootstrap-carousel-<?php echo $bID; ?>" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#bootstrap-carousel-<?php echo $bID; ?>" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>    !-->

</div>
