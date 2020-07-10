<?php
	$db=mysqli_connect("localhost","root","","nbweb", "3306");

	if(!$db)
	{
	?>
		<script language="javascript">
		  alert("Error: Unable to Connect Database");
		</script>
	<?php
	}
?>
