<?php

include ('header.php');
include ('construction.html');
?>


<body>

    <div class="container">

    <div class="blog-header">
          <h1 class="blog-title">Resources in Your Area</h1>
     </div>

<div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">

            <p>Using our find resources zip code application you can enter in your zip code below and find the community partners near you as well as their information such as their contact info, food services and their hours of operation. </p>
      </div>

      </div>
      
      </div><!-- /.row -->

<div class="row">
          <div style="width:350px; height:300px; color:white; background-color:#900; border:solid gray 2px; padding:10px" class="col-md-4">
            <h2>Enter your Zip Code to get started.</h2>
            <form>
              <input type="text" class="form-control" id="zipcode" placeholder="Enter Zip Code">
              <br>
              <button type="button" class="btn btn-primary btn-lg btn-block" button onClick="getPlace(); return false;">Find Resources Now</button>
            </form>
            </div>
    <div class="col-md-8">
          <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code"id="get-map-data"></a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(40.7242,-74.1726),mapTypeId: google.maps.MapTypeId.STREET};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
      </div></div>





      </div>
    
      
    
          
          
        



<?php

include ('footer.php');
?>

