<?php

// get the header as well as dynamically insert meta tags
function getHeader($title, $keywords, $subject) {
	ob_start();
	include("header.php");
	$buffer = ob_get_contents();
	ob_end_clean();
	$buffer = str_replace("%TITLE%", $title, $buffer);
	$buffer = str_replace("%KEYWORDS%", $keywords, $buffer);
	$buffer = str_replace("%SUBJECT%", $subject, $buffer);
	echo $buffer;
}

?>
