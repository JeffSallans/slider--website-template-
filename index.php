<?php

/*
Created by jsallans
6-27-2012
PURPOSE: website main page
*/

	include('init.php');

?>
<head>

	<script>

		//jQuery script to run on DOM load
		$(function() {

<?php
			//set default slide position
			if (isset($_GET['slide_page'])) {
				
				echo "TabbedContent.slideContent($('#". $_GET['slide_page'] ."'));
						var background = $('#". $_GET['slide_page'] ."').parent().find(\".moving_bg\");
						$(background).stop().animate({
							left: $('#". $_GET['slide_page'] ."').position()['left']
						}, {
							duration: 300
						});";
			}
?>

			$( ".button").button();

		});

		//Load Pages via AJAX
		function ajax_load( url, obj) {

			$.ajax({
				type: "POST",
				url: url,
				success: function(text) {

					$(obj).parent().html(text);
				}
			});

		}

	</script>

	<link href='css/tabbedContent.css' rel='stylesheet' type='text/css' />
    <script src="js/tabbedContent.js" type="text/javascript"></script>

    <title>
    	The Rickel Law Firm
    </title>
</head>

<div class='container'>

<div class='header'>

	<div class='image'>
		<img src="images/sailboat.jpg">
	</div>

	<div class='title'>
		<h1>
			Title
		</h1>
		<h6>
			Subtitle
		</h6>
		<h4>
			Subtitle
		</h4>
	</div>

</div>

<div class='tabbed_content'>

	<!--menu-->
    <div class='tabs'>
        <div class='moving_bg'>
            &nbsp;
        </div>
        <!-- tabs -->
        <span id='home' class='tab_item'>
            Home
        </span>
        <!-- keep ids unique -->
        <span id='feedback' class='tab_item'>
        	Feedback
        </span>
        <span id='officers' class='tab_item'>
        	Contact Us
        </span>
    </div>
    <br />
    <!--<hr style='width: 960px' />-->

	<!--page contents--> 
    <div class='slide_content'>
        <div class='tabslider'>
 
 			<!-- create a ul for each tab the c
            <ul class='home'>
   	            <!-- content files are included in a ul -->
<?php
					//Change this
					include('content/home.php');
?>			    
			</ul>
			<ul class='feedback'>
<?php
					include('content/feedback.php');
?>	
			</ul>
			<ul class='contact'>
<?php
					include('content/contact.php');
?>	
			</ul>
 
        </div>
    </div>
</div>

<!-- sample things
	<div class='shell'>
		<h3>shell</h3>
		<p>content will go here. in nice format.</p>
	</div>
	<button class='button'>A button element</button>
-->
	<br />
<?php
	include('bottom.php');
?>