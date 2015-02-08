<?php
  // Don't bother with any visitors on this page if there is no form data to process:
  if (empty($_POST['name']) || empty($_POST['email'])) {
      header('Location: http://www.dot-art.co.uk/pages/customers/register.php');
  }
  
  $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
  include $inc_dir . 'signature.php';
  
  require_once($inc_dir . 'recaptchalib.php');
  $privatekey = "6LdBMMUSAAAAAD31pO-ur-umz8zs54-rSZ_E_i_V";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    
  }
?>

<!-- Head section -->

<head>

<?php
   include $inc_dir . 'head.html';
   include $inc_dir . 'default_seo.html';
?>

</head>

<body class="light">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h2>thank you for registering</h2>

<p>You will now receive regular emails from dot-art with news and details of events.</p>
<p>You can unsubscribe at any time by sending us an email with the word
unsubscribe in the subject.</p>

<p><a href="/index.php" title="return to home page">return to home page</a></p>

<?php

  /* Connecting to the server and  select the database: */
  include $inc_dir . 'database_connect.php';

  /* Create an INSERT statement to add details to the database: */
  $query = sprintf("INSERT INTO registration (NAME, EMAIL) VALUES ('%s', '%s')",
     mysql_real_escape_string($_POST['name']),
     mysql_real_escape_string($_POST['email']));
  $result = mysql_query($query)
     or die("Error add registration details to database: " . mysql_error());

  /* Close database connection: */
  mysql_close($link);
  
  /* Send an email to Lucy: */
  mail("lucy.byrne@dot-art.co.uk", "dot-art registration", "a new user has registered on the dot-art website.  their details are stored in the database.");
?>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
