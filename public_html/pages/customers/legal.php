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

<body class="light">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1>legal</h1>



<p><b>Dot Art Ltd</b> is a company registered in England and Wales, No: 855415. <br>Registered address: 4 Princes Park Mansions, Liverpool, L8 3SA.</p>
<p><b>Dot Art Services CIC</b> is a community interest company registered in England and Wales, No: 7088227. <br>Registered address: Unit 10, St Mary's Complex, Waverley Street, Bootle, Liverpool, L20 4AP.</p>

<h3 class="artist"><a href="/pages/customers/tandc.php" >terms and conditions</a></h3>

<h3 class="artist"><a href="/pages/customers/ppolicy.php" >privacy policy</a></h3>

<p><strong>If you require any further information, please email <a href="mailto:enquiries@dot-art.co.uk">
enquiries@dot-art.co.uk</a></strong></p>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
