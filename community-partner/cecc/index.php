    <?php

include ('../../header.php');
?>

<style>

</style>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="IMG_0550.JPG" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Welcome to the CECC</h1>
              <p>provide IT solutions for non-profits</p>
              <p><a class="btn btn-lg btn-default" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="IMG_0531.JPG" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>IT Mentoring</h1>
              <p>mentorship for those who are not techinically inclined</p>
              <p><a class="btn btn-lg btn-default" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="IMG_0541.JPG" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Giving Back to the Community</h1>
              <p>a good place to become a good citizen</p>
              <p><a class="btn btn-lg btn-default" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <a href="#row1"><img class="img-circle" width="140px" height="140px" src="partnership_glyph.png" alt="Generic placeholder image"></a>
          <h2>Who' Involved</h2>
          <p>We are the NJIT Civic Engagment Computer Center a division of the Career Development Services</p>
          <p><a class="btn btn-primary" href="#row1" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="#row2"><img class="img-circle" width="140px" height="140px" src="website_glyph.png" alt="Generic placeholder image"></a>
          <h2>What We Do</h2>
          <p>We create websites for non-profit organizations who need to have an internet presence</p>
          <p><a class="btn btn-primary" href="#row2" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a href="#row3"><img class="img-circle" width="140px" height="140px" src="social_media_glyph.png" alt="Generic placeholder image"></a>
          <h2>Contact Us</h2>
          <p>You may be able to contact us by phone at (973) 596-5401 or by email.</p>
          <p><a class="btn btn-primary" href="#row3" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="row1">
        <div class="col-md-7">
          <h2 class="featurette-heading">Who We Are <span class="text-muted">Faculty and Students</span></h2>
          <p class="lead">As a service to the community, The Civic Engagement Computer Center at NJIT (CECC @NJIT) provides quality information technology (IT) solutions to non-profit organizations and schools in the northern NJ area. The IT sector is moving at a rapid pace, one which organizations must keep pace with in order to survive in today's technology driven environment. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="IMG_0763.JPG" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="row2">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="IMG_2360.JPG" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">What We Do <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">We provide various services such as web design, IT mentoring and computer training. Not only do we provide service to organizations we also to students of NJIT through senior capstone involvement and creating a great place or volunteering. </p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="row3">
        <div class="col-md-7">
          <h2 class="featurette-heading">Contact Us <span class="text-muted"></span></h2>
          
          
          <p class="lead">We want to hear from you. Your concerns comments and suggestions. </p>
          <p>
          
          <form role="form">    
		  <div class="form-group">
		    <label for="exampleInputEmail1">Full Name</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter full name.">
		  </div>
          <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter valid email address.">
		  </div>
          <div class="form-group">
		    <label for="exampleInputEmail1">Subject</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter the subject of your message.">
		  </div>
          <div class="form-group">
		    <label for="exampleInputEmail1">Message</label><br>
		    <textarea placeholder="Enter your message." cols="50" rows="10"> </textarea>
		  </div>
      <button type="button" class="btn btn-primary btn-lg">Send Message</button>	         
   
                </form></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="IMG_0771.JPG" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/docs.min.js"></script>
  </body>
</html>
