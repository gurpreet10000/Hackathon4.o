<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<body>

<div class="w3-content" style="max-width:800px;position:relative">

<?php
                    
                      $q= $d->select('gallery');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<img class="myslides" src="img/<?php echo $data[1]; ?>" width="100%" >
<?php  }?>


<a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html> 
