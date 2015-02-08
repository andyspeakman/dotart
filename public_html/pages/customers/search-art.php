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
<script type="text/javascript">
    jQuery.noConflict();
    function callSearch() {
            jQuery.ajax({
            url: '/pages/customers/searchartresults.php',
            data:  jQuery('#search_criteria').serialize(),
            type: 'POST',
            beforeSend: function( xhr ) {
            	jQuery('#processing').show();
            },
            success: function(data) {
            	jQuery('#processing').hide();
            	jQuery('#search_results').html(data);
            }
        }); 
    }

    function clearForm() {
    	jQuery('#content').hide();
    }
</script>

<style>
table.colour-picker td {
   height: 1em;
	width: 1em;
}
</style>
</head>

<body class="dark">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="processing" style="display: none;position: absolute;top: 29%;left: 29%;z-index: 1001">
  <table border="0" cellpadding="0" cellspacing="0" width="440px">
    <tr>
      <td align="center">Searching... please wait</td>
    </tr>
    <tr>
      <td align="center"><img src="/images/loading.gif" /></td>
    </tr>
  </table>
</div>

<div id="form">

<h1>search art</h1>

<p>Search all the art in the dot-art gallery using the boxes below.</p>

<!-- Form to capture user search criteria -->

<form id="search_criteria" name="search_criteria" method="get" action="javascript:callSearch();" onreset="clearForm();">
<table class="search" width="100%">

  <tr>
    <!-- Region criteria: --> 
    <th>artist name:</th>
    <td>
      <select name="artist">
        <option value="0">all artists</option>
        
<?php
/* Connecting to the server and  select the database: */
include $inc_dir . 'database_connect.php';

/* Select artists: */
$query = "SELECT name FROM artist WHERE display = 1 ORDER BY SUBSTRING(name, INSTR(name, ' ') + 1, 1) ASC";
$result = mysql_query($query)
    or die("Database error retrieving regions: " . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
{
    /* Create <option> tags for each region: */
    printf("        <option value=\"%s\">%s</option>\n", $line["name"], $line["name"]);
}
?>

      </select>
    </td>

    <!-- Price criteria: -->
    <th>price:</th>
    <td>
      <select name="price">
        <option value="0">all prices</option>
        <option value="50">up to &pound;50</option>
        <option value="100">up to &pound;100</option>
        <option value="250">up to &pound;250</option>
        <option value="500">up to &pound;500</option>
        <option value="1000">up to &pound;1000</option>
      </select>
    </td>
  
    <!-- Size criteria: -->
    <th>size:</th>
    <td>
      <select name="size">
        <option value="0">all sizes</option>
        <option value="<= 20">up to 20cm</option>
        <option value="<= 50">up to 50cm</option>
        <option value="<= 100">up to 100cm</option>
        <option value="<= 200">up to 200cm</option>
        <option value=">= 20">larger than 20cm</option>
        <option value=">= 50">larger than 50cm</option>
        <option value=">= 100">larger than 100cm</option>
        <option value=">= 200">larger than 200cm</option>
      </select>
    </td>
    <td>&nbsp;</td>
    <td>
        <input type="submit" value="search" /> </td>
      <td>  <input type="reset" value="reset" />
    </td>
  </tr>
</table>
</form>

<br />

<?php
  include $inc_dir . 'colour-picker.html';
?>

<br />

<!-- Container for search results: -->
<div id="search_results">
</div>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>
</body>
</html>
