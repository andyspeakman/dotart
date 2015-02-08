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

</head>

<body class="content">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="body">

<h1>see examples</h1>

<p>click below to view images of current and recent dot-art displays in a variety of locations:</p>

<ul>
<li><h2>60 hope street restaurant</h2> hope street, liverpool. <a href="/pages/customers/60hs.php" >more...</a></li>
<li><h2>everyman bar and bistro</h2> hope street, liverpool. <a href="/pages/customers/theeveryman.php" >more...</a></li>
<li><h2>the font bar</h2> arrad street, liverpool, l7 7je. <a href="/pages/customers/thefont.php" >more...</a></li>
<li><h2>vavoom restaurant</h2> haughton place, southport. coming soon</li>

</ul>

<p>past exhibitions:</p>

<ul>
<li><h2>lewis's restaurant</h2> second floor, renshaw street, liverpool. <a href="/pages/customers/lewis-s.php" >more...</a></li>
<li><h2>lewis's coffee shop</h2> ground floor, renshaw street. <a href="/pages/customers/lewiss-cs.php" >more...</a></li>
</ul>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
