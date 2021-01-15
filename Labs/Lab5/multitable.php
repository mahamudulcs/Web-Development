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