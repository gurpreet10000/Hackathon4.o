<?php

include_once 'lib/dao.php';
include_once 'lib/model.php';

$d = new dao();
$m = new model();

?>
<?php include'common/header.php'; ?>
	<div id="content-wrapper">
	<div class="col-md-12">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:450px;width:1080px;"><div id="gmap_canvas" style="height:450px;width:1080px;"><a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">www.map-embed.com</a><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">wordpress themes</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(23.0497364,72.51172410000004),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.0497364, 72.51172410000004)});infowindow = new google.maps.InfoWindow({content:"<b>Titenium university</b><br/>thaltej<br/>382481 Ahmedabad" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		</div>
		<div class="col-md-12" style="height:40px;">&nbsp;</div>
		<div class="alert alert-info col-md-7">
			<h4><strong>Please Give Your Feedback From Here !!</strong></h4>
		</div>
		<div class="col-md-8">
	<form role="form" method="post" action="insert_master.php" id="feedback">
		<input type="text" name="name" placeholder="Name" class="form-group input-lg col-md-5" id="f_name">
		<input type="text" name="email" placeholder="Email" class="form-group input-lg col-md-5" id="f_email">
		<input type="text" name="subject" placeholder="Subject" class="form-group input-lg col-md-10" id="f_subject">
		<textarea class="form group input-lg col-md-10" rows="5" name="comments" placeholder="Message" id="f_comments"></textarea>	
		<div class="col-md-12" style="height:10px;"></div>
		<input type="submit" class="btn btn-primary col-md-3" value="Submit" name="feedback" style="height:40px">
		</div>
	</form>
	</div>
	<div class="col-md-12" style="height:30px;"></div>
     <?php               
                      $q= $d->select('feedback');
                        while($data= mysqli_fetch_row($q))
                        {
                            ?>
<?php 
	session_start();
	if( isset($_SESSION['username'])==false)
	{
	header("location:pages-signin.php?msg1=Login First");
	} 
	if($data['1'] == $_SESSION['username'] )
		{ ?>
	 <div class="alert alert-warning col-md-6">
     	<h4><strong>Update Your Feedback From Here !!</strong></h4>
     </div>
     <form role="form" method="post" action="update_master.php" id="feedback">
		<div class="col-md-7">
		<input type="text" name="name" placeholder="Name" class="form-group input-lg col-md-10" id="f_name" value="<?php echo $data['1']; ?>">
		</div>
		<div class="col-md-7">
		<input type="text" name="email" placeholder="Email" class="form-group input-lg col-md-10" id="f_email" value="<?php echo $data['2']; ?>">
		</div>
		<div class="col-md-7">
		<input type="text" name="subject" placeholder="Subject" class="form-group input-lg col-md-10" id="f_subject" value="<?php echo $data['3']; ?>">
		</div>
		<div class="col-md-7">
		<textarea class="form group input-lg col-md-10" rows="5" name="comments" placeholder="Message" id="f_comments"><?php echo $data['4']; ?></textarea>	
		</div>
		<div class="col-md-12" style="height:10px;"></div>
		<div class="col-md-7">
		<input type="submit" class="btn btn-primary col-md-10" value="Update" name="feedback_update" style="height:40px">
		</div>
	</form>
</div>
<?php }  } ?>
	</div>
	<?php include'common/footer.php'; ?>
<script type="text/javascript">
	$("#feedback").validate({ focusInvalid: true, errorPlacement: function () {} });

		// Validate name
		$("#f_name").rules("add", {
			required: true,
			minlength: 3
		});

		// Validate email
		$("#f_email").rules("add", {
			required: true,
		});
		
		// Validate subject
		$("#f_subject").rules("add", {
			required: true,
		});

		$("#f_comments").rules("add", {
			required: true,
		});
</script>