<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- CSS here -->
 <link rel="stylesheet" href="assets/css/courses.css">
    

<body class="w3-light-grey w3-content">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" id="mySidebar"><br>
  <div class="w3-container">
  <h4>BoomToon</h4>
  

    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
   
    <img src="assets/img/blog/comment_2.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Arya Stark</b></h4>
    <p class="w3-text-grey">University of MBA in Marketing</p>
  </div>
  <div class="w3-bar-block">
    <a href="portfolio.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a> 
    <a href="courses.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>All Courses</a> 
    <a href="Profile.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-o fa-fw w3-margin-right"></i>Profile</a>
  </div>
  <!-- <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div> -->
  <div class="w3-panel w3-large">
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out"></i><span> Sign Out </span> </a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main">

  <!-- Header -->
  <header id="portfolio">
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  <i class="fa fa-toggle-off"></i>
  <i class="fa fa-bell-o"></i>
  <i class="fa fa-question-circle-o"></i>

    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <!-- <h1><b>My Portfolio</b></h1> -->
    <div class="search-bar">
    <span class="fa fa-search form-control-feedback"></span>
    <input class="search" type="text" placeholder="Search" required/>
  <div class="search-icon"></div>
</div>

    </div>
  </header>
 <div class= "title">
  <h2>All Course</h2>
  <span class="w3-text-grey"> 5 owned </span>
</div>
 <!-- First Photo Grid-->
 <div class="w3-row-padding">
    <a href="completedCourse" class="link">
      <div class="w3-third w3-container w3-margin-bottom">
      <img src="/assets/img/gallery/featured5.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="padding-bottom: 30px;">
        <p><b>Accounting 1</b></p>
        <p>Author is Name |8 Chapter | 50 mins.</p>
        <p>Teacher Name</p>
        <a href="#" class="completedCourse">Completed</a>
      </div>
    </div>
    </a>
    <a href="completedCourse" class="link">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/assets/img/gallery/featured6.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="padding-bottom: 30px;">
        <p><b>Accounting 1</b></p>
        <p>Author is Name |8 Chapter | 50 mins.</p>
        <p>Teacher Name</p>      
        <a href="#" class="completedCourse">Completed</a>
      </div>
    </div>
    </a>
    <a href="completedCourse" class="link">
    <div class="w3-third w3-container">
      <img src="/assets/img/gallery/featured4.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="padding-bottom: 30px;">
        <p><b>Accounting 1</b></p>
        <p>Author is Name |8 Chapter | 50 mins.</p>
        <p>Teacher Name</p>           
        <a href="#" class="completedCourse">Completed</a>
      </div>
    </div>
    </a>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/assets/img/gallery/topic1.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Accounting 1</b></p>
        <p>Author is Name |8 Chapter | 50 mins.</p>
        <p>Teacher Name</p>       
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/assets/img/gallery/featured4.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Accounting 1</b></p>
        <p>Author is Name |8 Chapter | 50 mins.</p>
        <p>Teacher Name</p> 
      </div>
    </div>
    
  </div>



  
  

</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
