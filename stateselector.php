<html>
<head>
<script>
	function makeAjaxRequest()
	{

	}
</script>
</head>
<body>
<form method="post">
<select name="country_id" id="country_id" onchange="makeAjaxRequest();">
<?php

	$query=$d->select("country","");

	while($data = mysqli_fetch_array($query))
		{
		?>
		<option value="<?php echo $data['country_id']; ?>">
		<?php echo $data['country_name']; ?></option>

			<?php 
				}	
			?>

</select>
	<br><br>
	<select id="state" name="state">
	<option>-Select-</option>
	</select>
</form>
</body>
</html>