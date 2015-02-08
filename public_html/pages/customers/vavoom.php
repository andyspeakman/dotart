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

<h1 class="artist">vavoom restaurant</h1>
<p class="artist">currently displaying landscapes by
<a class="art_prices" href="/artist/tom-mcgrath">tom mcgrath</a> and
<a class="art_prices" href="/artist/david-reilly">david reilly.</a></p>

<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/vavoom/vavoom_8_en.jpg')" src="/images/vavoom/vavoom_8_tn.jpg" title="click to enlarge" alt="vavoom restaurant (view 1)"/></td>
<td><img onclick="fixedPopup('/images/vavoom/vavoom_1_en.jpg')" src="/images/vavoom/vavoom_1_tn.jpg" title="click to enlarge" alt="vavoom restaurant (view 3)"/></td>
<td><img onclick="fixedPopup('/images/vavoom/vavoom_6_en.jpg')" src="/images/vavoom/vavoom_6_tn.jpg" title="click to enlarge" alt="vavoom restaurant (view 7)"/></td>

</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/vavoom/vavoom_3_en.jpg')" src="/images/vavoom/vavoom_3_tn.jpg" title="click to enlarge" alt="vavoom restaurant (view 4)"/></td>
<td><img onclick="fixedPopup('/images/vavoom/vavoom_5_en.jpg')" src="/images/vavoom/vavoom_5_tn.jpg" title="click to enlarge" alt="vavoom restaurant (view 2)"/></td>
<td><img onclick="fixedPopup('/images/vavoom/vavoom_2_en.jpg')" src="/images/vavoom/vavoom_2_tn.jpg" title="click to enlarge" alt="vavoom restaurant (view 6)"/></td>
</tr>
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
