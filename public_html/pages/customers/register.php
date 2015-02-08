<!-- Head section -->

<head>

<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   require_once($inc_dir . 'recaptchalib.php');
   
   include $inc_dir . 'signature.php';
   include $inc_dir . 'head.html';
   include $inc_dir . 'default_seo.html';
?>



<script type="text/javascript" src="/scripts/validation.js"></script>
<script type="text/javascript">

function validate() {

   $('data_error').innerHTML = "";
   
   // Validate that all fields have been populated:
   if (!$('name').present()) {
      $('data_error').innerHTML = 'Please enter a valid name';
      return false;
   }
   
   // Validate that email is a valid email address:
   if (!validate_email($('email').value)) {
      $('data_error').innerHTML = 'Please enter a valid e-mail address';
      return false;
   }
   
   // Confirm that the email matches the confirm email:
   if ($('email').value != $('confirmemail').value) {
      $('data_error').innerHTML = 'E-mail and confirmation e-mail address do not match';
      return false;
   }
   
   return true;
}

</script>

<body class="form">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1>register</h1>




<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
<form action="//dot-art.us9.list-manage.com/subscribe/post?u=9f768ea7878c3f7270d1e20ab&amp;id=f7e67fe2f5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group input-group">
    <strong>Send me information about... </strong>
    <ul><li><input type="checkbox" value="1" name="group[13757][1]" id="mce-group[13757]-13757-0"><label for="mce-group[13757]-13757-0">dot-art General News &amp; Invitations</label></li>
<li><input type="checkbox" value="2" name="group[13757][2]" id="mce-group[13757]-13757-1"><label for="mce-group[13757]-13757-1">dot-art Art Classes</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_9f768ea7878c3f7270d1e20ab_f7e67fe2f5" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

<script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>
 

<!-- 
 
 <p>please enter your details below in order to receive regular updates on dot-art
events, exhibitions, new artists and much more.</p>
 
<form id="register_info" name="register_info" onreset="$('data_error').innerHTML = '';" onsubmit="return validate()" method="post" action="submission.php">
<table class=form>
  <tr>
    <th>name:</th>
    <td><input type="text" id="name" name="name" size="25" maxlength="25" /></td>
  </tr>
  <tr>
    <th>email:</th>
    <td><input type="text" id="email" name="email" size="50" maxlength="75" value="<?php echo $_GET['email']; ?>" /></td>
  </tr>
  <tr>
    <th>confirm email:</th>
    <td><input type="text" id="confirmemail" name="confirmemail" size="50" maxlength="75" /></td>
  </tr>
  <tr>
     <td></td>
     <td>
     <?php
        $publickey = "6LdBMMUSAAAAAC0i-x9iXIHX2gXBCReylcYs7-wM";
        echo recaptcha_get_html($publickey);
     ?>
     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" />
        <input type="reset" value="reset" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div id="data_error"></div></td>

  </tr>
</table>
</form>

-->

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
