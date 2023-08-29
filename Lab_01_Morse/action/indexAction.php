<?php
	require_once("action/utils/morse-utils.php");
	
	function execute() {
		$text = "";

		if(!empty($_POST["chaineMorse"])) {
			$text = encodeMorse($_POST["chaineMorse"]);
		} elseif(!empty($_POST["chaineAscii"])) {
			$text = decodeMorse($_POST["chaineAscii"]);
		}
		
		return $text;
	}
?>