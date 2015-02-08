<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   include $inc_dir . 'signature.php';
?>

<!-- Head section -->

<head>
<?php
   include $inc_dir . 'head.html';
?>
<title>dot-art | Videos | Liverpool Art | Meet the Artist | Local Artist</title>
<meta name="keywords" lang="en" content="Meet the Artist, Artist Videos, Liverpool Art, Liverpool Art Gallery, Local artists, Local artist, Art to buy" />
<meta name="description" content="Liverpool city centre art gallery showing art by local artists. Request viewings of any piece of art from our extensive online catalogue." />
<link rel="stylesheet" href="/styles/jquery.fancybox-1.3.4.css" type="text/css" />
<script type="text/javascript" src="/scripts/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/scripts/jquery.fancybox-1.3.4.pack.js"></script>
</head>

<body class="light">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1>video</h1>

<p>Subscribe to our YouTube channel 
<a href="http://www.youtube.com/DotArtLiverpool">here.</a></p>

<h3>dot-art Pop Up Art Shop at the Bluecoat</h3>
<iframe width="640" height="396" src="//www.youtube.com/embed/7oDM3NxAnU8" frameborder="0" allowfullscreen></iframe>

<h3>dot-art Schools</h3>
<iframe width="640" height="396" src="http://www.baytvliverpool.com/vod/iframe/?vid=JBV527cd70c99492" frameborder="0" scrolling="no" style="overflow:hidden;"></iframe>

<h3>Meet the Artist - Roy Munday</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/41WdvH22C8o?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Nathan Pendlebury</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/s620awSyQ5g?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Richard Pryke</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/xZp9gZzZYqY?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Jazamin Sinclair</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/ZP-ZG9gBEaQ?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - John Walton</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/M0RL-UGAtls?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Susan Lee Brown</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/SxU12ji4rZg?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Catherine Evans-Jones</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/ljeX3WpZQVI?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Clare Ellis</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/AG-wJ4TmNAc?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Howard Gardener</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/mTiG50ecGZA?rel=0" frameborder="0" allowfullscreen></iframe>

<h3>Meet the Artist - Chris Turrell-Watts</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/Ghn0Ki8cUnA?rel=0" frameborder="0" allowfullscreen></iframe>


<h3>Liverpool Art Fair</h3>
<iframe width="640" height="360" src="http://www.youtube.com/embed/ZdS1igmKB78" frameborder="0" allowfullscreen></iframe>


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
