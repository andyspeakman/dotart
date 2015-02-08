<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   include $inc_dir . 'signature.php';
?>

<!-- Head section -->

<head>

<?php

/* Connecting to the server and  select the database: */
include $inc_dir . 'database_connect.php';

/* Select selected artist's information: */
$artistId = $_GET["artistId"];
$query = "SELECT name, statement, notes FROM artist WHERE id = " . $artistId;
$result = mysql_query($query)
	or die("Database error: " . mysql_error());

$row = mysql_fetch_array($result, MYSQL_ASSOC);
$artistName = $row["name"];

printf("<title>dot-art | Liverpool Art Gallery | Buy Artwork | Art to Buy | Local Artists | %s</title>\n", ucwords($artistName));

?>

<meta name="keywords" lang="en" content="Art to Buy, Buy artwork, Artists Contemporary, Liverpool Art, Liverpool Art Gallery, Local artists, Local artist, Art to buy" />
<meta name="description" content="Buy artwork online or request viewings in our Liverpool city centre art gallery. Art to buy by local artists contemporary paintings and prints." />

<?php
  include $inc_dir . 'head.html';
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
<a name="top"></a>

<?php

/* Print the artist's name and statement: */
printf("<h1 class=\"artist\">%s</h1>\n\n", $artistName);

echo "<p><a class=\"art_prices\" href=\"/pages/customers/buy-art.php\">back to browse art</a></p>";

echo "<p class=\"artist\"><b>Call 0845 0176660 with any questions or to view any piece in person...</b></p>";



printf("%s\n\n", $row["statement"]);
printf("%s\n\n", $row["notes"]);

echo "<p class=\"artist\">all work &copy; the artist and dot-art</p>";

include $inc_dir . 'colour-picker.html';

/* Select artist's work: */
$query = "SELECT id, title, width, height, media, pricing_info, image, image_width, image_height FROM art WHERE artist = " . $artistId;
$result = mysql_query($query)
	or die("Database error: " . mysql_error());

/* Print the results in a HTML table */
/* Open the outer table: */
echo '<table class="browseart">';
echo "<tr>\n";
$col_count = 0;

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    printf("<td><a class=\"fancybox\" href=\"/artists-work/%s/%s_en.jpg\" title=\"%s\" rel=\"fancybox\">",
        $artistName, $row["image"], $row["title"]);
	printf("<img src=\"/artists-work/%s/%s_tn.jpg\" alt=\"'%s' by %s\" class=\"hlink\"/></a><br />",
		$artistName, $row["image"], $row["title"], $artistName);
    printf("<input value=\"buy now\" width=\"50\" type=\"button\" onclick=\"document.location='/pages/artists/art.php?artId=%s'\" /><br />",
		$row["id"]);
	printf("<b>%s</b><br />",
		$row["title"]);
	printf("%scm x %scm, %s<br />",
		$row["width"], $row["height"], $row["media"]);
	printf("%s<br />",
		$row["pricing_info"]);
	echo "</td>\n";
	$col_count++;

	/* Make sure we only have three columns: */
	if ($col_count == 3)
	{
		$col_count = 0;
		echo "</tr>\n<tr>";
	}
}

/* Close the outer table: */
echo "</tr>\n";
echo "</table>\n";

/* Free resultset: */
mysql_free_result($result);

/* Close database connection: */
mysql_close($link);

?>
<p><a href="#top" class="art_prices">back to top</a></p>

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
