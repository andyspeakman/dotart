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

<body class="image">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1>past exhibitions</h1>

<ul>

<li><h2>auschwitz- echoes of sorrow, by <a href="/artist/john-guy">john guy</a></h2> 26th jan - 8th feb 2007, holiday inn hotel, lime street, liverpool, l1 1nq. coming soon...</li>
<li><h2>cressington heath</h2> off garston way, cressington heath, liverpool, l19 2ja<a href="/pages/customers/redrow.php" > more...</a></li>
<li><h2>the 08 place</h2> whitechapel, liverpool, l1 6dz<a href="/pages/customers/08_place.php" > more...</a></li>
<li><h2>everyman bar and bistro</h2> hope street, liverpool. <a href="/pages/customers/theeveryman.php" >more...</a></li>
<li><h2>the font ba r</h2> arrad street, liverpool, l7 7je. <a href="/pages/customers/thefont.php" >more...</a></li>
<li><h2>aztec interiors</h2><a href="/pages/customers/aztec.php" >more...</a></li>
<li><h2>60 hope street restaurant</h2> hope street, liverpool. <a href="/pages/customers/60hs.php" >more...</a></li>
<li><h2>liverpool philharmonic hall</h2> hope street, liverpool, l1 9bp <a href="/pages/customers/philharmonic.php">more...</a></li>
<li><h2>vavoom restaurant</h2> 1, hoghton place, southport <a href="/pages/customers/vavoom.php" >more...</a></li>
<li><h2>portland hall spa</h2> 17a portland street, southport, pr8 1lj <a href="/pages/customers/portlandhall.php" >more...</a></li>
<li><h2>the cornerstone gallery</h2>liverpool hope university, hope at everton, 1, haigh street, liverpool, l3 8qb. <a href="/pages/customers/cornerstone.php" >more...</a></li>
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
