<!DOCTYPE html>
<?php
/* Example Hello World program with a numeric parameter. This file
 * demonstrates how to separate the processing (mostly) from the output. 
 * MUCH NICER CODE!
 * 
 * Sam Scott, March 2015
 */

// PROCESSING STARTS HERE
$n = 1;
if (isset($_GET['numHellos']) && is_numeric($_GET['numHellos'])) {
	 $n = $_GET['numHellos'];
}

$hellos = "";
for ($i = 0; $i < $n; $i++) { 
	$hellos .= "<p>Hello, World!</p>";
}

// OUTPUT STARTS HERE
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client Repeat</title>
    </head>
    <body>
        <?= $hellos ?>
    </body>
</html>

