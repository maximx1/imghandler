<?php

require_once("../util/utils.php");
echo json_encode(recursive_glob("../imguploads/*"));

?>
