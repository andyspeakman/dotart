<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   include $inc_dir . 'signature.php';
?>

<!-- Head section -->

<head>
<?php
   include $inc_dir . 'head.html';
   include $inc_dir . 'default_seo.html';
?>
<link rel="stylesheet" href="/styles/jquery.fancybox-1.3.4.css" type="text/css" />
<script type="text/javascript" src="/scripts/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.fancybox-1.3.4.pack.js"></script>
</head>

<body class="dark">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">buy art</h1>

<?php

/* Connecting to the server and  select the database: */
include $inc_dir . 'database_connect.php';

/* Select artist's information: */
$artId = $_GET["artId"];
$query = "SELECT t.image, t.title, a.id, a.name, t.width, t.height, t.media, t.image_width, t.image_height FROM art t, artist a WHERE t.artist = a.id AND t.id = " . $artId;
$result = mysql_query($query)
	or die("Database error: " . mysql_error());
$row = mysql_fetch_array($result, MYSQL_ASSOC);

$title = $row["title"];
$artistId = $row["id"];
$artistName = $row["name"];
$artistUrl = str_replace(' ', '-', $artistName);

printf("<a class=\"fancybox\" href=\"/artists-work/%s/%s_en.jpg\" title=\"%s\" rel=\"fancybox\">",
    $artistName, $row["image"], $row["title"]);
printf("<img src=\"/artists-work/%s/%s_tn.jpg\" alt=\"'%s' %s\" class=\"hlink\" />",
   $artistName, $row["image"], $row["title"], $artistName);
print("</a>");
printf("<p class=\"art_title\">%s</p>",
   $row["title"]);
printf("<p class=\"artist\">%s</p>",
   $artistName);
printf("<p class=\"artist\">%scm x %scm, %s</p>",
   $row["width"], $row["height"], $row["media"]);

/* Select different available versions of the art: */
$query = "SELECT item_number, description, price FROM art_pricing WHERE art = " . $artId;
$result = mysql_query($query)
	or die("Database error: " . mysql_error());

/* Print the results in a HTML table */
/* Open the outer table: */
echo "<table class=\"art_prices\" width=\"100%\">\n";
echo "<tr><th>item number</th><th>description</th><th colspan=\"2\">price</th></tr>\n";

while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	printf("<tr><td>%s</td><td>%s</td><td>&pound;%s</td>\n",
		$row["item_number"], $row["description"], $row["price"]);
   echo "<td><form name=\"_xclick\" target=\"paypal\" action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\">\n";
   echo "<input type=\"hidden\" name=\"cmd\" value=\"_cart\">\n";
   echo "<input type=\"hidden\" name=\"business\" value=\"lucy.byrne@dot-art.co.uk\">\n";
   echo "<input type=\"hidden\" name=\"currency_code\" value=\"GBP\">\n";

   printf("<input type=\"hidden\" name=\"item_number\" value=\"%s, %s\">\n",
      $row["item_number"], $title);
   printf("<input type=\"hidden\" name=\"item_name\" value=\"%s\">\n",
      $title);
   printf("<input type=\"hidden\" name=\"amount\" value=\"%s\">\n",
      $row["price"]);

   echo "<input type=\"image\" src=\"http://www.paypal.com/en_GB/i/btn/sc-but-01.gif\" border=\"0\" name=\"submit\" alt=\"Make payments with PayPal - it's fast, free and secure!\">\n";
   echo "<input type=\"hidden\" name=\"add\" value=\"1\">\n";
   echo "</form></td>";
   echo "</tr>\n";
}

/* Close the outer table: */
echo "</table>\n";

/* Free resultset: */
mysql_free_result($result);

/* Close database connection: */
mysql_close($link);

/* Links: */
echo "<h3 class=\"artist\">Call 0845 0176660<br> with any questions or to view any piece in person...</h3>";

echo "<h3><strong><a class=\"art_prices\" href=\"/pages/artists/insurance.php\">do you need insurance?</a></strong></h3>";
printf("<p><a class=\"art_prices\" href=\"/artist/%s\">go to %s's portfolio</a></p>", $artistUrl, $artistName);
echo "<p><a class=\"art_prices\" href=\"/pages/customers/search-art.php\">go to search page</a></p>";
echo "<p><a class=\"art_prices\" href=\"/pages/customers/buy-art.php\">go to browse art</a></p>";
?>
<p class="artist">click image to enlarge</p>

<p class="artist"><strong>important</strong></p>
<p class="artist">in accepting delivery of or making payment for the artistic works
(whichever the earlier) you indicate that you have read, understand and accept the
<a href="/pages/customers/tandc.php">terms and conditions</a> of dot-art.</p>

</div>

</div>

<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() {
	jQuery("a.fancybox").fancybox({
        'transitionIn'  :   'fade',
        'transitionOut' :   'none',
        'speedIn'       :   1000, 
        'speedOut'      :   200, 
        'overlayShow'   :   true,
        'titlePosition' :   'outside'
    });
});
</script>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
