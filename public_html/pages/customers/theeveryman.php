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

<h1 class="artist">the everyman</h1>
<p class="artist">currently displaying the work of dawn woolley, joanne millea, lucy twigg and stephen raymond.</p>
<p class="artist">click on any image to enlarged it</p>

<table class="artist" width="100%">
<tr align="center">
 <td><img onclick="fixedPopup('/images/everyman/everyman_8_en.jpg')" src="/images/everyman/everyman_8_tn.jpg" title="click to enlarge" alt="the everyman (view 1)"/></td>
 <td><img onclick="fixedPopup('/images/everyman/everyman_2_en.jpg')" src="/images/everyman/everyman_2_tn.jpg" title="click to enlarge" alt="the everyman (view 2)"/></td>
 <td><img onclick="fixedPopup('/images/everyman/everyman_3_en.jpg')" src="/images/everyman/everyman_3_tn.jpg" title="click to enlarge" alt="the everyman (view 3)"/></td>
</tr>
<tr align="center">
 <td><img onclick="fixedPopup('/images/everyman/everyman_4_en.jpg')" src="/images/everyman/everyman_4_tn.jpg" title="click to enlarge" alt="the everyman (view 4)"/></td>
 <td><img onclick="fixedPopup('/images/everyman/everyman_5_en.jpg')" src="/images/everyman/everyman_5_tn.jpg" title="click to enlarge" alt="the everyman (view 5)"/></td>
 <td><img onclick="fixedPopup('/images/everyman/everyman_6_en.jpg')" src="/images/everyman/everyman_6_tn.jpg" title="click to enlarge" alt="the everyman (view 6)"/></td>
</tr>
<tr align="center">
 <td><img onclick="fixedPopup('/images/everyman/everyman_7_en.jpg')" src="/images/everyman/everyman_7_tn.jpg" title="click to enlarge" alt="the everyman (view 4)"/></td>
</tr>
</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
