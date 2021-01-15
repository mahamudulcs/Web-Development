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

$colnum = 5;
$rownum = 5;
for ($col = 0; $col <= $colnum; $col++) {
	for ($row = 0; $row <= $rownum; $row++)
	{
		$result = $row*$col;
		echo "<div style='display:inline-block;padding:10px'>$result</div>";
	}
	echo"<br/>";
}

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