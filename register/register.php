<?php

require_once("../env.php");
require_once("../config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
	$nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
	$tanggal_lahir = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
	$alamat = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
    // enkripsi password
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

	$temp = explode("-", $tanggal_lahir);
	$tanggal_lahir = "";
	for ($i = 0; $i < count($temp); $i++) {
		$separator = ($i > 0) ? "/" : "" ;
		$tanggal_lahir = $tanggal_lahir.$separator.$temp[$i];
	}
    // menyiapkan query
	$sql = "INSERT INTO users (nama, username, password, jenis_kelamin, tanggal_lahir, alamat) 
	VALUES (:nama, :username, :password, :jenis_kelamin, :tanggal_lahir, :alamat)";
	$stmt = $conn->prepare($sql);

    // bind parameter ke query
	$params = array(
		":nama" => $nama,
		":username" => $username,
		":password" => $password,
		":jenis_kelamin" => $jenis_kelamin,
		":tanggal_lahir" => $tanggal_lahir,
		":alamat" => $alamat,
	);

    // eksekusi query untuk menyimpan ke database
	$saved = $stmt->execute($params);
	session_start();
	$_SESSION["user"] = $user;
	if($saved) header("Location: http://".$SERVER_NAME."/".$PROJECT_NAME."/");
}

?>