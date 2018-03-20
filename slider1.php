<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>	
<?php include 'common/header.php'; ?>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">

	 <?php
                    $i = 1;
                      $q= $d->select('gallery');
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
       <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
      <!-- Wrapper for slides -->
    
              <?php $i++; } ?>
              </ol>
              <div class="carousel-inner" role="listbox">
    <?php
                    $active_flag = 1;
                    $i = 1;
                      $q= $d->select('gallery');
                        while($data= mysqli_fetch_row($q))
                        {
                        ?>
      <div class="item">
        <img src="img/26912432_ml.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    </div>
       <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
              <?php $i++; } ?>





<?php include 'common/footer.php'; ?>