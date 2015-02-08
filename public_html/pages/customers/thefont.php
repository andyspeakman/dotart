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

<h1 class="artist">the font</h1>

<p class="artist">currently displaying the work of katy rees and sumit sarkar.</p>
<p class="artist">click on any image to enlarged it</p>

<table class="artist" width="100%">
 <tr align="center"><td><img onclick="popUp('/images/font/font7_en.jpg')" src="/images/font/font7_tn.jpg" title="click to enlarge" alt="the font (view 1)"/></td>
 <td><img onclick="fixedPopup('/images/font/font8_en.jpg')" src="/images/font/font8_tn.jpg" title="click to enlarge" alt="the font (view 2)"/></td>
<td><img onclick="fixedPopup('/images/font/font_15_en.jpg')" src="/images/font/font_15_tn.jpg" title="click to enlarge" alt="the font (view 3)"/></td>
 </tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/font/font2_en.jpg')" src="/images/font/font2_tn.jpg" title="click to enlarge" alt="the font (view 4)"/></td>
 <td><img onclick="fixedPopup('/images/font/font_11_en.jpg')" src="/images/font/font_11_tn.jpg" title="click to enlarge" alt="the font (view 5)"/></td>
 <td><img onclick="fixedPopup('/images/font/font_12_en.jpg')" src="/images/font/font_12_tn.jpg" title="click to enlarge" alt="the font (view 6)"/></td>
 </tr>
 <tr align="center">
 <td><img onclick="fixedPopup('/images/font/font_10_en.jpg')" src="/images/font/font_10_tn.jpg" title="click to enlarge" alt="the font (view 7)"/></td>
 </tr>
</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
