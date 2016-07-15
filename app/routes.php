<?php
	
	$w_routes = array(
		['GET', '/', 'Open#home', 'homev'],
		["GET|POST", "/contact/", "Default#contact", "default_contact"],
		['GET|POST', "/recovery/[:id]",'Gen#gen_pdf', 'gen_gen_pdf'],
		["GET|POST", "/claims/", "Open#claim_add", "Open_claim_add"],
		["GET|POST", "/backoffice/addContract/", "BackOffice#contract_add", "back_office_contract_add"],
		["GET|POST", "/backoffice/login/", "BackOffice#e_login", "back_office_login"],
		
	);