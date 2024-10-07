<style>
    @font-face /*perintah untuk memanggil font eksternal*/
        {
            font-family: 'Neoland'; /*memberikan nama bebas untuk font*/
            src: url('../assets/fonts/neoland_serif/Neoland Serif.ttf');/*memanggil file font eksternalnya di folder nexa*/
        }
/*CSS SOSMED */        
.ig:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.fb:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.twit:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
.yt:hover {
transform: scale(1.50);
-webkit-transition: 0.4s ease;
}
/*CSS SOSMED */

/*CSS PARTNERSHIP */        
.part1:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
.part2:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
.part3:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
.part4:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
.part5:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
.part6:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
.part7:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
.part8:hover {
transform: scale(1.05);
-webkit-transition: 0.4s ease;
}
/*CSS PARTNERSHIP */
</style>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$footer_about = $row['footer_about'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$contact_address = $row['contact_address'];
	$footer_copyright = $row['footer_copyright'];
	$total_recent_post_footer = $row['total_recent_post_footer'];
    $total_popular_post_footer = $row['total_popular_post_footer'];
    $newsletter_on_off = $row['newsletter_on_off'];
    $before_body = $row['before_body'];
}
?>


<?php /* if($newsletter_on_off == 1): */?>
<!--<section class="home-newsletter" style="background-color: black;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="single">
					<?php
			if(isset($_POST['form_subscribe']))
			{

				if(empty($_POST['email_subscribe'])) 
			    {
			        $valid = 0;
			        $error_message1 .= LANG_VALUE_131;
			    }
			    else
			    {
			    	if (filter_var($_POST['email_subscribe'], FILTER_VALIDATE_EMAIL) === false)
				    {
				        $valid = 0;
				        $error_message1 .= LANG_VALUE_134;
				    }
				    else
				    {
				    	$statement = $pdo->prepare("SELECT * FROM tbl_subscriber WHERE subs_email=?");
				    	$statement->execute(array($_POST['email_subscribe']));
				    	$total = $statement->rowCount();							
				    	if($total)
				    	{
				    		$valid = 0;
				        	$error_message1 .= LANG_VALUE_147;
				    	}
				    	else
				    	{
				    		// Sending email to the requested subscriber for email confirmation
				    		// Getting activation key to send via email. also it will be saved to database until user click on the activation link.
				    		$key = md5(uniqid(rand(), true));

				    		// Getting current date
				    		$current_date = date('Y-m-d');

				    		// Getting current date and time
				    		$current_date_time = date('Y-m-d H:i:s');

				    		// Inserting data into the database
				    		$statement = $pdo->prepare("INSERT INTO tbl_subscriber (subs_email,subs_date,subs_date_time,subs_hash,subs_active) VALUES (?,?,?,?,?)");
				    		$statement->execute(array($_POST['email_subscribe'],$current_date,$current_date_time,$key,0));

				    		// Sending Confirmation Email
				    		$to = $_POST['email_subscribe'];
							$subject = 'Subscriber Email Confirmation';
							
							// Getting the url of the verification link
							$verification_url = BASE_URL.'verify.php?email='.$to.'&key='.$key;

							$message = '
Thanks for your interest to subscribe our newsletter!<br><br>
Please click this link to confirm your subscription:
					'.$verification_url.'<br><br>
This link will be active only for 24 hours.
					';

							$headers = 'From: ' . $contact_email . "\r\n" .
								   'Reply-To: ' . $contact_email . "\r\n" .
								   'X-Mailer: PHP/' . phpversion() . "\r\n" . 
								   "MIME-Version: 1.0\r\n" . 
								   "Content-Type: text/html; charset=ISO-8859-1\r\n";

							// Sending the email
							mail($to, $subject, $message, $headers);

							$success_message1 = LANG_VALUE_136;
				    	}
				    }
			    }
			}
			if($error_message1 != '') {
				echo "<script>alert('".$error_message1."')</script>";
			}
			if($success_message1 != '') {
				echo "<script>alert('".$success_message1."')</script>";
			}
			?>
				<form action="" method="post">
					<?php $csrf->echoInputField(); ?>
					<h2><?php echo LANG_VALUE_93; ?></h2>
					<div class="input-group">
			        	<input type="email" class="form-control" placeholder="<?php echo LANG_VALUE_95; ?>" name="email_subscribe">
			         	<span class="input-group-btn">
			         	<button class="btn btn-theme" type="submit" name="form_subscribe"><?php echo LANG_VALUE_92; ?></button>
			         	</span>
			        </div>
				</div>
				</form>
			</div>
		</div>
	</div>
</section>-->
<?php /* endif; */?>
<footer class="site-footer">
       	<div class="site-footer-top" style="background: url(../sja/pxfuel3.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
       		<div class="container">
                <div class="row">
                	<div class="col-md-3 col-sm-6 footer_widget widget widget_newsletter">
                    	<h4 class="widgettitle" style="color: white; -webkit-text-stroke:1.5px maroon;
                		text-shadow: -1px -1px -1px white, -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white; font-family:Neoland;">Stay Connected :</h4>
                        <left style = "color: black; font-family:Poster Gothic ATF;">
                        <a href='https://www.instagram.com/explore/locations/236833679777322/senang-jaya-abadi-cirebon/'><img src="img_footer/ig.png" style="width: 10%;" class="ig" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"></a>
                        <a href='https://www.facebook.com/SenangJayaAbadi'><img src="img_footer/fb.png" style="width: 10%;" class="fb" data-aos="fade-right" data-aos-delay="40" data-aos-duration="950"></a>
                        <a href='https://twitter.com/'><img src="img_footer/twitter.png" style="width: 10%;" class="twit" data-aos="fade-right" data-aos-delay="30" data-aos-duration="900"></a>
                        <a href='https://www.youtube.com/'><img src="img_footer/yt.png" style="width: 10%;" class="yt" data-aos="fade-right" data-aos-delay="20" data-aos-duration="850"></a>
                        <br><br>
                        <a style="color:white; font-size:12px;">Jl. Raya Pantura, Rawaurip, Kec. Pangenan, Kabupaten Cirebon, Jawa Barat</a>
                        </left>
                    </div>
                	<div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                    	<h4 class="widgettitle" style="color: white; -webkit-text-stroke:1.5px maroon;
                		text-shadow: -1px -1px -1px white, -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white; font-family:Neoland;">Product</h4>
                        <ul>
                            <li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=24&type=mid-category" style="color: white; font-family:Neoland; font-size:10px;">Special Vehicles</a></li>
                        	<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=18&type=mid-category" style="color: white; font-family:Neoland; font-size:10px;">Arm Roll</a></li>
                        	<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=23&type=mid-category" style="color: white; font-family:Neoland; font-size:10px;">Compactor</a></li>
                        	<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=19&type=mid-category" style="color: white; font-family:Neoland; font-size:10px;">Dump Truk</a></li>
                            <li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=20&type=mid-category" style="color: white; font-family:Neoland; font-size:10px;">SkyLift</a></li>
                            <li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=87&type=end-category" style="color: white; font-family:Neoland; font-size:10px;">Self Loader</a></li>
                        	<li><a href="https://karoserisenangjaya.com/sja/product-category.php?id=21&type=mid-category" style="color: white; font-family:Neoland; font-size:10px;">Tangki</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer_widget widget widget_newsletter">
                    	<h4 class="widgettitle" style="color: white; -webkit-text-stroke:1.5px maroon;
                		text-shadow: -1px -1px -1px white, -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white; font-family:Neoland;">Partnership</h4>
                        <ul>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part1" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">PT. Hino Motors Manufacturing Indonesia</li>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part2" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">PT. Armindo</li>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part3" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">Auto 2000</li>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part4" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">PT. Cemaco</li>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part5" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">PT. Daya guna Motor Indonesia</li>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part6" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">Indomobil</li>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part7" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">Nasmoco</li>
                        	<li style="color:white; font-family:Neoland; font-size:10px;" class="part8" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">PT. Teja Berlian</li>
                        </ul>
                    </div>
                	<div class="col-md-4 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                    	<h4 class="widgettitle" style="color: white; -webkit-text-stroke:1.5px maroon;
                		text-shadow: -1px -1px -1px white, -1px -1px -1px white, -1px -1px 0 white, -1px -1px 0 white; font-family:Neoland;">Help &amp; Support</h4>
                        <ul>
                        	<a href='https://e-katalog.lkpp.go.id/id/search-produk?authenticityToken=46ea77a9b4b2a270776b6ed764554b8878435fc7&q=senang+jaya&order=relevance&limit=12&offset=1'><img src="../sja/lkpp.png" style="width: 60%;"></a>
                        	<br>
                        	<h5 style="color:white;">Go To : </h5><br>
                        	<a href='https://karoserisenangjaya.com/psa/' target="blank" style="color:white;"><u>Pemuda Sukses Abadi</u></a><br>
                        </ul>
                    </div>
                </div>
            </div>
     	</div>
</footer>



<div class="footer-bottom" style="background: url(bordesmaroon.jpg) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 copyright" style="color:white; font-family: Neoland;">
			<center><?php echo $footer_copyright; ?></center>
			</div>
		</div>
	</div>
</div>


<a href="#" class="scrollup">
	<i class="fa fa-angle-up"></i>
</a>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $stripe_public_key = $row['stripe_public_key'];
    $stripe_secret_key = $row['stripe_secret_key'];
}
?>

<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="assets/js/megamenu.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/owl.animate.js"></script>
<script src="assets/js/jquery.bxslider.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/rating.js"></script>
<script src="assets/js/jquery.touchSwipe.min.js"></script>
<script src="assets/js/bootstrap-touch-slider.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
	function confirmDelete()
	{
	    return confirm("Sure you want to delete this data?");
	}
	$(document).ready(function () {
		advFieldsStatus = $('#advFieldsStatus').val();

		$('#paypal_form').hide();
		$('#stripe_form').hide();
		$('#bank_form').hide();

        $('#advFieldsStatus').on('change',function() {
            advFieldsStatus = $('#advFieldsStatus').val();
            if ( advFieldsStatus == '' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'PayPal' ) {
               	$('#paypal_form').show();
				$('#stripe_form').hide();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Stripe' ) {
               	$('#paypal_form').hide();
				$('#stripe_form').show();
				$('#bank_form').hide();
            } else if ( advFieldsStatus == 'Bank Deposit' ) {
            	$('#paypal_form').hide();
				$('#stripe_form').hide();
				$('#bank_form').show();
            }
        });
	});


	$(document).on('submit', '#stripe_form', function () {
        // createToken returns immediately - the supplied callback submits the form if there are no errors
        $('#submit-button').prop("disabled", true);
        $("#msg-container").hide();
        Stripe.card.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
            // name: $('.card-holder-name').val()
        }, stripeResponseHandler);
        return false;
    });
    Stripe.setPublishableKey('<?php echo $stripe_public_key; ?>');
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('#submit-button').prop("disabled", false);
            $("#msg-container").html('<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' + response.error.message + '</div>');
            $("#msg-container").show();
        } else {
            var form$ = $("#stripe_form");
            var token = response['id'];
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            form$.get(0).submit();
        }
    }
</script>
<?php echo $before_body; ?>
</body>
</html>