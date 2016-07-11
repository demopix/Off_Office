<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		["GET|POST", "/contact/", "Default#contact", "default_contact"],
		['GET', "/recovery/[:id]",'Gen#gen_pdf', 'gen_gen_pdf'],
		
	);