<div id="content">

<a name="top"></a>
<h2 class="artist">results</h2>
<p class="artist">all work &copy; the artist</p>

<?php

/* Connecting to the server and  select the database: */
$inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
include $inc_dir . 'database_connect.php';

/* Create a SELECT statement based on search criteria: */
$query = "SELECT DISTINCT a.id, a.title, a.width, a.height, a.media, a.pricing_info, a.image, a.image_width, a.image_height, t.name, t.id as artistId";
$query .= " FROM art a, artist t, art_pricing p";
$query .= " WHERE a.artist = t.id";
$query .= " AND a.id = p.art";
$criteria = "";

// Check if an artist has been specified:
if ($_POST["artist"] != "0") {
   $query .= " AND t.name = '" . $_POST["artist"] . "'";
   $criteria .= "artist = " . $_POST["artist"];
} else {
   $criteria .= "all artists";
}

// Check if a price has been specified:
if ($_POST["price"] != "0") {
   $query .= " AND p.price <= " . $_POST["price"];
   $criteria .= "; price up to &pound;" . $_POST["price"];
} else {
   $criteria .= "; all prices";
}

// Check if a size has been specified:
if ($_POST["size"] != "0") {
   $query .= " AND if(a.width > a.height, a.width, a.height) ";
   $query .= $_POST["size"];
   $criteria .= "; size ";
   $criteria .= $_POST["size"] . "cm";
} else {
   $criteria .= "; all sizes";
}

$result = mysql_query($query)
	or die("Database error: " . mysql_error());

// Write out the number of results:
printf("<p class=\"artist\">%s results found for: %s</p>", mysql_num_rows($result), $criteria);

/* Print the results in a HTML table */
/* Open the outer table: */
echo '<table class="browseart">';
echo "<tr>\n";
$col_count = 0;

while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    printf("<td><a class=\"fancybox\" href=\"/artists-work/%s/%s_en.jpg\" title=\"%s\" rel=\"fancybox\">",
        $row["name"], $row["image"], $row["title"]);
	printf("<img src=\"/artists-work/%s/%s_tn.jpg\" alt=\"'%s' by %s\" class=\"hlink\"/></a><br />",
		$row["name"], $row["image"], $row["title"], $row["name"]);
    printf("<input value=\"buy now\" width=\"50\" type=\"button\" onclick=\"document.location='/pages/artists/art.php?artId=%s&returnTo=search'\" /><br />",
		$row["id"]);
	printf("<b>%s</b><br />",
		$row["title"]);
	printf("%s (<a href=\"/artist/%s\" class=\"art_prices\">see more</a>)<br />",
		$row["name"], str_replace(' ', '-', $row["name"]));
	printf("%scm x %scm, %s<br />",
		$row["width"], $row["height"], $row["media"]);
	printf("%s<br />",
		$row["pricing_info"]);
	echo "<br />\n";
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
</div>

