<?php

function appendURLtoQueue($url) {
	file_put_contents(__DIR__ . "/../BackgroundServices/DownloadUtility/imageDownloader/imagesToDownload.txt", $url . "\n", FILE_APPEND);
}

?>
