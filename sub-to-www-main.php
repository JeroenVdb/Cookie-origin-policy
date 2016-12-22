<?php
	$name = "sub-to-www-main";
	$domain = "www.jeroenvdb.be";
	$value = "something";

	setcookie($name, $value, time() + 3600, "/", $domain);
 ?>
