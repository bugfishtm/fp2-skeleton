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
		
		// Configuration Injection to be loaded after Initializations, after global_post injections!
	*/ if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Yet can set up most site module configuration here
	// Only loaded for site module. In the end of initialization
	// Mostly used for navigation items, or more for various themes or dynamic themes.
	// as _HIVE_URL_REL_ is already defined here.
	// So you can use functions like  hive_get_url_rel(array("first_loc", "secloc", false)) here to define navigation items
	// location 
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////