<?php include 'common/header.php'; ?>
<div id="content-wrapper">
<?php 
	$count = $d->count_data("reg_id","users","");
	while ($row = mysqli_fetch_array($count))
	{
		echo $data=$row['COUNT(*)'];
	}
?>
<br>
<?php
	$count = $d->sum_data("reg_id","users","");
	while($row = mysqli_fetch_array($count))
	{
		echo $abc=$row['SUM(reg_id)'];
	}
?>
</div>
<?php include 'common/footer.php'; ?>