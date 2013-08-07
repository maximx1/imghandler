$(document).ready(
	function() {
		$.getJSON("AssetLoaders/loadAll.php",
			{},
			function(imageDirectories) {
				var insertionData = "";

				for(i = 0; i < imageDirectories.length; i += 1) {
					imageDirectories[i] = imageDirectories[i].substring(3);
					insertionData += "<a href='" + imageDirectories[i] + "'>";
					insertionData += "<div class='imgDisplay'>";
					insertionData += "<img class='pic' src='" + imageDirectories[i] + "' /></div></a>";
				}
				$("#imageContainer").html(insertionData).fadeIn("slow");
			}
		);
	}
);
