<?php

$src = '../data/country-latlong-google.csv';
$lines = explode( "\r", file_get_contents($src) );
$array = array();

foreach($lines as $i => $line) {
	if($i == 0)
		continue;
	
	
	$cols = explode(";", $line);
	
	$array[] = array(
			'country' => $cols[0],
			'latitude' => doubleval(str_replace(",",".", $cols[1])),
			'longitude' => doubleval(str_replace(",",".", $cols[2])),
			'name' => $cols[3]
			);
}

header("Content-Type: text/json");
echo json_encode( $array );
