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
	*/ if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	////////////////////////////////////////////////////////////////
	// Put cronjob code for your site module here
	// If _cron/daily.php is setup to run daily
	// this code will be executed as well.
	////////////////////////////////////////////////////////////////
	// Cronjob output will be saved in database automatically.
	// As no site module is active at cronjobs
	// you have limited access to dynamic object variables and classes
	// as only the global ones are reliable
	// You can access site vars with: cron_var for your module (object["cron_var"]->get)
	// You can access the current site module name with: $hive_mode_cron
	// You can access the current site modules mail (logged in with site module infos: cron_mail
	// cron_mail_template Object class also is for this current cron site mode configured
	// so you can access site modules mail/var configuration.
?>