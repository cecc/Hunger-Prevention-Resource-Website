<?php

include ('header.php');
include ('construction.html');
?>


<body>

    <div class="container">

    <div class="blog-header">
          <h1 class="blog-title">Ways To Give Back</h1>
     </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">

            <h2> Volunteer </h2>

            <p>Find the nearest food pantry or food service location using our find resources using your zip code. Once you have decided on which food pantry or food service location suits you best you can now use their contact information to initiate your service.</p>

            <h2> Donate </h3>
<p>Find the nearest food pantry or food service location using our find resources using your zip code. Now that you have the information on the community partner closest to you now you can gather all of your donations, whether they are monetary or food, and head to the closest community partner to you. </p>

            <h2> Advocate </h2>

<p>Spread the word of this end hunger project to your local officals, next door neighbors, and even your nearest community center. Through advocation we hope to gain new community partners who are determined to join our cause. </p>
        
      </div>

      </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
           
            <div class="sidebar-module">
              <span class="glyphicon glyphicon-globe" aria-hidden="true" style="font-size:110px;"></span>
            </div>
            <div class="sidebar-module">
              <span class="glyphicon glyphicon-credit-card" aria-hidden="true" style="font-size:110px;"></span>
          </div>
          <div class="sidebar-module">
              <span class="glyphicon glyphicon-bullhorn" aria-hidden="true" style="font-size:100px"></span>
          </div>
        </div>
      </div><!-- /.row -->

<div class="row">
          <div style="width:350px; height:300px; color:white; background-color:#900; border:solid gray 2px; padding:10px" class="col-md-4">
            <h2>Enter your Zip Code to get started.</h2>
            <form action="community-partner/">
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

