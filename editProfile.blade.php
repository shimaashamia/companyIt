<!DOCTYPE html>
<html>
<title>BoomToon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSS here -->
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="assets/css/bootstrap.css">
 <link rel="stylesheet" href="assets/css/font-awesome.css">
 <link rel="stylesheet" href="assets/css/normalize.css">
 <link rel="stylesheet" href="assets/css/editProfle.css">
<body class="w3-light-grey w3-content">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" id="mySidebar">
    <div class="w3-container">
      <div class="row">
        <h4 class="col-6 d-flex">
        <img src="assets/imgs/boomtoon.jpeg" width="21" class="pr-1">  
         BoomToon</h4>
        <h4 class="icon-right"><i class="col-6 fa fa-align-right"></i></h4>
      </div>
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a> 
      <img src="assets/imgs/comment_2.png" width="100" class="w3-round img-circle">
      <i class="fa fa-check" aria-hidden="true"></i>
      <h3 class="font-weight-normal">Arya Stark</h3>
      <p>University of MBA in Marketing</p>
  
    <div class="w3-bar-block">
      <div class="hov"><a href="portfolio.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa-nav fa fa-home fa-fw w3-margin-right"></i>Home</a></div>
      <a href="courses.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa-nav fa fa-th-large fa-fw w3-margin-right"></i>All Courses</a> 
      <a href="Profile.html" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa-nav fa fa-user-o fa-fw w3-margin-right"></i>Profile</a>
    </div>
    <div class="card-footer bg-transparent">     
        <a href="#" onclick="w3_close()"><i class="fa fa-sign-out"></i> <span class="text-sign-out ml-2"> Sign Out </span> </a>
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
  
 
      <!-- First Photo Grid-->

  <div class="w3-col m12">
    <div class="w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
      <div class="span6">
      <div class="col-md-2 pull-left">
      <button class="btn btn-default"><img src="assets/img/blog/comment_2.png" width= "100px;" class="w3-round"/></button>
      </div>
    </div>
    <div class="col-md-4 name">
        <h2>Arya Stark</h2>
        <p>
          <strong>University of MBA in Marketing</strong> 
        </p>
     </div>
      </div>
    </div>
    



  </div>



 <!-- Three Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third container rounded bg-white mt-5">
      <div class="row">
          
          <div class="col-md-12">
              <div class="p-3 py-5">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                      <div class="d-flex flex-row align-items-center back">
                          <h6>Edit Profile</h6>
                      </div>
                      <div class="text-right">
                        <button class="btn btn-primary profile-button" type="button">Save</button>
                        <button class="btn btn-default profile-cancel" type="button">Cancel</button>
                      </div>
                  </div>
                  <hr>
                  <div class="row mt-2">
                      <div class="col-md-6"><label for="username">Username</label><input type="text" class="form-control" placeholder="username" name="username" value="{{app('request')->get('username')}}"></div>
                      <div class="col-md-6"><label for="email">Email address</label><input type="email" class="form-control" name="email" value="{{app('request')->get('email')}}" placeholder="username@gmail.com"></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-6"><label for="country">Country</label> 
                      <select name="country" id="country" class="form-control">
                      <option value="" selected>Choose...</option>
                      <option>...</option>
                      </select></div>
                      <div class="col-md-6"><label for="universityid">University ID</label><input type="text" class="form-control" name="universityid"  value="{{app('request')->get('universityid')}}" placeholder="Phone number"></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-12"><label for="university">University</label>
                      <select name="university" id="university" class="form-control">
                      <option value="" selected>Choose...</option>
                      <option>...</option>
                      </select></div>
                  </div>
                  <div class="row mt-3">
                      <div class="col-md-6"><label for="college">The College</label>
                      <select name="college" id="college" class="form-control">
                      <option value="" selected>Choose...</option>
                      <option>...</option>
                      </select></div>
                      <div class="col-md-6"><label for="section">Section</label> 
                      <select name="section" id="section" class="form-control">
                      <option value="" selected>Choose...</option>
                      <option>...</option>
                      </select></div>
                  </div>
              </div>
          </div>
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
