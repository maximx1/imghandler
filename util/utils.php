<?php

/**
 * Checks if the 2nd string is the beginning substring of the first string
 *
 * @param $str string The original string.
 * @param $endstr string The possible starting substring.
 * @return true if the matches the passed in string.
 */
function startsWith($str, $endstr) {
	if(strlen($endstr) > strlen($str)) {
		return false;
	}
	else {
		return (strcmp(substr($str, 0, strlen($endstr)), $endstr) == 0);
	}
}

/**
 * Checks if the 2nd string is the end substring of the first string
 *
 * @param $str string The original string.
 * @param $endstr string The possible ending substring.
 * @return true if the matches the passed in string.
 */
function endsWith($str, $endstr) {
	if(strlen($endstr) > strlen($str)) {
		return false;
	}
	else {
		return (strcmp(substr($str, -strlen($endstr)), $endstr) == 0);
	}
}

/**
 * Recursively explores a directory system and merges an array of all the files found.
 *
 * @param $startdir string the root folder to recurse from.
 * @return string[] files found.
 */
function recursive_glob($startdir) {	
	$directories = glob($startdir, GLOB_MARK);
	$files = array();
	$directoriesLen = count($directories);
	if($directoriesLen > 0) {
		for($i = 0; $i < $directoriesLen; $i++) {
			if(!endsWith($directories[$i], "/")) {
				$files[] = $directories[$i];
				unset($directories[$i]);
			}
			else {
				$files = array_merge($files, recursive_glob($directories[$i]."*"));
			}
		}
	}

	return($files);
}

?>
