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

<body class="dark"">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">lewis's coffee shop</h1>

<p class="artist">currently displaying the work of john sutherst</p>
<p class="artist">click on any image to enlarged it</p>

<table class="artist" width="100%">
<tr align="center"><td><img onclick="popUp('lewiss_cs1')" src="/images/lewiss_cs/lewiss_cs1_tn.jpg" title="click to enlarge" alt="lewis's coffee shop (view 1)"/></td>
<td><img onclick="popUp('lewiss_cs2')" src="/images/lewiss_cs/lewiss_cs2_tn.jpg" title="click to enlarge" alt="lewis's coffee shop (view 2)"/></td>
<td><img onclick="popUp('lewiss_cs3')" src="/images/lewiss_cs/lewiss_cs3_tn.jpg" title="click to enlarge" alt="lewis's coffee shop (view 3)"/></td></tr>
<tr align="center"><td><img onclick="popUp('lewiss_cs4')" src="/images/lewiss_cs/lewiss_cs4_tn.jpg" title="click to enlarge" alt="lewis's coffee shop (view 4)"/></td>
</tr>
</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
