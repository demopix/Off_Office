<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		["GET|POST", "/contact/", "Default#contact", "default_contact"],
	);