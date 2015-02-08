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

<h1 class="artist">60 hope street</h1>
<p class="artist">currently displaying the work of alex corina, lucy twigg and john sutherst.</p>
<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td>
    <a href="/images/60_hope_street/hs_1_en.jpg" class="fancybox" rel="fancybox" title="60 hope street (view 1)">
        <img src="/images/60_hope_street/hs_1_tn.jpg" title="click to enlarge" alt="60 hope street (view 1)" />
    </a>
</td>
<td>
    <a href="/images/60_hope_street/hs_2_en.jpg" class="fancybox" rel="fancybox" title="60 hope street (view 2)">
        <img src="/images/60_hope_street/hs_2_tn.jpg" title="click to enlarge" alt="60 hope street (view 2)" />
    </a>
</td>
<td>
    <a href="/images/60_hope_street/hs_3_en.jpg" class="fancybox" rel="fancybox" title="60 hope street (view 3)">
        <img src="/images/60_hope_street/hs_3_tn.jpg" title="click to enlarge" alt="60 hope street (view 3)" />
    </a>
</td>
</tr>
<tr align="center">
<td>
    <a href="/images/60_hope_street/hs_4_en.jpg" class="fancybox" rel="fancybox" title="60 hope street (view 4)">
        <img src="/images/60_hope_street/hs_4_tn.jpg" title="click to enlarge" alt="60 hope street (view 4)" />
    </a>
</td>
<td>
    <a href="/images/60_hope_street/hs_5_en.jpg" class="fancybox" rel="fancybox" title="60 hope street (view 5)">
        <img src="/images/60_hope_street/hs_5_tn.jpg" title="click to enlarge" alt="60 hope street (view 5)" />
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
