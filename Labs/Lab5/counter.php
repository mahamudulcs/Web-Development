<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>This is my page</title>
	</head>
<body>

<?php

$counter= $_SESSION["counter"];
$counter++
$_SESSION["counter"]= $counter;
if ($counter > 15){
	echo "<h1>Max Visits Reached</h1></br>";
}
else{
	echo "Visits : $counter";
}

?>
</body>
</html>