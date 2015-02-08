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

<h1 class="artist">the cornerstone gallery</h1>
<p class="artist">currently displaying the first dot-art group show</p>
<p class="artist">artists showing</p>

<table width="100%">
<tr align="center">
<td><p><a class="art_prices" href="/artist/alex-corina">alex corina</a></p></td>
<td><p><a class="art_prices" href="/artist/sharon-mutch">sharon mutch</a></p></td>
<td><p><a class="art_prices" href="/artist/greg-mcdonough">greg mcdonough</a></p></td>
<td><p><a class="art_prices" href="/artist/joanne-millea">joanne millea</a></p></td>
<td><p><a class="art_prices" href="/artist/peter-corbett">peter corbett</a></p></td>
<td><p><a class="art_prices" href="/artist/john-sutherst">john sutherst</a></p></td>
</tr>
</table>

<table class="artist" width="100%">
<tr align="center">
<td><p><a class="art_prices" href="/artist/parabhen-lad">parabhen lad</a></p></td>
<td><p><a class="art_prices" href="/artist/sarah-nicholson">sarah nicholson</a></p></td>
<td><p><a class="art_prices" href="/artist/lisa-ashcroft">lisa ashcroft</a></p></td>
<td><p class="artist">katy rees</p></td>
<td><p class="artist">josephine raven</p></td>
<td><p class="artist">roy munday</p></td>
</tr>
</table>

<p class="artist">click on any image to enlarge it</p>

<table class="artist" width="100%">
<tr align="center">
<td>
    <a href="/images/cornerstone/cornerstone_1_en.jpg" class="fancybox" rel="fancybox" title="cornerstone gallery (view 1)">
        <img src="/images/cornerstone/cornerstone_1_tn.jpg" title="click to enlarge" alt="cornerstone gallery (view 1)"/>
    </a>
</td>
<td>
    <a href="/images/cornerstone/cornerstone_2_en.jpg" class="fancybox" rel="fancybox" title="cornerstone gallery (view 2)">
        <img src="/images/cornerstone/cornerstone_2_tn.jpg" title="click to enlarge" alt="cornerstone gallery (view 2)"/>
    </a>
</td>
<td>
    <a href="/images/cornerstone/cornerstone_3_en.jpg" class="fancybox" rel="fancybox" title="cornerstone gallery (view 3)">
        <img src="/images/cornerstone/cornerstone_3_tn.jpg" title="click to enlarge" alt="cornerstone gallery (view 3)"/>
    </a>
</td>
</tr>
<tr align="center">
<td>
    <a href="/images/cornerstone/cornerstone_4_en.jpg" class="fancybox" rel="fancybox" title="cornerstone gallery (view 4)">
        <img src="/images/cornerstone/cornerstone_4_tn.jpg" title="click to enlarge" alt="cornerstone gallery (view 4)"/>
    </a>
</td>
<td>
    <a href="/images/cornerstone/cornerstone_5_en.jpg" class="fancybox" rel="fancybox" title="cornerstone gallery (view 5)">
        <img src="/images/cornerstone/cornerstone_5_tn.jpg" title="click to enlarge" alt="cornerstone gallery (view 5)"/>
    </a>
</td>
<td>
    <a href="/images/cornerstone/cornerstone_6_en.jpg" class="fancybox" rel="fancybox" title="cornerstone gallery (view 6)">
        <img src="/images/cornerstone/cornerstone_6_tn.jpg" title="click to enlarge" alt="cornerstone gallery (view 6)"/>
    </a>
</td>
</tr>
<tr align="center">
<td>
    <a href="/images/cornerstone/cornerstone_7_en.jpg" class="fancybox" rel="fancybox" title="cornerstone gallery (view 7)">
        <img src="/images/cornerstone/cornerstone_7_tn.jpg" title="click to enlarge" alt="cornerstone gallery (view 7)"/>
    </a>
</td>
<td>
    <p class="artist"><a class="art_prices" href="/pages/press.php">read about</a> what the press had to say about the cornerstone exhibtion</p>
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
