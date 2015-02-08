<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   include $inc_dir . 'signature.php';
?>


<!-- Head section -->

<head>

<?php
   include $inc_dir . 'head.html';
  
?>

<title>dot-art | Liverpool Art Gallery | Buy Artwork | Art to Buy | Local Artists | Artists Contemporary</title>


<meta name="keywords" lang="en" content="Art to Buy, Buy artwork, Artists Contemporary, Liverpool Art, Liverpool Art Gallery, Local artists, Local artist, Art to buy
" />
<meta name="description" content="Buy artwork online or request viewings in our Liverpool city centre art gallery. Art to buy by local artists contemporary paintings and prints.
." />


</head>

<body class="light">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">
<a name="top"></a>

<h1>artists</h1>


<h3><a href="/pages/contact.php">Call 0845 0176660</a><br> with any questions or to view any piece in person...</h3>


<p>Click on one of the artists listed below to view or buy their work and find out more about them.</p>

<p>If you find a piece you are interested in seeing or finding out more about, send us an
<a href="mailto:enquiries@dot-art.co.uk" title="email dot-art">email,</a>
and we will arrange for you to view it at our <a href="/pages/gallery.php" title="go to go to see art page">
gallery</a>.</p>


<p>If you cant see what you are looking for, or you would like a different version of a
work, then you can <a href="mailto:enquiries@dot-art.co.uk" title="email dot-art about commissioning">commission</a> any of our artists to
produce an artwork to your exact specification.</p>

<p>If you are looking for an unusual gift, why not give a dot-art 
<a href="mailto:enquiries@dot-art.co.uk" title="email dot-art about art tokens">art token</a>? Perfect for weddings,
anniversaries or other special occasions, this is a unique and imaginative way to give original art
while still allowing the recipient to choose for themselves from thousands of works.</p>

<p>All work is unframed unless otherwise stated.</p>

<h3></h3>

<?php

/* Connecting to the server and  select the database: */    

include $inc_dir . 'database_connect.php';

/* Select displayable artists: */

$query = "SELECT a.name, a.id, t.title, t.image FROM artist a, art t WHERE a.id = t.artist AND a.display = 1 and t.main_image = 1 ORDER BY RAND()";

$result = mysql_query($query)	or die("Database error: " . mysql_error());

/* Printing the results in a HTML table */

/* Open the outer table: */

echo '<table class="browseartists">';

echo "<tr>\n";

$col_count = 0;

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
   $artistName = $line["name"];
   $artistUrl = str_replace(' ', '-', $line["name"]);

   echo "<td>";

	printf("<a href=\"/artist/%s\"><img src=\"/artists-work/%s/%s_tn.jpg\" title=\"%s\" alt=\"'%s' %s\"/></a>",
		$artistUrl, $artistName, $line["image"], $line["title"], $line["title"], $artistName);
		
   echo '<br />';

	printf("<a href=\"/artist/%s\" title=\"go to %s page\">%s's portfolio</a>",
		$artistUrl, $artistName, $artistName);

	echo "</td>\n";

	$col_count++;

	/* Make sure we only have three columns: */	
	if ($col_count == 3)	{
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

<a href="#top" title="back to top">back to top</a>

</div>

</body>

</html>

