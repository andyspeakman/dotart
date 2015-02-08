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

<body class="image">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1>dot-art gallery</h1>


<p><b>2-4 Queen Avenue, Castle Street, Liverpool, L2 4TX</b></p>
<p>(for a map, please visit our <a href="/pages/contact.php">contact page</a>)</p>

<p><b>Opening Times:</b></p>
<p>10am-6pm Monday to Friday and by appointment on Saturday.</p> 
<p>Please call 0845 017 6660 for further information</p>

<p>In the gallery you will find a wide selection of work by our ever growing membership of local artists, 
from original oil paintings to postcards, limited edition prints to sculpture. 
With prices starting at just 99p for cards and £25 for art work, there really is something for everyone, 
with most items exclusive to dot-art.</p>

<p>Feel free to drop in for a browse, or if you need that last minute gift for a
hard-to-buy-for loved one. If you see something you like on the website and would like
to take a closer look, please give us a call on 0845 017 6660, and we will arrange for you
to view it in the gallery. And if you are an artist looking for more information on how dot-art could help you, 
we will be happy to give you more information.</p>

<p><b>Framing</b></p>
<p>We also offer a bespoke framing service through the gallery, at very competitive prices. 
Working only to Fine Art Trade Guild Museum and Conservation standards means that all our work is 
produced to the highest quality, using the best materials, for lasting, secure and beautiful results.</p>


<p>The gallery is also available to hire for events and corporate hospitality
<a href="mailto:info@dot-art.co.uk" title="email us"> email us</a> for more details,
or <a href="/images/venue_information.pdf"title="dot-art venue hire info"> download</a> an information sheet.</p>

<p>click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/muse publicity shots/muse publicity shots/small/5_en.jpg')" src="/images/muse publicity shots/muse publicity shots/small/5_tn.jpg" title="click to enlarge" alt="dot-art gallery (view 2)"/></td>
<td><img onclick="fixedPopup('/images/muse publicity shots/muse publicity shots/small/7_en.jpg')" src="/images/muse publicity shots/muse publicity shots/small/7_tn.jpg" title="click to enlarge" alt="dot-art gallery (view 4)"/></td>
</tr>

<tr align="center">
<td><img onclick="fixedPopup('/images/muse publicity shots/muse publicity shots/small/4_en.jpg')" src="/images/muse publicity shots/muse publicity shots/small/4_tn.jpg" title="click to enlarge" alt="dot-art gallery (view 1)"/></td>
<td><img onclick="fixedPopup('/images/muse publicity shots/muse publicity shots/small/6_en.jpg')" src="/images/muse publicity shots/muse publicity shots/small/6_tn.jpg" title="click to enlarge" alt="dot-art gallery (view 3)"/></td>

<tr align="center">

</tr>


</table>


<h2>past exhibitions:</h2>
<p>Details of some of dot-arts past exhibitions and venues can be found <a href="/pages/customers/past-exhibitions.php">here.</a>



</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
