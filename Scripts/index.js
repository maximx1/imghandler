

var loadAndDisplayAllImages = function() {
	$.getJSON("AssetLoaders/loadAll.php",
		{},
		function(imageDirectories) {
			var insertionData = "";

			for(i = 0; i < imageDirectories.length; i += 1) {
				imageDirectories[i] = imageDirectories[i].substring(3);
				insertionData += "<a href='" + imageDirectories[i] + "'>";
				insertionData += "<div class='imgDisplay'>";
				insertionData += "<img onload='this.style.opacity=\"1\";'class='pic' src='" + imageDirectories[i] + "' />"
				insertionData += "</div>"
				insertionData += "</a>";
			}
			$("#imageContainer").html(insertionData);
		}
	);
}

var loadCredentialQuickLoad = function() {
	var insertionData = "<input id='linkToDownload' type='text' name='linkToDownload'>";
	insertionData += "<button id='downloadLink'>Upload</button>";
	insertionData += "<script type='text/javascript' src='Scripts/uploadScript.js'></script>";
	$("#credentialQuickLoad").html(insertionData);
}

//Upon document load.
$(document).ready(
	function() {
		loadAndDisplayAllImages();
		loadCredentialQuickLoad();
	}
);
