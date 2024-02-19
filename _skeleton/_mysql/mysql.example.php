<?php
	/* 	__________ ____ ___  ___________________.___  _________ ___ ___  
		\______   \    |   \/  _____/\_   _____/|   |/   _____//   |   \ 
		 |    |  _/    |   /   \  ___ |    __)  |   |\_____  \/    ~    \
		 |    |   \    |  /\    \_\  \|     \   |   |/        \    Y    /
		 |______  /______/  \______  /\___  /   |___/_______  /\___|_  / 
				\/                 \/     \/                \/       \/  	
							www.bugfish.eu
							
	    Bugfish Fast PHP Page Framework
		Copyright (C) 2024 Jan Maurice Dahlmanns [Bugfish]

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <https://www.gnu.org/licenses/>.
		
		File Description:
			File in this folder with mysql.**table_name**.php will be installed automatically if you use syntax below.
			Use CREATE TABLE IF NOT EXISTS - to prevent performance lowagen through handler errors.
			File name shall not create the Prefix which has been set at the installation, prefix of tables will
			automatically be included!
	*/ if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Here is a place to install Database Tables
	// Only one table per file
	// Tables will be auto-installed if non-existing or deleted.
	// You can do different operations with table here, but if table name corrospondig to file name mysql.X.php
	// is not present this file will be executed upon site module loadup.
	// You can also use _HIVE_PREFIX_ as prefix. But be cautios! This is not recommended if you want to supply your
	// Module to the store or make it full compliant with the multi site functionalities!
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//	$object["mysql"]->multi_query("CREATE TABLE IF NOT EXISTS `"._HIVE_SITE_PREFIX_."example` (
	//	  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Unique ID',
	//	  `creation` datetime DEFAULT CURRENT_TIMESTAMP COMMENT 'Creation Date',
	//	  `modification` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Modification Date',
	//	  PRIMARY KEY (`id`));");
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////