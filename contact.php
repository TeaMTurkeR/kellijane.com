<?php
/*
Template Name: Contact
*/
?>

<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['contactName']) === '') {
		$nameError = '<span class="error">Please enter your name.</span>';
		$hasError = true;
	} else {
		$name = trim($_POST['contactName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = '<span class="error">Please enter your email address.</span>';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = '<span class="error">You entered an invalid email address.</span>';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = '<span class="error">Please enter a message.</span>';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$subject = '[PHP Snippets] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>

<?php
	if(isset($_POST['joined'])) {

		if(trim($_POST['email']) === '')  {
			$emailError = 'Please enter your email address.';
			$hasError = true;
		} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}

		if(!isset($hasError)) {
			$emailTo = get_option('tz_email');
			if (!isset($emailTo) || ($emailTo == '') ){
				$emailTo = get_option('admin_email');
			}
			$subject = '[PHP Snippets] From '.$name;
			$body = "Name: $name \n\nEmail: $email";
			$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

			wp_mail($emailTo, $subject, $body, $headers);
			$emailSent = true;
		}

	} 
?>

<?php get_header(); ?>

<nav id="nav">
    <div class="wrap">
        <ul>
            <li><a href="<?php echo home_url(); ?>">Home</a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'specials' ) ) ?>">Specials</a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'gallery' ) ) ?>">Gallery</a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'services' ) ) ?>">Services</a></li>
            <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">Contact</a></li>
        </ul>
        <ul>
            <li><a href="http://www.pinterest.com/kellijanephila/">Pinterest</a></li>
    		<li><a href="https://www.facebook.com/KellijaneHome">Facebook</a></li>
    		<li><a href="https://twitter.com/kellijanephila">Twitter</a></li>
        </ul>
    </div>
</nav>

<header class="small-splash-contact">

	<div class="outer">	
	    <div class="wrap">
	        <div class="col-3">
	        	<h2><?php wp_title("",true); ?></h2>
			</div>
	    </div>
	</div>

	<img src="http://maps.googleapis.com/maps/api/staticmap?center=39.9462,-75.170431&zoom=14&scale=2&size=20040x200&sensor=false&markers=color:green%7Clabel:KJ%7C39.9462,-75.170431">
</header>

	<section id="contact" class="wrap content-section">
		<div class="col-6 address">
			<p class="lead">Location and Hours</p>

			<p>1721 Spruce Street<br>
			Philadelphia, PA 19103<br>
			<small><a href="https://maps.google.com/maps?q=kellijane&hl=en&hq=kellijane&t=m&z=15">View on Google Maps</a></small></p>

			<p>Tue - Sat: 11 - 6<br>
			Mon: by appointment</p>

			<p>P: 215.790.0233<br>
			F: 215.790.0234<br>
			E: <a href="mailto:info@kellijane.com">info@kellijane.com</a></p>

		</div>
		<div class="col-6">

			<p class="lead">See Inside!</p>

			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?q=kellijane&amp;layer=c&amp;sll=39.947762,-75.170438&amp;cid=393645614202824435&amp;panoid=rJbKvCNm0jRf8YBld_Epiw&amp;cbp=13,278.05,,0,0&amp;ie=UTF8&amp;hq=kellijane&amp;hnear=&amp;ll=39.947762,-75.170438&amp;spn=0.006295,0.006295&amp;t=h&amp;cbll=39.947743,-75.170452&amp;source=embed&amp;output=svembed"></iframe><br /><small><a href="https://www.google.com/maps?q=kellijane&amp;layer=c&amp;sll=39.947762,-75.170438&amp;cid=393645614202824435&amp;panoid=rJbKvCNm0jRf8YBld_Epiw&amp;cbp=13,278.05,,0,0&amp;ie=UTF8&amp;hq=kellijane&amp;hnear=&amp;ll=39.947762,-75.170438&amp;spn=0.006295,0.006295&amp;t=h&amp;cbll=39.947743,-75.170452&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>

		</div>
	</section>
	<section class="wrap content-section">
		<hr>
		<div class="col-6">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="mailingListForm" method="post">
				<p class="lead">Get advanced notice of what's going on at Kellijane!</p>
			
				<label for="contactName">Name</label>
				<input type="text" name="contactName" id="contactName" value="" />

				<label for="email">Email</label>
				<input type="text" name="email" id="email" value="" />

				<button type="submit" class="button block">Join</button>
				<input type="hidden" name="joined" id="joined" value="true" />

			</form>
			<p style="margin:10px 0 0 0;color:#999;font-size:14px;font-style:italic;">Kellijane will never sell your email address to a third party.</p>
		</div>
		<div id="mailinglist" class="col-6">
			<?php if ($emailSent) : ?>
			<p class="lead" style="color:green">Message Sent!</p>
			<?php else : ?>
			<p class="lead">Send us a message!</p>
			<?php endif; ?>

			<?php echo $nameError; ?>
			<?php echo $emailError; ?>
			<?php echo $commentError; ?>

			<form action="<?php the_permalink(); ?>" id="contactForm" method="post">

				<label for="contactName">Name</label>
				<input type="text" name="contactName" id="contactName" value="" />
				
				<label for="email">Email</label>
				<input type="text" name="email" id="email" value="" />

				<label for="commentsText">Message</label>
				<textarea name="comments" id="commentsText" rows="5" cols="30"></textarea>

				<button type="submit" class="button block">Send Message</button>
				<input type="hidden" name="submitted" id="submitted" value="true" />
			</form>
		</div>
	</section>

<?php get_footer(); ?>