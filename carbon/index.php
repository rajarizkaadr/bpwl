<?php
	require 'vendor/autoload.php';
	use Carbon\Carbon;

	$sekarang = carbon::now();

	echo "Sekarang :$sekarang <br>";
	echo "Umur Saya : ".carbon::createFromDate(1992,6,21)->age."<br>";
	echo "Besok : ".$sekarang->addDay();
	?>