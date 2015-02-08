<?php
   $inc_dir = $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR;
   include $inc_dir . 'signature.php';
?>

<!-- Head section -->

<head>
<?php
   include $inc_dir . 'head.html';
   
?>

<title>dot-art | Liverpool Art Gallery | Corporate Art | Rent Art | Case Study</title>
<meta name="keywords" lang="en" content="Liverpool Art, Liverpool Art Gallery, Local artists, Corporate art, Rent art" />
<meta name="description" content="Liverpool city centre art gallery showing art by local artists. Corporate Art Services include art rental, commissioned art and consultancy." />

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

<h1 class="artist">barnett waddingham</h1>

<table class="artist" width="100%">
<tr align="center">
<td>
    <a href="/images/barnett_waddingham/bw_2_en.jpg" class="fancybox" rel="fancybox" title="barnett waddingham interiors (view 2)">
        <img src="/images/barnett_waddingham/bw_2_tn.jpg" title="click to enlarge" alt="barnett waddingham interiors (view 2)"/>
    </a>
</td>
<td>
    <a href="/images/barnett_waddingham/bw_1_en.jpg" class="fancybox" rel="fancybox" title="barnett waddingham interiors (view 1)">
        <img src="/images/barnett_waddingham/bw_1_tn.jpg" title="click to enlarge" alt="barnett waddingham interiors (view 1)"/>
    </a>
</td>
<td>
    <a href="/images/barnett_waddingham/bw_3_en.jpg" class="fancybox" rel="fancybox" title="barnett waddingham interiors (view 3)">
        <img src="/images/barnett_waddingham/bw_3_tn.jpg" title="click to enlarge" alt="barnett waddingham interiors (view 3)"/>  
    </a>
</td>

<td>
    <a href="/images/barnett_waddingham/bw_4_en.jpg" class="fancybox" rel="fancybox" title="barnett waddingham interiors (view 4)">
        <img src="/images/barnett_waddingham/bw_4_tn.jpg" title="click to enlarge" alt="barnett waddingham interiors (view 4)"/>
    </a>
</td>
<td>
    <a href="/images/barnett_waddingham/bw_5_en.jpg" class="fancybox" rel="fancybox" title="barnett waddingham interiors (view 5)">
        <img src="/images/barnett_waddingham/bw_5_tn.jpg" title="click to enlarge" alt="barnett waddingham interiors (view 5)"/>
    </a>
</td>
<td>

</tr>

</table>
<p class="artist">Click on any image to enlarge it</p>

<h3 class="artist">case study</h3>

<p class="artist">Andrew Roberts from Port of Liverpool based firm Barnett Waddingham, discusses working with dot-art:</p>

<ul class="artist">

<li class="artist"><b>What initially attracted you to working with dot-art?</b></li>
<li class="artist">I had heard of dot-art, and have a personal interest in art myself. When Barnett Waddingham moved to 
new premises within The Port of Liverpool Building, I was responsible for sourcing art work for the offices and wanted to 
do this locally, so contacted Lucy at dot-art.</li>

<li class="artist"><b>Did you look at any alternative options?</b></li>
<li class="artist">Yes, several other art suppliers and alternative sources, none of which had	work of the quality 
or type we were looking for or were able to provide a full,	dedicated service for businesses.</li>

<li class="artist"><b>What did you hope to gain from the project?</b></li>
<li class="artist">As well the obvious aesthetic concerns, we were keen to ensure our art	work was sourced from the local area. 
In addition, we were looking for guidance with selection of suitable work.</li>

<li class="artist"><b>Do you feel this has been achieved?</b></li>
<li class="artist">Yes, certainly.</li>

<li class="artist"><b>How did you find the experience of working with dot-art?</b></li>
<li class="artist">I found dot-art to be very understanding of our needs, patient while we 
finalised our decisions, and able to fulfill our objectives within our set	budget.</li>

<li class="artist"><b>What additional benefits have you seen as a result of the project?</b></li>
<li class="artist">We are much happier in hosting our regular seminars now we have	interesting art work 
to talk about in between speakers.</li>

<li class="artist"><b>Do you have any other comments?</b></li>
<li class="artist">Lucy and her team were very patient with our changing needs and requirements and we would be 
happy to recommend their products and services.</li>
</ul>

<p class="artist">If you would like to find out how dot-art could improve and enhance your office
or workplace, <a class="art_prices"href="mailto:enquiries@dot-art.com" title="email dot-art">get in touch,</a>
for a no obligation chat.</p>
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
