<style type="text/css">

	.feedback div{

		width: 700px;

		/*this centers the boxes*/
		margin: 0px auto;
	}

</style>

<script type="text/javascript">

	jQuery(function() {

		jQuery(".feedback").submit(function() {

			jQuery.ajax({
				type: "POST",
				url: "ajax/send_email.php",
				data: jQuery(".feedback").serializeArray(),
				success: function(text) {

					if (text == "Thank you for contacting us.") {

						jQuery(".feedback").html(text);
					}
					else {
						alert(text);
					}
				}
			});
			return false;
		});
	});
</script>

<div class="feedback">

  <form class='feedback' method='post' >
  	<div class='shell'>
	<h3>Email Us</h3>
  	<p style='width: 350px;'>
	  Email: <input name='email' type='text' /><br />
	  Message:<br />
	  <textarea name='message' rows='15' cols='40'></textarea>
	  <br />
	  <input type='submit' />
	</p>
	</div>
  </form>

</div>