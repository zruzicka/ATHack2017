<?php
$timeStart = time();
session_start();
include "main/harvest/Harvest.php";
include "main/app/Query.php";
include "main/app/header.php";
include "main/app/connectionDetails.php";
include "main/app/connection.php";

echo "<div id='content'>";
echo "<div class='container'>";

include "main/harvest/showHarvest.php";


mysqli_close($conn);
$timeEnd = time();
echo "</div>";
echo "</br></br>Generated in " . ($timeEnd - $timeStart) . " seconds.";
echo "</div></body></html>";
?>