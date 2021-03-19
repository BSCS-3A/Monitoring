<?php
	$conn=mysqli_connect("localhost","root","","buceilsv1.6");
		if(!$conn){
			echo "Error! database connect error.".mysqli_error($conn);
		}
?>