<?php
$mysqli = new mysqli("localhost","m15islam","PraumDec","m15islam");

if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL:" . $mysqli -> connect_error;
	exit();
}

$commandText = "SELECT name, url FROM photos";
$result = $mysqli->quert($commandText);
if ($result) {
	printf("Select returned %d rows.", $result_>num_rows);
	printf("<br/>";
	while ($row = mysqli_fetch_row($result)) {
		printf("<img src='%s' alt='' width='350' height='350'><div>%s</div>",$row[url],$row[name]);
		print("<br/>");
	}
	$result->close();
}
$mysqli->close();
?>