<?php

include ('header.php');
include ('construction.html');
?>


<body>

    <div class="container">

    <div class="blog-header">
          <h1 class="blog-title">Hunger in New Jersey</h1>
     </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">

            <p>In 2012, 49.0 million Americans lived in food-insecure households, 33.1 million adults and 15.9 million children.  In the same year, 59.4 percent of food-insecure households participated in at least one of the three major Federal food assistance programs: Supplemental Nutrition Assistance Program (formerly Food Stamp Program), The National School Lunch Program, and the Special Supplemental Nutrition Program for Women, Infants, and Children. 
            </p>
            <p>The photo to the right depicts the food insecurities rates in particular counties in the northern NJ area. The food insecurities rates shows the lack of access to enough food for an active, healthy life for all household members and limited or uncertain availability of nutritionally adequate foods. As shown in the diagram the higher the food insecurities the darker the shade of red with Essex County having the highest food insecurity rate in the northern NJ area.</p>
      </div>

      </div>
      <div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="margin-left: .5%;">
        <div class="sidebar-module">
          <h2 style="text-align:center;"> NJ Meal Gap</h2>
          <img src="images/NJ_counties.png" width="350px" height="450px"/>
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

