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
<link rel="stylesheet" href="/styles/jquery.fancybox-1.3.4.css" type="text/css" />
<script type="text/javascript" src="/scripts/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.fancybox-1.3.4.pack.js"></script>
</head>

<!-- Body section -->

<body class=dark>

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">08 place</h1>
<p class="artist">dot-art is delighted to announce a new selling exhibition at the
<a class="art_prices" href="http://www.liverpool08.com/08Shop/index.asp">08 place</a>,
whitechapel (opposite the met quarter), liverpools one-stop culture shop for a range of services for the local community and visitors to the city.
work by
<a class="art_prices" href="/artist/helen-mitchell">helen mitchell,</a> and
<a class="art_prices" href="/artist/caroline-henderson">caroline henderson</a>
is currently on display.</p>

<p class="artist">if you have any comments or feedback regarding this exhibition, or ideas for what
 type of work you would like to see in the 08 place in the future, please
<a class="art_prices"href="mailto:08place@dot-art.co.uk" title="email dot-art">get in touch,</a>
</p>

<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td>
    <a href="/images/08_place/08_4_en.jpg" class="fancybox" rel="fancybox" title="08 place (view 1)">
        <img src="/images/08_place/08_4_tn.jpg" title="click to enlarge" alt="08 place (view 1)"/>
    </a>
</td>
<td>
    <a href="/images/08_place/08_1_en.jpg" class="fancybox" rel="fancybox" title="08 place (view 2)">
        <img src="/images/08_place/08_1_tn.jpg" title="click to enlarge" alt="08 place (view 2)"/>
    </a>
</td>
<td>
    <a href="/images/08_place/08_2_en.jpg" class="fancybox" rel="fancybox" title="08 place (view 3)">
        <img src="/images/08_place/08_2_tn.jpg" title="click to enlarge" alt="08 place (view 3)"/>
    </a>
</td>
</tr>

<tr align="center">
<td>
    <a href="/images/08_place/08_3_en.jpg" class="fancybox" rel="fancybox" title="08 place (view 4)">
        <img src="/images/08_place/08_3_tn.jpg" title="click to enlarge" alt="08 place (view 4)"/>
    </a>
</td>
<td>
    <a href="/images/08_place/08_7_en.jpg" class="fancybox" rel="fancybox" title="08 place (view 5)">
        <img src="/images/08_place/08_7_tn.jpg" title="click to enlarge" alt="08 place (view 5)"/>
    </a>
</td>
<td>
    <a href="/images/08_place/08_6_en.jpg" class="fancybox" rel="fancybox" title="08 place (view 6)">
        <img src="/images/08_place/08_6_tn.jpg" title="click to enlarge" alt="08 place (view 6)"/>
    </a>
</td>
<tr align="center">
<td>
    <a href="/images/08_place/08_5_en.jpg" class="fancybox" rel="fancybox" title="08 place (view 7)">
        <img src="/images/08_place/08_5_tn.jpg" title="click to enlarge" alt="08 place (view 7)"/>
    </a>
</td>
</tr>
</table>
</div>
</div>

<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() {
	jQuery("a.fancybox").fancybox({
        'transitionIn'  :   'fade',
        'transitionOut' :   'none',
        'speedIn'       :   1000, 
        'speedOut'      :   200, 
        'overlayShow'   :   true,
        'titlePosition' :   'outside'
    });
});
</script>
<?php
  include $inc_dir . 'analytics.html';
?>
</body>
</html>
