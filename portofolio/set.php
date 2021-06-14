<?php

if(isset($_POST['jumlah_porto'])){
	$jumlah_porto = $_POST["jumlah_porto"];
	header("Location: ../portofolio");
}else{
	// $jumlah_porto = 5;
}
