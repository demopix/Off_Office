CREATE TABLE admin (
  employ_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  employ_email VARCHAR(50) NOT NULL,
  employ_name VARCHAR(30) NULL,
  employ_rule VARCHAR(15) NULL,
  department VARCHAR(15) NULL,
  employ_password VARCHAR(50) NULL,
  PRIMARY KEY(employ_id)
);

CREATE TABLE cities (
  citie_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  users_user_id INTEGER UNSIGNED NOT NULL,
  countries_countrie_id INTEGER UNSIGNED NOT NULL,
  citie_name VARCHAR(15) NULL,
  country_id INTEGER UNSIGNED NULL,
  PRIMARY KEY(citie_id),
  INDEX Cities_FKIndex1(countries_countrie_id),
  INDEX Cities_FKIndex2(users_user_id)
);

CREATE TABLE claims (
  claim_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  contracts_contract_id INTEGER UNSIGNED NOT NULL,
  users_user_id INTEGER UNSIGNED NOT NULL,
  user_email VARCHAR(50) NULL,
  user_lname VARCHAR(15) NULL,
  user_fname VARCHAR(15) NULL,
  claim_img VARCHAR(50) NULL,
  date DATE NULL,
  atachm VARCHAR(50) NULL,
  PRIMARY KEY(claim_id),
  INDEX Claims_FKIndex1(users_user_id),
  INDEX Claims_FKIndex2(contracts_contract_id)
);

CREATE TABLE contracts (
  contract_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  admin_employ_id INTEGER UNSIGNED NOT NULL,
  users_user_id INTEGER UNSIGNED NOT NULL,
  user_fname VARCHAR(15) NULL,
  user_lname VARCHAR(15) NULL,
  contract_num VARCHAR(15) NULL,
  contract_end DATE NULL,
  contract_copy VARCHAR(30) NULL,
  contract_type VARCHAR(10) NULL,
  employ_email VARCHAR(50) NULL,
  PRIMARY KEY(contract_id),
  INDEX contracts_FKIndex1(users_user_id),
  INDEX contracts_FKIndex2(admin_employ_id)
);

CREATE TABLE countries (
  countrie_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  users_user_id INTEGER UNSIGNED NOT NULL,
  countrie_name VARCHAR(15) NULL,
  PRIMARY KEY(countrie_id),
  INDEX Countries_FKIndex1(users_user_id)
);

CREATE TABLE docs (
  doc_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  claims_claim_id INTEGER UNSIGNED NOT NULL,
  user_email VARCHAR(50) NULL,
  user_lname VARCHAR(15) NULL,
  user_lname_2 INTEGER(15) UNSIGNED NULL,
  date DATE NULL,
  atachm VARCHAR(50) NULL,
  PRIMARY KEY(doc_id, claims_claim_id),
  INDEX Docs_FKIndex1(claims_claim_id)
);

CREATE TABLE history (
  users_user_id INTEGER UNSIGNED NOT NULL,
  claims_claim_id INTEGER UNSIGNED NOT NULL,
  user_email VARCHAR(50) NULL,
  claim_id INTEGER UNSIGNED NULL,
  doc_id INTEGER UNSIGNED NULL,
  user_fname VARCHAR(15) NULL,
  user_lname VARCHAR(15) NULL,
  claim_img VARCHAR(50) NULL,
  date DATE NULL,
  atachm VARCHAR(50) NULL,
  contract_type VARCHAR(10) NULL,
  contract_copy VARCHAR(30) NULL,
  INDEX History_FKIndex1(claims_claim_id),
  INDEX History_FKIndex2(users_user_id)
);

CREATE TABLE planning (
  plan_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  admin_employ_id INTEGER UNSIGNED NOT NULL,
  employ_id INTEGER UNSIGNED NULL,
  employ_rule VARCHAR(15) NULL,
  employ_name VARCHAR(30) NULL,
  update_date DATE NULL,
  alert_date DATE NULL,
  task VARCHAR(50) NULL,
  department VARCHAR(15) NULL,
  insert_date DATE NULL,
  PRIMARY KEY(plan_id),
  INDEX Planning_FKIndex1(admin_employ_id)
);

CREATE TABLE users (
  user_id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  user_fname VARCHAR(15) NULL,
  user_lname VARCHAR(15) NULL,
  contract_id INTEGER UNSIGNED NULL,
  city_id INTEGER UNSIGNED NULL,
  country_id INTEGER UNSIGNED NULL,
  pobox_id INTEGER UNSIGNED NULL,
  user_address VARCHAR(50) NULL,
  user_gender VARCHAR(5) NULL,
  user_bdate DATE NULL,
  user_password VARCHAR(50) NULL,
  user_tel INTEGER UNSIGNED NULL,
  date_registry DATE NULL,
  user_email VARCHAR(50) NOT NULL,
  user_status VARCHAR(10) NULL,
  user_condition VARCHAR(10) NULL,
  PRIMARY KEY(user_id)
);


