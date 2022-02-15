<?php
session_start();
$_SESSION["favcolor"] = "red";
$_SESSION["favanimal"] = "cat";
echo "<H1>hello<H1> <br>";
echo '<a href="page2.php">Page2</a>';

