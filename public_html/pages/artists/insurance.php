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

<script type="text/javascript">
   function updateInsurance(opt) {
      if (opt == 1) {
         document.getElementById('iname').value = 'Insurance, Band 1';
         document.getElementById('inumber').value = 'INS1';
         document.getElementById('amt').value = '2.50';
      } else if (opt == 2) {
         document.getElementById('iname').value = 'Insurance, Band 2';
         document.getElementById('inumber').value = 'INS2';
         document.getElementById('amt').value = '12.50';
      } else if (opt == 3) {
         document.getElementById('iname').value = 'Insurance, Band 3';
         document.getElementById('inumber').value = 'INS3';
         document.getElementById('amt').value = '25.00';
      } else if (opt == 4) {
         document.getElementById('iname').value = 'Insurance, Band 4';
         document.getElementById('inumber').value = 'INS4';
         document.getElementById('amt').value = '50.00';
      }
   } 
</script>

</head>

<body class="dark">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">buy insurance</h1>

<p class="artist">To insure your purchases, please select the band which your TOTAL PURCHASE PRICE falls into, 
and click on "add to cart". </p>

<p class="artist">For example, if you have bought two prints, for £50 and £75, you must select the BAND 2
 insurance, priced at £12.50, as your total purchase price is £125.</p>

<table class="art_prices" width="50%">
   <tr>
      <th>Price of Art</th>
      <th>Cost of Insurance</th>
      <th>Select</th>
   </tr>
   <tr>
      <td>&pound;0.00 - &pound;100.00</td>
      <td>&pound;2.50</td>
      <td><input type="radio" name="insurance" onchange="updateInsurance(1)" /></td>
   </tr>
   <tr>
      <td>&pound;100.01 - &pound;250.00</td>
      <td>&pound;12.50</td>
      <td><input type="radio" name="insurance" onchange="updateInsurance(2)" /></td>
   </tr>
   <tr>
      <td>&pound;250.01 - &pound;500.00</td>
      <td>&pound;25.00</td>
      <td><input type="radio" name="insurance" onchange="updateInsurance(3)" /></td>
   </tr>
   <tr>
      <td>&pound;500.01 - &pound;1,000.00</td>
      <td>&pound;50.00</td>
      <td><input type="radio" name="insurance" onchange="updateInsurance(4)" /></td>
   </tr>
</table>

<br />

<form name="_xclick" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="lucy.byrne@dot-art.co.uk">
<input type="hidden" name="currency_code" value="GBP">

<input type="hidden" id="iname" name="item_number" value="%s, %s">
<input type="hidden" id="inumber" name="item_name" value="%s">
<input type="hidden" id="amt" name="amount" value="%s">
<input type="hidden" name="shipping" value="0.00">

<input type="image" src="http://www.paypal.com/en_GB/i/btn/sc-but-01.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<input type="hidden" name="add" value="1">
</form>

<p class="artist">Please note, if you have paid by credit card, your purchases may already be insured. 
Please check with your card provider.</p> 

<p class="artist"><strong>YOU ARE RESPONSIBLE for ensuring that your art work is insured in transit,
 as dot-art can take no responsibility for items during this period.</strong></p>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
