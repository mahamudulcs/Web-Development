<!DOCTYPE html>
<html>
<body>

<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>
<note>
<to>Mahamudul</to>
<from></from>
<heading>Reminder 2</heading>
<body>second note</body>
</note>


";

$xml-simplexml_load_string($myXMLData) or die("Error: Cannot create object");
foreach($xml->note as $item)
{
	echo (string)$item->to;
	echo (string)$item->from;
}
print_r($xml);
?>

</body>
</html>