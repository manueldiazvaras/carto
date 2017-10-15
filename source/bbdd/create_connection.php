<?php

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
	// echo 'Connected sucessfuly <br>';
}

// Cambiamos charset
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
    exit();
	} else {
    // printf("Actual...: %s\n", $conn->character_set_name());
}