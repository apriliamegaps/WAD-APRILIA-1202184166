<?php
	include '../connection.php';

	$id = $_GET['id'];

	$query = mysqli_query($koneksi, "DELETE FROM event where id=$id");

	header("location:../tampilan/index.php");
