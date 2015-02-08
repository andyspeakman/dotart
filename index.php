<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   include $inc_dir . 'signature.php';
?>

<!-- Head section -->

<head>

<?php
   include $inc_dir . 'head.html';
   include $inc_dir . 'default_seo.html';
   
   echo '<!-- PHP Version: ' . phpversion() . '-->';
?>

<script type="text/javascript" src="/scripts/slideshow_1.5.5.js"></script>
<script type="text/javascript" src="/scripts/validation.js"></script>
<link type="text/css" rel="stylesheet" href="/styles/slideshow.css" />

<script type="text/javascript">
<!-- hide script from old browsers

//detect browser:
browserName = navigator.appName;
browserVer = parseInt(navigator.appVersion);
if (browserName == "Netscape" && browserVer >= 3)
   browserVer = "1";
else if (browserName == "Microsoft Internet Explorer" && browserVer == 4)
   browserVer = "1";
else
   browserVer = "2";

//preload images:
if (browserVer == 1) {
	buy_art = new Image(128,128);
	buy_art.src = "/images/buy_art.jpg";
	buy_art_2 = new Image(128,128);
	buy_art_2.src = "/images/buy_art_2.jpg";
	
	sell_art = new Image(128,128);
	sell_art.src = "/images/sell_art.jpg";
	sell_art_2 = new Image(128,128);
	sell_art_2.src = "/images/sell_art_2.jpg";
	
	corporate_art = new Image(128,128);
	corporate_art.src = "/images/corporate_art.jpg";
	corporate_art_2 = new Image(128,128);
	corporate_art_2.src = "/images/corporate_art_2.jpg";
	
	contact = new Image(128,128);
	contact.src = "/images/contact.jpg";
   contact_2 = new Image(128,128);
	contact_2.src = "/images/contact_2.jpg";
}

//image swapping function:
function hiLite(imgDocID, imgObjName, comment) {
   if (browserVer == 1) {
      document.images[imgDocID].src = eval(imgObjName + ".src");
      window.status = comment; return true;
   }
}
//end hiding -->
</script> 

<script type="text/javascript">
	function validate() {
      if (validate_email($('email').value)) {
         return true;
      } else {
         $('email_error').innerHTML = "Please enter a valid e-mail address";
         return false;
      }
   }
</script>

<meta property="fb:admins" content="712515886" />

</head>

<body class="light">

<div id="container">


<?php
  include $inc_dir . 'menunav.html';
?>


<div id="content">


<table class="artist" width="100%" style="padding-bottom: 25px">

<tr align="center">

<td><a href="/pages/customers/buy-art.php" onMouseOver="hiLite('buy','buy_art_2','buy art')" onMouseOut="hiLite('buy','buy_art','buy art')"><img name="buy" src="/images/buy_art.jpg" width="128" height="128" title="buy art" alt="buy art" /></a></td>
<td><a href="http://services.dot-art.com/index.php" onMouseOver="hiLite('sell','sell_art_2','sell art')" onMouseOut="hiLite('sell','sell_art','sell art')"><img name="sell" src="/images/sell_art.jpg" width="128" height="128" title="sell art" alt="sell art" /></a></td>
<td><a href="/pages/customers/corporate-art.php" onMouseOver="hiLite('corporate','corporate_art_2','corporate art')" onMouseOut="hiLite('corporate','corporate_art','corporate art')"><img name="corporate" src="/images/corporate_art.jpg" width="128" height="128" title="corporate art" alt="corporate art" /></a></td>
<td><a href="/pages/contact.php" onMouseOver="hiLite('contact','contact_2','contact us')" onMouseOut="hiLite('contact','contact','contact us')"><img name="contact" src="/images/contact.jpg" width="128" height="128" title="contact us" alt="contact us" /></a></td>

</tr>
</table>


<table cellspacing="10" cellpadding="5%" class="artist" width="100%" align="center">

<tr bgcolor="#E9F6FD" align="left" valign="top">

<td><h3>
<a class="menu" href="/artist/blacksoup">featured artist... blacksoup</a></h3>


<div id="slideshow-container" class="speed:5 fade">

<?php

include $inc_dir . 'database_connect.php';

$query = "SELECT title, image FROM art WHERE artist = 240 LIMIT 11";
$result = mysql_query($query)
	or die("Database error: " . mysql_error());

while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
   printf("<img width=\"475px\" src=\"/artists work/blacksoup/%s_en.jpg\" alt=\"%s\" />", $row["image"], $row["title"]);
}
?>

</div>
</td>

<td>
<h3 class="sidebar-title">
<a class="menu" href="http://twitter.com/dotart" id="twitter-link">dotart twitter feed</a></h3>
<ul id="twitter_update_list"></ul>

</td>
</tr>
</table>


<table cellspacing="10" cellpadding="5%" class="artist" width="100%" align="center">

<tr bgcolor="#E9F6FD" align="left">

<td align="center" width="150px">
<h3><a class="menu" href="/pages/gallery.php"> what's on</a></h3></td>

<td align="center" width="150px">
<h3><a class="menu" href="/pages/customers/register.php">sign up</a></h3></td>

<td align="center" width="150px">
<h3><a class="menu" href="/pages/news.php"> blog</a></h3></td>

<td align="center" width="150px">
<h3><a class="menu" href="/pages/testamonials.php">why us?</a></h3></td>

</tr>


<tr bgcolor="#E9F6FD" align="center" height="auto">

<td align="center" width="150px">
<img src="/artists work/andrew kinmont/summer-blues-tn.jpg" title="Sublime Light, Paintings by Andrew Kinmont" alt="Sublime Light, Paintings by Andrew Kinmont"/>

<p>28th November 2011 - 13th January 2012, dot-art Showroom <strong>Sublime Light, Paintings by Andrew Kinmont.</strong></p>

<p><strong>Christmas by Liverpool</strong>, Manestys Lane, Liverpool One, 11th November - 8th January.</p>

<p><a href="/pages/gallery.php">more...</a></p></td>

<td align="center" width="150px">
<form id="register_email" name="register_email" onsubmit="return validate()" method="get" action="/pages/customers/register.php">
<input name="email" id="email" type="text" size="20" />
<div class="error" id="email_error"></div>
<input type="submit" value="submit" /><br /><br />
</form>
<p style="margin-top: 1px">Enter your email address to receive our newsletter.</p>


<p style="margin-top: 1px">Read the most recent <a href="http://dot-art.cmail2.com/t/ViewEmail/y/279AB2B43C92DBE5">
dot-art Newsletter</a> online.</p>

<a class="menu" href="http://twitter.com/dotart "><img src="/images/twitter.png" title="Follow dot-art on Twitter" alt="Twitter logo" /></a>

<a class="menu" href="http://www.facebook.com/home.php#/profile.php?id=712515886&ref=profile"><img src="/images/facebook.png" title="Find dot-art on Facebook" alt="Facebook logo" /></a>
</td>


<td style="padding-top: 20px" align="center" width="150px">



<img src="/images/dotart-popup-winter-tn.jpg" title="The dot-art Pop Up Art Shop" alt="The dot-art Pop Up Art Shop"/>

<p><strong>Winter Pop Up Art Shop</strong> at The Metquarter, Liverpool, 8-18th December 2011.</p>

<p><strong>Christmas Closing</strong> dot-art will be closed from 23rd Dec-3rd Jan inclusive...</p>

<p><a href="/pages/news.php">more...</a></p></td>

<td align="center" width="150px">
<p><b>"Thank you for your excellent service throughout my 
journey with you in purchasing my commissioned piece of art."</b> Private Client</p>
<p><a href="/pages/testamonials.php">More testamonials...</a>

<p style="margin-top: 1px">Any questions?</p>
<p>Call <b>0845 0176660</b><br /></p> 
<p>or email<br>
<a href="mailto:enquiries@dot-art.co.uk">
enquiries@dot-art.co.uk</a></p></td>
</tr>
</table>


<p>If you prefer to view art in the flesh, please visit our
<a href="/pages/gallery.php" title="go to go to see art page">
Liverpool gallery.</a></p>

<p>If you find a piece you are interested in seeing or finding out more about, send us an
<a href="mailto:enquiries@dot-art.co.uk" title="email dot-art">email,</a>
and we will arrange for you to view it at our 
<a href="/pages/gallery.php" title="go to go to see art page">
Liverpool gallery.</a>.</p>

<p>If you are a business customer, looking to buy art, rent art or commission 
<a href="pages/customers/corporate-art.php" title="corporate art">art for offices</a>, we can guide you through the entire process. 
Please visit our <a href="pages/customers/corporate-art.php" title="corporate art"> 
corporate art</a> pages for more information.</p>

<p>If you cant see what you are looking for, or you would like a different version of a
work, then you can <a href="mailto:enquiries@dot-art.co.uk" title="email dot-art">commission art,</a> all of our artists can
produce an artwork to your exact specification.</p>

<p>If you are looking for an unusual gift, why not give a dot-art <a href="mailto:enquiries@dot-art.co.uk" 
title="email dot-art">art token</a>? Perfect for weddings,
anniversaries or other special occasions, this is a unique and imaginative way to give original art
while still allowing the recipient to choose for themselves from thousands of works. You can
choose to give any amount from &pound;20.</p>

<p>All work is unframed unless otherwise stated.</p>

</div>

</div>

<?php
   include $inc_dir . 'analytics.html';
?>

<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/dotart.json?callback=twitterCallback2&amp;count=5"></script>

</body>

</html>
