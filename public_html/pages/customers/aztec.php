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

<body class="dark">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1 class="artist">aztec interiors</h1>
<p class="artist">dot-art is working in partnership with
<a class="art_prices" href="http://www.aztec-interiors.co.uk">aztec interiors</a>, a liverpool based firm who
specialise in the design and build of interiors and professional office furnishing. currently displaying work by
<a class="art_prices" href="/artist/simon-flatley">simon flatley,</a>
<a class="art_prices" href="/artist/jason-jones">jason jones</a> and
<a class="art_prices" href="/artist/greg-mcdonough">greg mcdonough.</a></p>

<p class="artist">if you would like to find out how dot-art could improve and enhance your office
or workplace, <a class="art_prices"href="mailto:lucy.byrne@dot-art.co.uk" title="email dot-art">get in touch,</a>
for a no obligation chat.</p>

<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td>
    <a href="/images/aztec/aztec_1_en.jpg" class="fancybox" rel="fancybox" title="aztec interiors (view 1)">
        <img src="/images/aztec/aztec_1_tn.jpg" title="click to enlarge" alt="aztec interiors (view 1)"/>
    </a>
</td>
<td>
    <a href="/images/aztec/aztec_2_en.jpg" class="fancybox" rel="fancybox" title="aztec interiors (view 2)">
        <img src="/images/aztec/aztec_2_tn.jpg" title="click to enlarge" alt="aztec interiors (view 2)"/>
    </a>
</td>
<td>
    <a href="/images/aztec/aztec_3_en.jpg" class="fancybox" rel="fancybox" title="aztec interiors (view 3)">
        <img src="/images/aztec/aztec_3_tn.jpg" title="click to enlarge" alt="aztec interiors (view 3)"/>
    </a>
</td>
</tr>
<tr align="center">
<td>
    <a href="/images/aztec/aztec_4_en.jpg" class="fancybox" rel="fancybox" title="aztec interiors (view 4)">
        <img src="/images/aztec/aztec_4_tn.jpg" title="click to enlarge" alt="aztec interiors (view 4)"/>
    </a>
</td>
<td>
    <a href="/images/aztec/aztec_5_en.jpg" class="fancybox" rel="fancybox" title="aztec interiors (view 5)">
        <img src="/images/aztec/aztec_5_tn.jpg" title="click to enlarge" alt="aztec interiors (view 5)"/>
    </a>
</td>
<td>
    <a href="/images/aztec/aztec_6_en.jpg" class="fancybox" rel="fancybox" title="aztec interiors (view 6)">
        <img src="/images/aztec/aztec_6_tn.jpg" title="click to enlarge" alt="aztec interiors (view 6)"/>
    </a>
</td>
<tr align="center">
<td>
    <a href="/images/aztec/aztec_7_en.jpg" class="fancybox" rel="fancybox" title="aztec interiors (view 7)">
        <img src="/images/aztec/aztec_7_tn.jpg" title="click to enlarge" alt="aztec interiors (view 7)"/>
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
