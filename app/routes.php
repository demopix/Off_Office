<?php
	
	$w_routes = array(
		['GET', '/', 'Open#home', 'home'],
		["GET|POST", "/verification/", "Open#verification", "open_verification"],
		["GET", "/login/", "Users#login", "users_login"],
		["POST", "/login/", "Users#loginPost", "users_loginPost"],
		["GET|POST", "/signup/", "Users#signupPost", "users_signupPost"],
		['GET', '/logout/', 'Users#logout', 'users_logout'],

		["GET|POST", "/contact/", "Open#contact", "open_contact"],
 
 ["GET|POST", "/backoffice/resetpass/", "Admin#reset_pass", "admin_resetpass"],
        ["GET|POST", "/resetpass/", "Users#reset_pass", "users_resetpass"],
        //["GET|POST", "/backoffice/initpass/", "Admin#init_pass", "admin_initpass"],
        ["GET|POST", "/initpass/[:token]", "Users#init_pass", "users_initpass"],
		
		['GET|POST', "/recovery/[:id]/[:pdf_mail]/",'Gen#gen_pdf', 'gen_gen_pdf'],
		["GET|POST", "/claims/", "Open#claim_add", "open_claim_add"],
		['GET|POST', "/eclient/details/","Open#client_details", "open_c_details"],
		//
		['GET|POST', "/eclient/",'Open#e_client', 'open_e_client'],

		["GET|POST", "/backoffice/login/", "Admin#e_login", "admin_login"],
		["GET|POST", "/backoffice/addContract/", "BackOffice#contract_add", "back_office_contract_add"],
		["GET|POST", "/backoffice/login/", "BackOffice#e_login", "back_office_login"],
		['GET|POST', "/backoffice/planning/",'Planning#planning', 'planning_planning'],
		['GET|POST', "/backoffice/planning/add/",'Planning#task_add', 'planning_task_add'],
		["GET|POST", "/backOffice/[:e]", "BackOffice#backoffice", "backoffice_main"],
		["GET|POST", "/backoffice/signupE/", "Admin#employ_add", "admin_employ_add"],

	);

	
	$w_routesAdmin = array(
		['GET', '/', 'Open#home', 'home'],
		["GET|POST", "/verification/", "Open#verification", "open_verification"],
		["GET", "/loginn/", "Users#login", "users_login"],
		["POST", "/loginn/", "Users#loginPost", "users_loginPost"],
		["GET|POST", "/signup/", "Users#signupPost", "users_signupPost"],
		['GET', '/logout/', 'Users#logout', 'users_logout'],

		["GET|POST", "/contact/", "Open#contact", "open_contact"],
 
        ["GET|POST", "/employeds/resetpass/", "Admin#reset_pass", "admin_resetpass"],
        ["GET|POST", "/resetpass/", "Users#reset_pass", "users_resetpass"],
        ["GET|POST", "/employeds/initpass/[:token]", "Admin#init_pass", "admin_initpass"],
        //["GET|POST", "/initpass/[:token]", "Users#init_pass", "users_initpass"],
		
		['GET|POST', "/recovery/[:id]/[:pdf_mail]/",'Gen#gen_pdf', 'gen_gen_pdf'],
		["GET|POST", "/claims/", "Open#claim_add", "open_claim_add"],
		['GET|POST', "/eclient/details/","Open#client_details", "open_c_details"],
		//
		['GET|POST', "/eclient/",'Open#e_client', 'open_e_client'],

		["POST", "/logine/", "Admin#loginPost", "admin_loginPost"],
		["GET|POST", "/signup/", "Admin#signupPost", "admin_signupPost"],
        ["GET|POST", "/employeds/login/", "Admin#e_login", "admin_login"],
		["GET|POST", "/employeds/addContract/", "BackOffice#contract_add", "back_office_contract_add"],
		//["GET|POST", "/backoffice/login/", "BackOffice#e_login", "back_office_login"],
		['GET|POST', "/planning/",'Planning#planning', 'planning_planning'],
		['GET|POST', "/planning/add/",'Planning#task_add', 'planning_task_add'],
		["GET|POST", "/employeds/[:e]", "BackOffice#backoffice", "backoffice_main"],
		["GET|POST", "/employeds/signupE/", "Admin#employ_add", "admin_employ_add"],

	);

