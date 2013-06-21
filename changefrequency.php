<?php
	$freq = $_GET['frequency'];
	$host = "127.0.0.1";
	$port = 6020;

	$freq = str_pad($freq, 9, "0", STR_PAD_LEFT);

	$socket = socket_create(AF_INET, SOCK_DGRAM, 0) or die("Could not create socket\n");

	$result = socket_connect($socket, $host, $port) or die("Could not connect toserver\n");

	socket_write($socket, $freq, strlen($freq)) or die("Could not send data to server\n");

	socket_close($socket);
?>
