<?php
	
	$w_routes = array(
		['GET', '/', 'Open#home', 'home'],
		["GET|POST", "/verification/", "Open#verification", "open_verification"],
		["GET|POST", "/login/", "Users#login", "users_login"],
        //["GET|POST", "/backoffice/resetpass/", "BackOffice#resetpass", "resetpass"],
		["GET|POST", "/contact/", "Open#contact", "open_contact"],

		['GET|POST', "/recovery/[:id]",'Gen#gen_pdf', 'gen_gen_pdf'],
		["GET|POST", "/claims/", "Open#claim_add", "open_claim_add"],
		['GET|POST', "/eclient/details/","Open#client_details", "open_c_details"],
		//
		['GET|POST', "/eclient/",'Open#e_client', 'open_e_client'],

		["GET|POST", "/backoffice/login/", "Admin#e_login", "admin_login"],
		["GET|POST", "/backoffice/addContract/", "BackOffice#contract_add", "back_office_contract_add"],
		["GET|POST", "/backoffice/login/", "BackOffice#e_login", "back_office_login"],
		['GET|POST', "/backoffice/planning/",'Planning#planning', 'planning_planning'],
		["GET|POST", "/backoffice/[:e]", "BackOffice#backoffice", "backoffice_list"],
		["GET|POST", "/backoffice", "BackOffice#backoffice", "backoffice_main"],
		
		
		["GET|POST", "/backoffice/signupE/", "Admin#employ_add", "admin_employ_add"],

	);


	

	// 	
	// 	//BackOfice rules -> employ ou +
	// 	

	// 	



	// 	
	

	// 	
	// 	
		
	// );