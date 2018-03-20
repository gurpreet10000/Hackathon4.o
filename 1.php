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

<div class="w3-content w3-section" style="max-width:500px">

<?php
                    
                      $q= $d->select('gallery');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<img class="mySlides w3-animate-fading" src="img/<?php echo $data[1]; ?>" width="100%" >
<?php  }?>

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>

</body>
</html> 