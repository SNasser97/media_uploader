/****************************************************/

	- Syed Nasser Ahmed 
	SETUP MediaOrganiser with XAMPP

	In order to use the media organiser you must have XAMPP installed
	Have XAMPP control panel open and enable Apache and MySQL
	
	MAKE SURE NO PORTS ARE ALREADY IN USE BY OTHER PROGRAMS AS THIS WILL REQUIRE CHANGING PORTS IN THE CONFIG FILES AND MAY NOT WORK AS PROVIDED.


	CREATE THE DATABASE "media" (WITHOUT QUOTES) THEN IMPORT THE media.sql file  FOR THAT DATABASE into phpmyadmin
	- this file contains the table for storing our data or you can read below on the steps in creating the database yourself.
	
	IF DATABASE ERROR OCCURS (Ignore if media organiser status is displayed as connected)

	If the message "database not found", the database may need to be created if not already.
	In the browser URL enter: localhost/phpmyadmin
	
	1) Create database called 'media'
	2) Create table 'playlist' 4 rows (id, name, comment, filetype and url)
	(id -> INT, PRIMARY KEY, AUTO_INCREMENT)
	(name -> varchar, 100)
	(comment -> text, 100)
	(filetype -> text, 100)
	(url -> varchar, 150)
	
	3) Enable AUTO increment on ID, click ok for any prompts that appear
	4) Datatypes INT for ID and the rest are VARCHAR
	NOTE: For datatypes with VARCHAR apart from url - set to 30 and url to 100 characters
	
	Place the folder "media_organiser-06-03-19" into the folder htdocs "C:\xampp\htdocs\"


/***************************************************/
	
