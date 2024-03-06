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
	
	
	
	////////////////////////////////////////////////////////////////////////////////////////
	// This is the loader File
	// If your site module is choosing active in the current session
	// This file will be the loader file for your site module!
	// Do what you want here!
	// But comply to the rules of the documentation
	////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	// Simple Theme Header
	hive__simple_start($object,  "Module Skeleton - FP²", '<link rel="icon" type="image/x-icon" href="'._HIVE_URL_REL_.'/_core/_image/favicon.ico">'); ?>
		
	<div class="containerbox">
			<img src='./_core/_image/logo_alpha.png' width='40' style="margin-right: 10px;" > <b style='font-size:36px; padding-bottom: 10px;'>Module Skeleton</b><br />
			You are now looking at the _skeleton site module!<br /><br />
			<b>Version</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["version"] ?? ''); ?><br />
			<b>Build</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["build"] ?? ''); ?><br />
			<b>Rname</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["rname"] ?? ''); ?><br />
			<b>Name</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["name"] ?? ''); ?><br />
			<b>Short Description</b>: <?php echo @$object["hive_mode"]["short"]; ?><br />
			<b>License</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["license"] ?? ''); ?><br />
	</div>	
		
	<div class="containerbox">
		<b style='font-size: 16px; padding-bottom: 10px;'>Introduction to this Module</b><br />
		 This is just a skeleton for developers to quick deploy new modules and see a structure on the default modules directory. If you want to develope modules using the fast-php-page cms, this is a module skeleton you can start with! It contains all cms related folders and eplanations to make it easier for you to deploy and create modules. 
	</div>	

	<div class="containerbox">
			<b style='font-size: 16px; padding-bottom: 10px;'>Developer Tools</b><br />
			You can enter the developer area below! With the button below you will find access to the developers backend interface, which can also be used in combination with the frontend and the general developer tools. This tools are there to give you a better understanding on how this cms and site modules of the cms are working! It is advised to denie access to this file ./developer.php in productive environments! This file is only to make your development easier and to let you faster switch between available configurated elements.
			<br><br>
			<?php echo "<a href='"._HIVE_URL_REL_."/developer.php' rel='noopener' target='_blank' class='containerbox-btn'>Developer Tools</a><br><br>"; ?>
	</div>		
	
	<div class="containerbox">
			<b style='font-size: 16px; padding-bottom: 10px;'>Switch to Administration</b><br />
			To get full insight to all functionalities and administration pages click on the link below. It will guide you to a page where you can activate the administration backend to be seen with your current session!
			<br><br>
			<?php echo "<a href='"._HIVE_URL_REL_."/_core/_action/admin_switch.php' rel='noopener' class='containerbox-btn'>Administrator</a><br><br>"; ?>
	</div>		
	
	<div class="containerbox">
			<b style='font-size: 16px; padding-bottom: 10px;'>How to find Information</b><br />
			You can find documentation and help about this project on my Github Documentation Page Hub (link below). Besides that a documentation is included as site module in the store or module section of the administrator interface!
			<br><br>
			<?php echo "<a href='https://bugfishtm.github.io/fast-php-page' rel='noopener' target='_blank' class='containerbox-btn'>Documentations</a> "; ?>
			<?php echo "<a href='https://bugfishtm.github.io/bugfish-framework' rel='noopener' target='_blank' class='containerbox-btn'>Framework</a><br><br>"; ?>
	</div>	
	
	
	<div class="containerbox">
		<p>I wish you the best!<br />Sincerely, Bugfish</p>
	</div>	
	
	<?php // Simple Theme Footer
	hive__simple_end($object, _HIVE_CREATOR_);