Created by Jeff Sallans
Date 8-3-2012

This is a website template that uses jquery-ui and other jquery scripts
to provide a fun tab transition for each page of your website.
Original design was for a student organization website.

To add pages to the website:
	save page to ./content as a .php
	create a <span id='something' class='tab_item'> and <ul class='something'>
	for each tab in index.php
		note make sure 'something' is not duplicated with other ids
	include the .php file in the <ul> tag

To change to tab from url use 'slide_page' in url with id of tab
exp:	example.com?slide_page=home

An optional popup javascript function is provided.

	//Prints a popup in the lower right corner
	message_popup(title, content, time, link)
		exp:
			message_popup("test title", "test content", -1, "#");
			//the popup will only close when the close button is click
			//and there is no link to the popup contents

			message_popup("", "test", 1, "www.google.com");
			//the popup will close after 60 seconds
			//the popup contents are a clickable link to google.com

CSS class shell
	this will add a frame around the paragraph
	<div class='shell'>
			<h3>shell</h3>
			<p>content will go here. in nice format.</p>
	</div>
