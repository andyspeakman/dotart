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

<h1 class="artist">robinsons</h1>

<h3 class="artist">case study</h3>

<p class="artist">dot-art was commissioned by 
<a class="art_prices" href="http://www.robinsonsifa.co.uk/">Robinsons</a> to create a stunning bespoke piece 
for their new board room.
 The company wanted a work that would reflect not only their corporate identity, images and colours, but also
  the building in which their offices are situated. Photographer John Guy created them a stunning photographic
  collage, presented as a triptych, which incorporates all these elements beautifully.
</p>

<p class="artist">If you would like to find out how dot-art could improve and enhance your office
or workplace, <a class="art_prices"href="mailto:enquiries@dot-art.com" title="email dot-art">get in touch,</a>
for a no obligation chat.</p>

<p class="artist">Click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/robinsons/robinsons_1_en.jpg')" src="/images/robinsons/robinsons_1_tn.jpg" title="click to enlarge" alt="robinsons interiors (view 1)"/></td>
<td><img onclick="fixedPopup('/images/robinsons/robinsons_2_en.jpg')" src="/images/robinsons/robinsons_2_tn.jpg" title="click to enlarge" alt="robinsons interiors (view 2)"/></td>
<td><img onclick="fixedPopup('/images/robinsons/robinsons_3_en.jpg')" src="/images/robinsons/robinsons_3_tn.jpg" title="click to enlarge" alt="robinsons interiors (view 3)"/></td>

</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/robinsons/robinsons_4_en.jpg')" src="/images/robinsons/robinsons_4_tn.jpg" title="click to enlarge" alt="robinsons interiors (view 4)"/></td>
<td><img onclick="fixedPopup('/images/robinsons/robinsons_5_en.jpg')" src="/images/robinsons/robinsons_5_tn.jpg" title="click to enlarge" alt="robinsons interiors (view 5)"/></td>
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
