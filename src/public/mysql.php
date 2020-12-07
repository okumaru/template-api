<?php

declare(strict_types=1);

$mysqli = new mysqli("10.10.1.3", "root", "jagoan123", "okumaru");

// Check connection
if ( $mysqli->connect_errno ) {
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	exit();
}