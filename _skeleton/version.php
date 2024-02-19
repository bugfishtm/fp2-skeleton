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
	*/	
	
	// This is a template for a versioning file.
	// It is urgent to put this in your code.
	// You can change the version number, but leave the build at the end of it seperated by a dot!
	// You can increase the build number, this will eventually lead to updated beeing installed in the _update folder if there are some available for newer build numbers.
	// Other informations are for the store and internal systems.
	
	$x = array();
	
	// Identifier Name (Mostly for CMS Developers, just put something in here representing your module without "_" at the start.
	$x["rname"] 		= "_skeleton";
	
	// Build Number
	$x["build"] 		= "212";
	
	// Version Number
	$x["version"] 		= "2.".$x["build"];
	
	// Can be viewed in iframe?
	$x["iframe"] 		= false;
	
	// Can be viewed as session?
	$x["view"] 			= false;
	
	// Can be deployed multiple times?
	$x["singleuse"] 	= false;
	
	// Module Category
	$x["cat"] 			= "dev";
	
	// Module Languages Available
	$x["lang"] 			= array("en", "de");
	
	// Module License
	$x["license"] 		= "MIT";
	
	// Module Creator Name
	$x["autor"] 		= "Jan-Maurice Dahlmanns";
	
	// Module Creator Name Pseudo
	$x["pseudo"] 		= "Bugfish";
	
	// Module Creator Contact
	$x["mail"] 			= "requests@bugfish.eu";
	
	// Module Website
	$x["website"] 		= "www.bugfish.eu";
	
	// Module Name
	$x["name"] 			= "Template: Module Skeleton";
	
	// Short Description
	$x["short"] 		= "If you are a developer, you can investige this site modules skeleton to create an own module!";
	
	// Long Description
	$x["description"] 	= "If you are a developer, you can investige this site modules skeleton to create an own module for the fast-php-page CMS! You can also find documentations at https://bugfishtm.github.io!";