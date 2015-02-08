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

<body class="dark">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">lewis's</h1>

<p class="artist">currently displaying the work of nigel buckels, kathy miller and paul mcginty</p>
<p class="artist">click on any image to enlarged it</p>

<table class="artist" width="100%">
<tr align="center"><td><img onclick="popUp('/images/lewiss/lewiss_1_en.gif')" src="/images/lewiss/lewiss_1_tn.gif" title="click to enlarge" alt="lewis's (view 1)"/></td>
<td><img onclick="fixedPopup('/images/lewiss/lewiss_2_en.gif')" src="/images/lewiss/lewiss_2_tn.gif" title="click to enlarge" alt="lewis's (view 2)"/></td>
<td><img onclick="fixedPopup('/images/lewiss/lewiss_3_en.gif')" src="/images/lewiss/lewiss_3_tn.gif" title="click to enlarge" alt="lewis's (view 3)"/></td></tr>
<tr align="center"><td><img onclick="popUp('/images/lewiss/lewiss_4_en.gif')" src="/images/lewiss/lewiss_4_tn.gif" title="click to enlarge" alt="lewis's (view 4)"/></td>
<td><img onclick="fixedPopup('/images/lewiss/lewiss_5_en.gif')" src="/images/lewiss/lewiss_5_tn.gif" title="click to enlarge" alt="lewis's (view 5)"/></td>
<td><img onclick="fixedPopup('/images/lewiss/lewiss_6_en.gif')" src="/images/lewiss/lewiss_6_tn.gif" title="click to enlarge" alt="lewis's (view 6)"/></td></tr>
</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
