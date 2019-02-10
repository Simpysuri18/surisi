<!DOCTYPE html>
<?php
/* Example Hello World program with Parameters
 * 
 * Sam Scott, March 2015
 */
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client</title>
    </head>
    <body>
        <p>Hello, Mr. <?= $_GET["lastName"] ?>. May I call you <?= $_GET["firstName"] ?>?</p>
    </body>
</html>
