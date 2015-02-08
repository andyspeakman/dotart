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

<!-- Body section -->

<body class="dark">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">artists party #1</h1>
<p class="artist">dot-art held its first artists social event, an evening of music (courtesy of mellowtone),
socialising and general artiness, at heart and soul, mount pleasant, on tuesday 22nd august.</p>

<p class="artist">the aim of the evening was to let all our current and prospective artists know about our plans for the future,
including our new gallery space, opening in oriel close, water street, liverpool city centre, in september of this year,
find out about current opportunities and also to hear from some of the people and businesses we are working with.</p>

<p class="artist">our first two artist sponsors had a few words to say about their experiences and the dot-art team
were on hand to answer any questions about who we are and what we are doing.</p>
<p class="artist">the evening was a huge success and we will be making it a regular event, with the next one scheduled for the autumn.</p>

<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_1_en.jpg')" src="/images/heart and soul/artists_party_1_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_2_en.jpg')" src="/images/heart and soul/artists_party_2_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_13_en.jpg')" src="/images/heart and soul/artists_party_13_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_4_en.jpg')" src="/images/heart and soul/artists_party_4_tn.jpg" title="click to enlarge" alt="artists party"/></td>
</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_5_en.jpg')" src="/images/heart and soul/artists_party_5_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_6_en.jpg')" src="/images/heart and soul/artists_party_6_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_7_en.jpg')" src="/images/heart and soul/artists_party_7_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_8_en.jpg')" src="/images/heart and soul/artists_party_8_tn.jpg" title="click to enlarge" alt="artists party"/></td>
</tr>
<tr align="center">
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_9_en.jpg')" src="/images/heart and soul/artists_party_9_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_10_en.jpg')" src="/images/heart and soul/artists_party_10_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_11_en.jpg')" src="/images/heart and soul/artists_party_11_tn.jpg" title="click to enlarge" alt="artists party"/></td>
<td><img onclick="fixedPopup('/images/heart and soul/artists_party_12_en.jpg')" src="/images/heart and soul/artists_party_12_tn.jpg" title="click to enlarge" alt="artists party"/></td>

</tr>
</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
