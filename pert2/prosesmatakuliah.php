<?php //filename: prosesmatakuliah.php

include("db.php");

if($_GET['action'] == "add") {
	// 2. Query
	$query = "INSERT INTO mata kuliah (kode_matkul, nama_matkul) VALUES('$_POST[kode_matkul]', '$_POST[nama_matkul]')";
}else if($_GET['action'] == "edit") {
	// 2. Query
	$query = "UPDATE mata kuliah
			  SET kode_matkul 	= '$_POST[kode_matkul]',
			  	  nama_matkul	= '$_POST[nama_matkul]'
			  WHERE id = $_POST[id]";
}else if($_GET['action'] == "delete") {
	$query = "DELETE FROM mata kuliah
			  WHERE id=$_GET[id]";
}

mysqli_query($koneksi, $query);

// REDIRECT ke template.php
header('Location: template.php?page=matakuliah');