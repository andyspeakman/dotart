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


<h1>site map</h1>

<table class="search" width="100%">

<tr>

<p><a href="/" title="dot-art home page">home</a></p>
</tr>

<tr>
<p><strong>buy art</strong></p>
<p><a href="/pages/customers/buy-art.php" title="buy art online">browse art</a></p>
<p><a href="/pages/customers/search-art.php" title="search art online">search art</a></p>
<p><a href="/pages/gallery.php" title="visit us">visit us</a></p>
<p><a href="/pages/customers/framing.php" title="framing service">framing</a></p>
</tr>

<tr>
<p><strong>corporate art</strong></p>
<p><a href="/pages/customers/corporate-art.php" title="corporate art">why and how</a></p>
<p><a href="/pages/customers/case-studies.php" title="case studies">case studies</a></p>
<p><a href="/pages/customers/commission-art.php" title="commission art">commission art</a></p>
<p><a href="/pages/customers/rent-art.php" title="rent art">rent art</a></p>
</tr>

<tr>
<p><a href="/schools.php" title="mailing list">schools</a></p>
</tr>

<tr>
<p><a href="/pages/customers/register.php" title="mailing list">mailing list</a></p>
</tr>

<tr>
<p><a href="/art-classes.php" title="mailing list">art classes</a></p>
</tr>

<tr>
<p><strong>news</strong></p>
<p><a href="/pages/news.php" title="news and events">news and events</a></p>
<p><a href="/pages/news-archive.php" title="news archive">news archive</a></p>
<p><a href="/pages/press.php" title="press coverage">press coverage</a></p>
<p><a href="/pages/press-archive.php" title="press archive">press archive</a></p>
<p><a href="/pages/press_releases.php" title="press releases">press releases</a></p>
</tr>

<tr>
<p><strong>about us</strong></p>
<p><a href="/pages/about-us.php" title="about us">overview</a></p>
<p><a href="/pages/customers/faqs2.php" title="faqs">faqs</a></p>
<p><a href="/pages/testamonials.php" title="testamonials"></a></p>
<p><a href="/pages/customers/legal.php" title="legal"></a></p>
</tr>

<tr>
<p><a href="/pages/contact.php" title="contact">contact</a></p>
</tr>

<tr>
<p><a href="/pages/links.php" title="links">links</a></p>
</tr>

</table>

</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>

</body>

</html>
