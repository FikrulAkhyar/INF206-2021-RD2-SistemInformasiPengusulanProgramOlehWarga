<?php
  // Create database connection
  include 'config.php';

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$judul = $_POST['judul'];
    // $deskripsi = $_POST['deksripsi'];  
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
  	// image file directory
  	$target = "img/program/".basename($image);

  	$sql = "INSERT INTO program (image, nama, keterangan) VALUES ('$image', '$judul', '$deskripsi')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  header('location: Realisasikan.php');
?>