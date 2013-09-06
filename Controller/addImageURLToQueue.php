<?php
require_once(__DIR__ . "/../util/imageQueueHandler.php");

if(isset($_POST['linkToDownload'])) {
	 appendURLtoQueue($_POST['linkToDownload']);	
//appendURLtoQueue("http://upload.wikimedia.org/wikipedia/commons/e/e5/Chrysler_Building_Midtown_Manhattan_New_York_City_1932.jpg");	
}

?>
