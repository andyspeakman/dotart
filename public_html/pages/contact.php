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

<!-- Google Map Javascript: -->
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAALF4rUjusa__xNNm42iuFzxR6433bHXDwIpm3kkFQrlsrL9iUfBQ8VggWuE9emL6MbzcUbmF36_JsGw"
        type="text/javascript"></script>

<script type="text/javascript">
//<![CDATA[

  function load() {
    if (GBrowserIsCompatible()) {
      var map = new GMap2(document.getElementById("map"));
      var address=new GLatLng(53.406509,-2.991051);
      map.addControl(new GSmallMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(address, 16);

      var marker = new GMarker(address);
      map.addOverlay(marker);
      var txt = "<small><b>dot-art Gallery</b><br/>Find us just off Castle Street, between Oddbins and Martins Newsagents.</small>";
      GEvent.addListener(marker, "click", function() {marker.openInfoWindowHtml(txt, {maxWidth: 100} ) });
    }
  }
//]]>
</script>

</head>

<body class="light" onload="load()" onunload="GUnload()">

<div id="container">

<?php
  include $inc_dir . 'menunav.html';
?>

<div id="content">

<h1>contact us</h1>

<h3>phone</h3>

<p>Call us on <b>0345 0176660</b></p>

<h3>email</h3>

<p>For all enquiries relating to any of the services on offer please email us at <b><a href="mailto:info@dot-art.com">
info@dot-art.com</a></b></p>

<h3>social</h3>

<p>Follow dot-art on <b><a href="http://twitter.com/dotart">Twitter</a></b>. Like dot-art on <b><a href="http://www.facebook.com/dotart">Facebook</a></b>

<h3>visit</h3>

<p>Come and see us at the dot-art Gallery, 14 Queen Avenue, Castle Street, Liverpool, L2 4TX.
<a href="/pages/gallery.php"> details...</a></p>
<p>We are open 10am-6pm Monday to Saturday.</p>

<p>Feel free to contact us about anything you have seen on the site. We understand that you may prefer to speak to a real human being,
so we will always try to answer your call during our office hours. 
If you phone out of these hours, please leave a message and we will get back to you as soon as possible.</p>


<div id="map" style="width: 500px; height: 400px">
</div>



</div>

</div>

<?php
  include $inc_dir . 'analytics.html';
?>


</body>

</html>

