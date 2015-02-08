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

<h1 class="artist">cheviot</h1>

<table class="artist" width="100%">
<tr align="center">
<td>
    <a href="/images/cheviot/cheviot-2-en.jpg" class="fancybox" rel="fancybox" title="cheviot (view 2)">
        <img src="/images/cheviot/cheviot-2-tn.jpg" title="click to enlarge" alt="cheviot (view 2)"/>
    </a>
</td>
<td>
    <a href="/images/cheviot/cheviot-1-en.jpg" class="fancybox" rel="fancybox" title="cheviot (view 1)">
        <img src="/images/cheviot/cheviot-1-tn.jpg" title="click to enlarge" alt="cheviot (view 1)"/>
    </a>
</td>
<td>
    <a href="/images/cheviot/cheviot-3-en.jpg" class="fancybox" rel="fancybox" title="cheviot (view 3)">
        <img src="/images/cheviot/cheviot-3-tn.jpg" title="click to enlarge" alt="cheviot (view 3)"/>
    </a>
</td>
<td>
    <a href="/images/cheviot/cheviot-4-en.jpg" class="fancybox" rel="fancybox" title="cheviot (view 4)">
        <img src="/images/cheviot/cheviot-4-tn.jpg" title="click to enlarge" alt="cheviot (view 4)"/>
    </a>
</td>

</table>
<p class="artist">Click on any image to enlarge it</p>

<h3 class="artist">case study</h3>

<p class="artist">Cheviot Asset Management, one of the UK's largest independently owned discretionary investment firms, based in central 
London and Liverpool, are working with dot-art on a six-monthly rolling art rental program, showcasing the work of 
up to five local artists at a time, to create a dynamic, welcoming and productive working environment for staff and visitors alike.</p>

<p class="artist">Simon Walker, Partner at the Liverpool office of Cheviot, discusses working with dot-art:</p>

<ul class="artist">

<li class="artist"><b>What initially attracted you to working with dot-art?</b></li>
<li class="artist">Access to local artists and a flexible approach which matches our business needs.</li>

<li class="artist"><b>Did you look at any alternative options?</b></li>
<li class="artist">Yes, but they were not developed sufficiently or properly thought through.</li>

<li class="artist"><b>What did you hope to gain from the project?</b></li>
<li class="artist">Improve the working environment and support local talent.</li>

<li class="artist"><b>Do you feel this has been achieved?</b></li>
<li class="artist">Yes, certainly.</li>

<li class="artist"><b>How did you find the experience of working with dot-art?</b></li>
<li class="artist">Very positive. Responsive and efficient.</li>

<li class="artist"><b>Do you have any other comments?</b></li>
<li class="artist">I am very happy to recommend the services of dot-art to other businesses.</li>
</ul>

<p class="artist">If you would like to find out how dot-art could improve and enhance your office
or workplace, <a class="art_prices"href="mailto:enquiries@dot-art.com" title="email dot-art">get in touch,</a>
for a no obligation chat.</p>

<table class="artist" width="100%">
<tr align="center">


<td>
    <a href="/images/cheviot/cheviot-6-en.jpg" class="fancybox" rel="fancybox" title="cheviot (view 6)">
        <img src="/images/cheviot/cheviot-6-tn.jpg" title="click to enlarge" alt="cheviot (view 6)"/>
    </a>
</td>
<td>
    <a href="/images/cheviot/cheviot-5-en.jpg" class="fancybox" rel="fancybox" title="cheviot (view 5)">
        <img src="/images/cheviot/cheviot-5-tn.jpg" title="click to enlarge" alt="cheviot (view 5)"/>
    </a>
</td>
<td>
    <a href="/images/cheviot/cheviot-7-en.jpg" class="fancybox" rel="fancybox" title="cheviot (view 7)">
        <img src="/images/cheviot/cheviot-7-tn.jpg" title="click to enlarge" alt="cheviot (view 7)"/>
    </a>
</td>
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
