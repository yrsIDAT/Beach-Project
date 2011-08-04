<?php
mysql_connect("localhost", "root", "stevejobs131");
mysql_select_db("beaches");

$items = mysql_query("SELECT * FROM beaches");
$max = 0;
$min = 0;

while ($item = mysql_fetch_array($items)) {
	$rating = 0;
	
	if ($item['bathing'] == 1) $rating .= 5;
	
	switch ($item['wgrade']) {
		case 4:
			$rating += 5;
			break;
			
		case 3:
			$rating += 3;
			break;
		
		case 2:
			$rating += 1;
			break;
			
		case 1:
			$rating -= 5;
	}
	
	if ($item['lifeguard'] != "No lifeguard service") $rating += 5;
	
	if ($item['sewage'] != "" && $item['sewage'] != "no known local discharges") $rating -= 5;
	
	$rating += count(explode(",",$item['facilities']));
	
	$rating = ceil(($rating + 4) / 5);
	
	mysql_query("UPDATE beaches SET rating=$rating WHERE id=" . $item['id']);
	
	//if ($item['rating'] > $max) $max = $item['rating'];
	//if ($item['rating'] < $min) $min = $item['rating'];
}

//echo "Max: " . $max;
//echo "Min: " . $min;
?>