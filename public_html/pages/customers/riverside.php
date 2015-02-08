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

<h1 class="artist">riverside housing</h1>

<h3 class="artist">case study</h3>

<p class="artist">dot-art worked with the
<a class="art_prices" href="http://www.riverside.org.uk">Riverside Housing Group</a>, the foremost social purpose housing and regeneration company in the UK,
at their headquarters in Speke, Liverpool. As well as commissioning a triptych depicting
the Liverpool skyline by
<a class="art_prices" href="/artist/steve-strode">Steve Strode,</a>
 the organisation are involved in a rotating rental program. Every 3 months, their art commitee chooses
 a new artist whose work is displayed in the staff restaurant. Artists have included-
<a class="art_prices" href="/artist/steve-strode">Steve Strode</a>,
<a class="art_prices" href="/artist/michelle-burrows">Michelle Burrows</a>
and <a class="art_prices" href="/artist/grahame-ashcroft">Grahame Ashcroft</a>.
</p>

<p class="artist">If you would like to find out how dot-art could improve and enhance your office
or workplace, <a class="art_prices"href="mailto:enquiries@dot-art.com" title="email dot-art">get in touch,</a>
for a no obligation chat.</p>

<p class="artist">Click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/riverside/riverside_1_en.jpg')" src="/images/riverside/riverside_1_tn.jpg" title="click to enlarge" alt="riverside interiors (view 1)"/></td>
<td><img onclick="fixedPopup('/images/riverside/riverside_2_en.jpg')" src="/images/riverside/riverside_2_tn.jpg" title="click to enlarge" alt="riverside interiors (view 2)"/></td>
<td><img onclick="fixedPopup('/images/riverside/riverside_3_en.jpg')" src="/images/riverside/riverside_3_tn.jpg" title="click to enlarge" alt="riverside interiors (view 3)"/></td>

</tr>

<tr align="center">
<td><img onclick="popUp('/images/riverside/riverside_4_en.jpg')" src="/images/riverside/riverside_4_tn.jpg" title="click to enlarge" alt="riverside interiors (view 4)"/></td>
<td><img onclick="popUp('/images/riverside/riverside_5_en.jpg')" src="/images/riverside/riverside_5_tn.jpg" title="click to enlarge" alt="riverside interiors (view 5)"/></td>
<td><img onclick="popUp('/images/riverside/riverside_6_en.jpg')" src="/images/riverside/riverside_6_tn.jpg" title="click to enlarge" alt="riverside interiors (view 6)"/></td>
<tr align="center">

</tr>


<tr align="center">
<td><img onclick="popUp('/images/riverside/riverside_7_en.jpg')" src="/images/riverside/riverside_7_tn.jpg" title="click to enlarge" alt="riverside interiors (view 7)"/></td>
<td><img onclick="popUp('/images/riverside/riverside_8_en.jpg')" src="/images/riverside/riverside_8_tn.jpg" title="click to enlarge" alt="riverside interiors (view 8)"/></td>
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
