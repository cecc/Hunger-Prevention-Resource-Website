<?php

include ('header.php');
?>


<body>

    <div class="container">

    <div class="blog-header">
          <h1 class="blog-title">Hunger in New Jersey</h1>
     </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
          	<h1>The Need</h1>
          	<p>	In 2012, 49.0 million Americans lived in food-insecure households, 33.1 million 
          		adults and 15.9 million children. In the same year, 59.4 percent of food-insecure 
          		households participated in at least one of the three major Federal food assistance 
          		programs: Supplemental Nutrition Assistance Program (formerly Food Stamp Program), 
          		The National School Lunch Program, and the Special Supplemental Nutrition Program 
          		for Women, Infants, and Children. </p>
          		
          	<p>The greater Newark area is home to many disadvantaged families who can benefit from these programs offered by community-based organizations, but typically have no means to access the information.    In the context of community service, we are reminded that NJIT’s existence in Newark, the State of NJ and the national/global society offers a living laboratory for civic involvement that has a highly positive impact as an agent of change and digital influence.   The Civic Engagement Computer Center under the auspices of Career Development Services at NJIT has given a cyber face to many non-profit organizations in the State of NJ, and is primed to play a crucial role in connecting agencies and communities via the web.   This endeavor will change the tide for many non-profits and their clients. In our daily interaction with the many non-profits that we serve we are told that there is a growth in the number of households needing assistance.  Budgets shrink and community needs are increasing, making it more difficult for agencies to serve potential consumers.  </p>
          	
          	
          	<p>The Civic Engagement Computer Center at NJIT is a student-managed, resource of technical computer support through virtual volunteer projects for community-based organizations.  Established in 2002 with support from Lucent Technologies, Inc., the Center provides an avenue for NJIT students to connect their academic skills with civic engagement experience.  The Civic Engagement Computer Center has embraced a vision to produce technical solutions for web design, data management, and basic computer training needs for community-based organizations.   </p>
          	
          	<p>Career Development Services via its Civic Engagement Computer Center proposes to create a prototype comprehensive website that will link 10 -15 community partners to improve the dissemination of hunger prevention information to families and communities in need in the greater Newark area.  The awarding of additional funding will allow us to sustain our commitment to assist community-based organizations.  The student volunteers in the Civic Engagement Computer Center will create this template website that can be integrated into the partner agencies’ websites for the purpose of hunger prevention awareness.  The Civic Engagement Computer Center will also assist with the website conversion process to better connect the agencies with their clients and community. </p>
            
            
            <h1>Program Guidelines</h1>
            <p>The Civic Engagement Computer Center’s team of four students will complete the following deliverables: </p>
            	<ul>
            		<li>Collaboration with 10-15 community-based organizations to plan for the project</li>
            		<li>Provide the necessary information in an interactive system</li>
            		<li>Creation of a design document </li>
            		<li>Placement of finished website on a flash drive</li>
            		<li>Assistance in finding a host for the website, if necessary</li>
            		<li>Presentation and unveiling of the final product</li>
            	</ul
            
            <h1>Population to be Served</h1>
            <p>Ten to fifteen community-based organizations that serve communities in need in the Greater Newark area will be invited to participate.  Some of those partners will include Apostle’s House, Good Will Rescue Mission, New Hope Food Pantry, Bloomfield Church –On-The Green, and Newark Emergency Services for Families. </p>

        
      </div>

      </div>
      </div><!-- /.row -->

<div class="row">
          <div style="width:350px; height:300px; color:white; background-color:#900; border:solid gray 2px; padding:10px" class="col-md-4">
            <h2>Enter your Zip Code to get started.</h2>
            <form>
              <input type="text" class="form-control" id="zipcode" placeholder="Enter Zip Code">
              <br>
              <button type="button" class="btn btn-primary btn-lg btn-block" button onclick="getPlace(); return false;">Find Resources Now</button>
            </form>
            </div>
    <div class="col-md-8">
          <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;width:100%;"><div id="gmap_canvas" style="height:300px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code"id="get-map-data"></a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(40.7242,-74.1726),mapTypeId: google.maps.MapTypeId.STREET};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
      </div></div>





      </div>
    
          
          
        



<?php

include ('footer.php');
?>

