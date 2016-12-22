<?php
	$name = "sub-to-sub";
	$domain = ".cookietest.jeroenvdb.be";
	$value = "something";

	setcookie($name, $value, time() + 3600, "/", $domain);
 ?>
