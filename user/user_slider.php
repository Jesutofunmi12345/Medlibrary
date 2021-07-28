<div class="col-sm-8">
  <div class="container">
  <div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/a.jpg" alt="library" height="200px">
        <div class="carousel-caption">
          <h3>Welcome to MedLibrary</h3>
          <p>The convenient and affordable online platform giving you easy access to a wide range of quality books</p>
        </div>
      </div>

      <div class="item">
        <img src="images/b.jpg" alt="library" height="200px">
        <div class="carousel-caption">
          <h3>Reliable books that satisfies Information Overload</h3>
          <p>Great Library Platform</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/a.jpg" alt="library"  height="200px">
        <div class="carousel-caption">
          <h3>Explore Our Resources</h3>
          <p>Register and Get Started.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/b.jpg" alt="library" height="200px">
        <div class="carousel-caption">
          <h3>Our Repository is easy to navigate</h3>
          <p>MedLibrary is a virtual library...Gives room for simplicity</p>
          <a href="register.php"style="background:none;">
              <button class="btn btn-danger pull-center"><i class="fa fa-print"></i>Get Started</button>
              </a>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>


            <div class="col-sm-4">
              <video class="video-size" width="300px" controls autoplay>
                <source src="upload/Benefits of Virtual Library.mp4" type="video/mp4">
              </video>
            </div>







    <style type="text/css">
        .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 100%;
    height: 400px;
    margin: auto;
  }

   .carousel-inner .item{
    letter-spacing:3px;
    font-family: verdana;

  }

 .carousel-inner > .item > .carousel-caption > h3{
    color: white;
    margin-bottom:100px;
    font-size: 50px;
  }

.container-fluid{
  height:70px;
  padding:10px;
  margin-top:5px;

}

#myCarousel .active .animation.animated-item-1 {
  -webkit-animation: fadeInUp 300ms linear 300ms both;
  -moz-animation: fadeInUp 300ms linear 300ms both;
  -o-animation: fadeInUp 300ms linear 300ms both;
  -ms-animation: fadeInUp 300ms linear 300ms both;
  animation: fadeInUp 300ms linear 300ms both;
}

#myCarousel .active .animation.animated-item-2 {
  -webkit-animation: fadeInUp 300ms linear 600ms both;
  -moz-animation: fadeInUp 300ms linear 600ms both;
  -o-animation: fadeInUp 300ms linear 600ms both;
  -ms-animation: fadeInUp 300ms linear 600ms both;
  animation: fadeInUp 300ms linear 600ms both;
}

.col-sm-4 .video-size{
      float:left;
      height:300px;
      width:300px;
      margin-left:30px;
      margin-top: 20px;
    }


  </style>


    <script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
  $(".item4").click(function(){
    $("#myCarousel").carousel(3);
  });
    
  // Enable Carousel Controls
  $(".left").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".right").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>


