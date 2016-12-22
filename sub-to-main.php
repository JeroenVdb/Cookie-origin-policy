<?php
	$name = "sub-to-main";
	$domain = ".jeroenvdb.be";
	$value = "something";

	setcookie($name, $value, time() + 3600, "/", $domain);
 ?>
