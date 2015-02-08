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

<h1>thank you</h1>
<p>Your transaction has been completed and a receipt will be emailed to you.
You may log into your account at <a href="http://www.paypal.com/uk" title="paypal website">the paypal website</a>
to view details of this transaction.</p>
<p>Your purchase will be sent to you within approximately 14 days. Please <a href="mailto:enquiries@dot-art.co.uk" title="email dot-art">send us a email,</a>
if you have any questions or problems.</p>

<p><a href="/index.php" title="paypal website">Continue Shopping</a></p>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
