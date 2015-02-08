<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   include $inc_dir . 'signature.php';
?>

<!-- Head section -->

<head>

<?php
   include $inc_dir . 'head.html';
  
?>

<title>dot-art | Liverpool Art Gallery | Corporate Art | Rent Art | Case Study</title>
<meta name="keywords" lang="en" content="Liverpool Art, Liverpool Art Gallery, Local artists, Corporate art, Rent art" />
<meta name="description" content="Liverpool city centre art gallery showing art by local artists. Corporate Art Services include art rental, commissioned art and consultancy." />


<link rel="stylesheet" href="/styles/lightwindow.css" type="text/css" />
<script type="text/javascript" src="/scripts/lightwindow.js"></script>
<script type="text/javascript" src="/scripts/popup.js"></script>


</head>

<!-- Body section -->

<body class="dark">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">paver smith</h1>

<h3 class="artist">case study</h3>

<p class="artist">dot-art is working with
<a class="art_prices" href="http://www.paversmith.co.uk/">Paver Smith</a> PR and marketing consultants,
to provide artwork for the reception area and meeting rooms of their stunning offices on the top floor of
the Plaza building, on Liverpool's Old Hall Street.
They wanted fresh, modern work to complement their contemporary image, as well as the fantastic view!
These bright abstract paintings by
<a class="art_prices" href="/artist/joe-thompson">Joe Thompson</a> were inspired
 by Beatles songs, unobtrusively giving the work a local character.
</p>

<p class="artist">If you would like to find out how dot-art could improve and enhance your office
or workplace, <a class="art_prices"href="mailto:enquiries@dot-art.com" title="email dot-art">get in touch,</a>
for a no obligation chat.</p>

<p class="artist">Click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/paver_smith/paver_smith_6_en.jpg')" src="/images/paver_smith/paver_smith_6_tn.jpg" title="click to enlarge" alt="paver_smith interiors (view 1)"/></td>
<td><img onclick="fixedPopup('/images/paver_smith/paver_smith_2_en.jpg')" src="/images/paver_smith/paver_smith_2_tn.jpg" title="click to enlarge" alt="paver_smith interiors (view 2)"/></td>
<td><img onclick="fixedPopup('/images/paver_smith/paver_smith_3_en.jpg')" src="/images/paver_smith/paver_smith_3_tn.jpg" title="click to enlarge" alt="paver_smith interiors (view 3)"/></td>

</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/paver_smith/paver_smith_4_en.jpg')" src="/images/paver_smith/paver_smith_4_tn.jpg" title="click to enlarge" alt="paver_smith interiors (view 4)"/></td>
<td><img onclick="fixedPopup('/images/paver_smith/paver_smith_5_en.jpg')" src="/images/paver_smith/paver_smith_5_tn.jpg" title="click to enlarge" alt="paver_smith interiors (view 5)"/></td>
<td><img onclick="fixedPopup('/images/paver_smith/paver_smith_7_en.jpg')" src="/images/paver_smith/paver_smith_7_tn.jpg" title="click to enlarge" alt="paver_smith interiors (view 6)"/></td>
<tr align="center">

</tr>

</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
