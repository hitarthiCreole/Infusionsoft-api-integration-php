# Infusionsoft-api-integration-php

1) To install the SDK via the command line, simply run:
     
     	composer require infusionsoft/php-sdk

2) You'll also want to include the following at the start of your PHP file:

		require_once 'vendor/autoload.php';

3) For the next step you have to generate api key with infusionsoft
        Follow the steps for that:
        
       -In the main menu of your InfusionSoft application, choose Admin -> Settings
	    -Click Application on the left menu and scroll down near the bottom of the page. There you will see the encrypted key
       -Consult the Infusionsoft User Guide for more information on setting up your Infusionsoft API Key

4) After key gernration you can put setup file as:
			conn.cfg.php 
	if you dont found that file then rename phpinfo.php file to conn.cfg.php and put code in that.

5) Connect your file and run as index.php file and see the output.
