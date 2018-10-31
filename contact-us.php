<!DOCTYPE html>
<html lang="en">
<head>
<?php include('include/header.php'); ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div id="wrapper">

			<?php include('include/navigation2.php'); ?>

		<section id="content" style="padding-top:0">
			<div class="container animated fadeIn"></div>
			 <div id="map"></div>
			<div class="container animated fadeIn">
				<div class="row">

							<div class="col-sm-6 col-lg-6">
								<h3>Contact Us</h3>
									<address>

										<strong>Address: &nbsp;<br></strong>
										CONSOLIDATED ELECTRIC POWER ASIA LTD. <br>
										Hong Kong Address - <br>
										Suite 4823, 48th Floor,<br>
										Sun Hung Kai Centre, 30 Harbour Road,<br>
										Hong Kong<br>
										<br>
										Registered Address – <br>
										Hazelwood Gregory Lane,<br>
										Durley, Southampton,<br>
										United Kingdom, SO32 2BS<br>

									</address>
								<p><strong>Telephone: </strong>(852) 2861 0719</p>

								<p><strong>Fax: </strong>(852) 2527 9877</p>

								<p><strong>General Email Address - CEPA: </strong>cepa188@biznetvigator.com</p>
							</div>

							<div class="col-sm-6 col-lg-6">
								<h3>&nbsp;</h3>
										 <address><strong><em>Get in touch with us..</em></strong></address>
										 <form id="contact-form" method="post" action="contactform/contact.php" role="form">

										                         <div class="messages"></div>

										                         <div class="controls">

										                                     <div class="form-group">
										                                         <label for="form_name">Full Name</label>
										                                         <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname" required="required" data-error="Firstname is required.">
										                                         <div class="help-block with-errors"></div>
										                                     </div>


										                                     <div class="form-group">
										                                         <label for="form_email">Email</label>
										                                         <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
										                                         <div class="help-block with-errors"></div>
										                                     </div>

										                                     <div class="form-group">
										                                         <label for="form_message">Message</label>
										                                         <textarea id="form_message" name="message" class="form-control" placeholder="Your message" rows="2" required="required" data-error="Please,leave us a message."></textarea>
										                                         <div class="help-block with-errors"></div>
										                                     </div>

																												 <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Ldit1kUAAAAAD6N60Y_jy3y7lJFk1nRVU6SSB_r" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>

                                        <div class="help-block with-errors"></div>
																				<input type="submit" class="btn btn-success btn-send" value="Send message">
                        </div>


										                             </div>
										                         </div>



										                     </form>





        </div>


				</div>
			</div>
		</section>
			</div>

</body>
<?php include('include/footer.php'); ?>



<!-- script for maps -->
<script>
function initMap() {
var ctc = {lat: 22.2803769, lng: 114.1766356};
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 18,
center: ctc
});
var marker = new google.maps.Marker({
position: ctc,
map: map
});
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhpgfCQkKeJh3r-Ho-CWIk1aG9vrCiILU&callback=initMap">
</script>


<style>
#map {
height: 400px;
width: 100%;
}
</style>
<!-- script for maps -->
</html>
