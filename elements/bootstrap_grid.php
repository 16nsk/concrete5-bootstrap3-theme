<?php  
defined('C5_EXECUTE') or die("Access Denied.");
//GRID LAYOUT TRHOUGH ATTRIBUTES testing...
$page = Page::getCurrentPage(); // get pageobject
$string = $page->getAttribute('bootstrap_pm_row_test2'); //get attribute
$array = array();
$lastindex = null;
$lastcolname = null;
$continueuntillfound = null;
foreach(explode(PHP_EOL,$string) as $item)
{
  if($continueuntillfound and $item != $continueuntillfound)
    continue;
  $continueuntillfound = null;
  if($item == '.row')
  {
    $continueuntillfound = '.row.';
    continue;
  }
  elseif(strpos($item,'.row.') === 0)
  {
    $lastindex = substr($item,5);
    $array[$lastindex] = array();
  }
  elseif($lastindex and $explode = explode('.',$item) and count($explode) > 2)
  {
    $lastcolname = $explode[1];
    $array[$lastindex][] = array('coltype' => trim($explode[2]),'colname' => trim($explode[1]));
  }
}
foreach ($array as $rowname => $row) {
  ?>
<div class="row <?echo$rowname?>">
  <?php foreach ($row as $column) { ?>  
  <div class="<?echo$column["coltype"]?> boxpadding">
      <!-- dummy content -->
    <div class="box">
      <h1><?echo$rowname?></h1>
      <h2><?echo$column["colname"]?></h2>
        <img class="img-responsive" src="http://lorempixel.com/abstract/800/300/">
        <?php
            $a = new Area($column["colname"]);
            $a->display($c);
        ?>
    </div>
      <!-- // dummy content -->
  </div>
  <?php } ?>
</div>
<?php } ?>