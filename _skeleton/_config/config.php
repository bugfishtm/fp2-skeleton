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
		
		// Configuration to Load at Site Module Initializiation
	*/ if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	
	
	////////////////////////////////////////////////////////////////
	// Yet can set up most site module configuration here
	// Only loaded for site module. In mid of initialization
	////////////////////////////////////////////////////////////////

	#####################################################################################
	## User Settings (If using Users Class Module)
	#####################################################################################	
		# Maximum Days Sessions/Cookies are Valid
		define("_USER_MAX_SESSION_", 			7); 
		# Time in Minutes token out of Activation Mails are Valid
		define("_USER_TOKEN_TIME_", 			600); 
		# Block Users after X Fail Logins (can be false)
		define("_USER_AUTOBLOCK_", 				false); 
		# Time in Minutes User has to wait between Requests (anti flood)
		define("_USER_WAIT_COUNTER_", 			600); 
		# Log old sessions? (Logins, Recoverys, Activations, Mail Changes) (true/false)
		define("_USER_LOG_SESSIONS_", 			true); 
		# Log User IPs in Database (true/false)
		define("_USER_LOG_IP_", 				true); 
		# True - Remove Recovery Keys after user Succesfully Logged In | false - Preserve Keys
		define("_USER_REC_DROP_", 				true); 
		# True - Allow Multi Login  | false - Disable Multi Login (old session logout)
		define("_USER_MULTI_LOGIN_", 			false); 
		# Passwordfilter: Min Signs
		define("_USER_PF_SIGNS_", 				7); 
		# Passwordfilter: Min Capital Signs
		define("_USER_PF_CAPSIGNS_", 			1); 
		# Passwordfilter: Min Small Signs
		define("_USER_PF_SMSIGNS_", 			1); 
		# Passwordfilter: Min Special Signs
		define("_USER_PF_SPSIGNS_", 			false); 
		# Passwordfilter: Min Numeric Signs
		define("_USER_PF_NUMSIGNS_", 			1); 
		
	#####################################################################################
	## Robots.txt Settings (If using Generated Robots.txt creation)
	#####################################################################################		
		// URL of the Sitemap for Current Site to include in Robots
		define("_HIVE_SITEMAP_URL_", 			false);
		// 1 - Allow All | 2 - Allow nothing		
		define("_HIVE_ROBOT_SPAWN_", 			false); 	
		
	#####################################################################################
	## HTAccess Settings (If using generated .htaccess creation)
	#####################################################################################
		// 1 - Create HTAccess | 0 - Do Not Create HTAccess
		define("_HIVE_HTACCESS_WRITE_", 0); 
		// 1 - Forward to HTTPS | 0 - Not Forward
		define("_HIVE_HTACCESS_HTTPS_FORWARD_", 0); 
		// 1 - Forward to HTTPS | 0 - Not Forward
		define("_HIVE_HTACCESS_WWW_FORWARD_", 	0); 
		// 1 - REFRESH MODULE | 0 - Not Refresh Module
		define("_HIVE_HTACCESS_REFRESH_", 		0); 	
		
	#####################################################################################
	## Updater Script Settings (Optional)
	#####################################################################################
		// Title for the Updater on this Site
		define("_UPDATER_TITLE_", 		"FP² Module Example"); 
		// Code needed for Update? (can be false)	
		define("_UPDATER_CODE_", 		false); 
		
	#####################################################################################
	## Additional Functionalities Setup (Optional)
	#####################################################################################
		# Log CURL Class Requests? (true/false)
		define("_HIVE_CURL_LOGGING_", 	false); 
		# Block IPs after X Failures
		define("_HIVE_IP_LIMIT_", 		100000); 
		# Log Referers? (true/false)
		define("_HIVE_REFERER_", 		0); 
		# Default CSRF Code Valid Time in Seconds	
		define('_HIVE_CSRF_TIME_',  	600); 
		# True - Only Cronjob Execution from Command Line | False - Allow Cronjob Execution in Browser
		define('_CRON_ONLY_CLI_',  		true);  
		# Activate Javascript Debugging Script
		define('_HIVE_JS_ACTION_ACTIVE_',  false);  
