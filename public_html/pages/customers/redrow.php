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

<h1 class="artist">cressington heath</h1>
<p class="artist">dot-art has teamed up with redrow homes to turn a 4 bedroom show home at their
<a class="art_prices" href="http://www.redrow.co.uk/developments/view/40"> cressington heath development</a>
in garston into an art gallery for 6 months. although an unconventional setting for an
 art exhibition, it gives the viewer a rare opportunity to see how original art could fit into
 thier own home, by putting the exhibits in a realistic context.</p>
<p class="artist">work by fifteen of dot-arts artists is on show around the house, and available to buy.
in addition, everyone who buys a house on the development for the duration of the exhibition
will receive a voucher for £250 to spend at dot-art, courtesy of redrow.</p>


<p class="artist">the show will run until march 2007 and is open to the public 7 days a week, 10am-5.30pm.
please visit the <a class="art_prices" href="http://www.redrow.co.uk/developments/view/40"> redrow website</a>
for directions.</p>

<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/redrow/redrow_4_en.jpg')" src="/images/redrow/redrow_4_tn.jpg" title="click to enlarge" alt="cressington heath (view 1)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_1_en.jpg')" src="/images/redrow/redrow_1_tn.jpg" title="click to enlarge" alt="cressington heath (view 2)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_2_en.jpg')" src="/images/redrow/redrow_2_tn.jpg" title="click to enlarge" alt="cressington heath (view 3)"/></td>
</tr>

<tr align="center">
<td><img onclick="fixedPopup('/images/redrow/redrow_3_en.jpg')" src="/images/redrow/redrow_3_tn.jpg" title="click to enlarge" alt="cressington heath (view 4)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_7_en.jpg')" src="/images/redrow/redrow_7_tn.jpg" title="click to enlarge" alt="cressington heath (view 5)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_6_en.jpg')" src="/images/redrow/redrow_6_tn.jpg" title="click to enlarge" alt="cressington heath (view 6)"/></td>
</tr>

<tr align="center">
<td><img onclick="fixedPopup('/images/redrow/redrow_5_en.jpg')" src="/images/redrow/redrow_5_tn.jpg" title="click to enlarge" alt="cressington heath (view 4)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_8_en.jpg')" src="/images/redrow/redrow_8_tn.jpg" title="click to enlarge" alt="cressington heath (view 5)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_9_en.jpg')" src="/images/redrow/redrow_9_tn.jpg" title="click to enlarge" alt="cressington heath (view 6)"/></td>
</tr>

<tr align="center">
<td><img onclick="fixedPopup('/images/redrow/redrow_10_en.jpg')" src="/images/redrow/redrow_10_tn.jpg" title="click to enlarge" alt="cressington heath (view 4)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_11_en.jpg')" src="/images/redrow/redrow_11_tn.jpg" title="click to enlarge" alt="cressington heath (view 5)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_12_en.jpg')" src="/images/redrow/redrow_12_tn.jpg" title="click to enlarge" alt="cressington heath (view 6)"/></td>
</tr>

<tr align="center">
<td><img onclick="fixedPopup('/images/redrow/redrow_13_en.jpg')" src="/images/redrow/redrow_13_tn.jpg" title="click to enlarge" alt="cressington heath (view 4)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_14_en.jpg')" src="/images/redrow/redrow_14_tn.jpg" title="click to enlarge" alt="cressington heath (view 5)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_15_en.jpg')" src="/images/redrow/redrow_15_tn.jpg" title="click to enlarge" alt="cressington heath (view 6)"/></td>
</tr>

<tr align="center">
<td><img onclick="fixedPopup('/images/redrow/redrow_17_en.jpg')" src="/images/redrow/redrow_17_tn.jpg" title="click to enlarge" alt="cressington heath (view 4)"/></td>
<td><img onclick="fixedPopup('/images/redrow/redrow_16_en.jpg')" src="/images/redrow/redrow_16_tn.jpg" title="click to enlarge" alt="cressington heath (view 5)"/></td>
<td></td>
</tr>

</table>


</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>
</body>

</html>
