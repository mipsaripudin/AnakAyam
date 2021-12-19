<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ANAK AYAM</title>
</head>
<body>
<?php 
	$ayam = (int)$_POST['ayam'];
	echo "Anak Ayam turun : ". $ayam;
?><br>
<?php
	for ($i=$ayam; $i > 0; $i--) {
		echo "Anak ayam turun ".$i;
		$j = $i-1;
		if($i !=1){
			echo " Mati satu tinggal ". $j;
?><br>
<?php
		}
		else{
			echo " Mati semua tinggal Induk nya";
		}
	}


 ?>



</body>
</html>
