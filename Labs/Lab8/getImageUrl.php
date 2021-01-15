<?php
$mysqli = new mysqli("localhost","m15islam","PraumDec","m15islam");

if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL:" . $mysqli -> connect_error;
	exit();
}
$city = $_GET["city"];
$commandText = "SELECT name, url FROM photos where name like '$city'";
$result = $mysqli->query($commandText);
$images = array();

if ($result) {
	while ($row = mysqli_fetch_assoc($result)){
		array_push($images, $row['url']);
		}
		$result->close();
}
$mysqli->close();

echo json_encode($images);

?>