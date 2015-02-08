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

<h1>faqs</h1>

<p>If your question is not answered here, please email <a href="mailto:enquiries@dot-art.co.uk">
enquiries@dot-art.co.uk</a></p>

<ul>

<li><strong>How can I buy a piece of art from the website?</strong></li>
<p>Browse the art on the site through the 
<a href="/pages/customers/buy-art.php" title="database of available art">buy art</a>  and 
<a href="/pages/customers/search-art.php" title="searchable database of available art">search art</a> pages.
Under each work you will see a "buy now" button; click this and it will take you to a page detailing
the options available for that work. Click the "add to basket" button next to the piece you have chosen,
 which will take you to your shopping basket. From here you can either check out using our secure Paypal
credit and debit card system, or click on "continue shopping" to return to dot-art.</p>

<li><strong>What payment methods do you accept?</strong></li>
<p>You can pay using our Paypal system with Visa, Visa Delta, Visa Electron, Switch/Maestro, Solo, Mastercard
and American Express</p>

<li><strong>Is Paypal safe?</strong></li>
<p>Yes. Paypal is the global leader in online payments. Read more 
<a href="http://www.paypal.com/cgi-bin/webscr?cmd=p/wel/safe-outside">here</a>.</p>


<li><strong>What if I dont like the piece when it arrives or it is not what I expected?</strong></li>
<p>Although dot-art endeavours to represent all works as accurately as possible on the website it
is possible that the work may not appear identical in reality. We believe that 99% of the time you
will be pleasantly surprised as photos do not always do the work justice, but if you are unhappy with your
purchase you can return it to us within 7 days and all you will pay is the postage and packing.</p>

<li><strong>What is a Giclee print?</strong></li>
<p>Giclée prints are very high quality reproductions made on the latest generation of inkjet printers. 
They are made from a digital file (ie a scan from an artwork or photograph, or a digital camera file) 
using special long life inks and top quality art papers.
The benefits of giclée printing include: superb image quality, lightfast inksets give long life to the print, 
much longer than conventional printing and higher quality reproduction than conventional printing.</p>

<li><strong>Who pays the postage and packing on purchases?</strong></li>
<p>You, the customer will have the price of postage and packing added onto your order total.</p>

<li><strong>How much will postage and packing cost?</strong></li>
<p>We try to deliver your art within 7-10 days but occasionally it will take a little longer.
We will let you know by email as soon as it has been dispatched.
Costs are as follows;</p>
<p>purchase total = &pound;100 or less = &pound;12.50</p>
<p>purchase total = &pound;101 - &pound;250 = &pound;22.50</p>
<p>purchase total = &pound;251 - &pound;500 = &pound;33.00</p>
<p>purchase total = &pound;501 - &pound;1000 = &pound;38.00</p>

<li><strong>Can you delivery internationally?</strong></li>
<p>Yes, but quoted prices are for delivery WITHIN THE UK ONLY. If you wish your purchase to be shipped 
outside the UK, please email 
<a href="mailto:enquiries@dot-art.co.uk">enquiries@dot-art.co.uk</a>, BEFORE you make your order, 
and we will provide you with an individual quote.</p>

<li><strong>What about insurance?</strong></li>
<p>If you have paid using a credit card, your purchase will generally be automatically insured. 
(Please check with your card provider). If not, you can purchase additional postal insurance, tailored to your purchase total,
 during your transaction, <a href="/pages/artists/insurance.php">here</a>.</p>

</ul>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
