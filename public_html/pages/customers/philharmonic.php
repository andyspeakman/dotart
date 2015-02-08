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

<h1 class="artist">the liverpool philharmonic hall</h1>
<p class="artist">dot-art launched an exhibtion of our first series of limited edition canvas prints with
an evening of networking and art
in the beautiful setting of liverpool philharmonic hall. the exhibition was then open to the public for the next two weeks.</p>
<p class="artist">artists involved</p>

<table width="100%">
<tr align="center">
<td><p><a class="art_prices" href="/artist/david-reilly">david reilly</a></p></td>
<td><p><a class="art_prices" href="/artist/john-sutherst">john sutherst</a></p></td>
<td><p><a class="art_prices" href="/artist/nathan-pendlebury">nathan pendlebury</a></p></td>
<td><p><a class="art_prices" href="/artist/joe-thompson">joe thompson</a></p></td>

</tr>
</table>

<table class="artist" width="100%">
<tr align="center">
<td><p><a class="art_prices" href="/artist/jason-jones">jason jones</a></p></td>
<td><p><a class="art_prices" href="/artist/kathryn-kimber">kathryn kimber</a></p></td>
<td><p><a class="art_prices" href="/artist/steve-strode">steve strode</a></p></td>
<td><p class="artist"> and norman gibson.</p></td>
</tr>
</table>

<p class="artist">the preview evening on 1st june was a great sucess, as you can see from the photos below!</p>
<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/philharmonic/phil1_en.jpg')" src="/images/philharmonic/phil1_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil3_en.jpg')" src="/images/philharmonic/phil3_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil4_en.jpg')" src="/images/philharmonic/phil4_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/philharmonic/phil5_en.jpg')" src="/images/philharmonic/phil5_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil6_en.jpg')" src="/images/philharmonic/phil6_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil7_en.jpg')" src="/images/philharmonic/phil7_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/philharmonic/phil8_en.jpg')" src="/images/philharmonic/phil8_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil9_en.jpg')" src="/images/philharmonic/phil9_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil10_en.jpg')" src="/images/philharmonic/phil10_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/philharmonic/phil11_en.jpg')" src="/images/philharmonic/phil11_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil12_en.jpg')" src="/images/philharmonic/phil12_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil13_en.jpg')" src="/images/philharmonic/phil13_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/philharmonic/phil14_en.jpg')" src="/images/philharmonic/phil14_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil15_en.jpg')" src="/images/philharmonic/phil15_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
<td><img onclick="fixedPopup('/images/philharmonic/phil16_en.jpg')" src="/images/philharmonic/phil16_tn.jpg" title="click to enlarge" alt="philharmonic preview"/></td>
</tr>
</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
