<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px; box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PORTFOLIO</b></h4>
    <p class="w3-text-grey">Template by W3.CSS</p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
<div class="w3-contaner">
  <!-- Header -->
  <header id="portfolio" style="background-color: white; margin-left: 10px;">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>My Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>Design</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Photos</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Art</button>
    </div>
    </div>
  </header>
  
 <!-- Middle Column -->
 <div class="all" style="width: 1600px;">
 <div class="w3-col m7">
    
    <div class="w3-row-padding">
      <div class="w3-col m12">
        <div class="w3-card w3-round w3-white">
          <div class="w3-container w3-padding">
            <h6 class="w3-opacity">Social Media template by w3.css</h6>
            <p contenteditable="true" class="w3-border w3-padding">Status: Feeling Blue</p>
            <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>  Post</button> 
          </div>
        </div>
      </div>
    </div>
    

    
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="/w3images/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">1 min</span>
      <h4>John Doe</h4><br>
      <hr class="w3-clear">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
          </div>
          <div class="w3-half">
            <img src="/w3images/nature.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
        </div>
      </div>
      <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
      <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
    </div>
    
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="/w3images/avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">16 min</span>
      <h4>Jane Doe</h4><br>
      <hr class="w3-clear">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
      <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
    </div>  
   
  <!-- End Middle Column -->
  </div>
  
  <!-- Right Column -->
  <div class="w3-col m2">
    <div class="w3-card w3-round w3-white w3-center">
      <div class="w3-container">
        <p>Upcoming Events:</p>
        <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
        <p><strong>Holiday</strong></p>
        <p>Friday 15:00</p>
        <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
      </div>
    </div>
  <!-- End Right Column -->
  </div>
  </div>

  </div>

  

<!-- End page content -->
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


<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <!-- CSS here -->
 <link rel="stylesheet" href="assets/css/editProfle.css">
    

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
    <a href="portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-home fa-fw w3-margin-right"></i>Home</a> 
    <a href="courses" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>All Courses</a> 
    <a href="profile" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-o fa-fw w3-margin-right"></i>Profile</a>
  </div>
 
  <div class="w3-panel w3-large">
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out"></i> Sign Out </a>
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

  <div class="w3-col m6" style="width: 750px">
    <div class="w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
      <div class="span6">
      <div class="pull-left" style="margin-right:15px">
          <img src="assets/img/blog/comment_2.png" class="w3-round"/>
      </div>

      <h2>Arya Stark</h2>
      <p>
        <strong>University of MBA in Marketing</strong> 
      </p>
    </div>
    
      </div>
    </div>
    


    <div class="w3-third w3-container w3-margin-bottom w3-col m12" style=" height:auto;">
    <form>
     <div class="form-group">
  <label class="col-md-4 control-label" for="submit">Edit Profile</label>
  <div class="col-md-6">
    <button id="submit" name="submit" class="btn btn-primary" value="1">Save</button>
    <button id="cancel" name="cancel" class="btn btn-default" value="1">Cancel</button>
  </div>
</div>
<hr>      
<div class="form-row">
  <div class="form-group col-md-6">
  <label for="username">Username</label>
  <input type="name" class="form-control" id="username" placeholder="username">
  </div>
  <div class="form-group col-md-6">
  <label for="email">Email address</label>
  <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
</div>
<div class="form-row">
  <div class="col-md-6 form-group ">
  <label for="username">Username</label>
  <input type="name" class="form-control" id="username" placeholder="username">
  </div>
  <div class="form-group col-md-6">
  <label for="email">Email address</label>
  <input type="email" class="form-control" id="email" placeholder="Email">
  </div>
</div>


<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>
      <select id="country" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  <div class="col-md-6">
  <label for="universityid">University ID</label>
  <input type="universityid" class="form-control" id="universityid" placeholder="universityid">
  </div>
</div> -->
<!-- <div class="form-group">
<label class="control-label" for="university">University</label>
      <select id="university" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
</div> -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="college">The College</label>
      <select id="college" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  <div class="col-md-6">
  <label class="col-md-4 control-label" for="section">Section</label>
      <select id="section" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
  </div>
</div> -->


<!-- <div class="form-group ">
  <label class="control-label col-md-6">Name</label>
  <input type="text" class="form-control" placeholder="first name" value="">
  <div class="col-md-6">
  <label class="control-label">Name</label>
  <input type="text" class="form-control" placeholder="first name" value="">
  </div>
</div>  

<div class="form-group  ">
  <label class="control-label col-md-12">Name</label>
  <input type="text" class="form-control" placeholder="first name" value="">
</div>    -->
<form>
  
  
 
</form>

  </div>
  </div>



 <!-- Three Photo Grid-->
  <div class="w3-row-padding">
    
  </div> 

  

 
  <!-- Contact Section -->
  <!-- <div class="w3-container w3-padding-large w3-grey">
    
    
  </div> -->

  
  

<!-- End page content -->
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

<div class="suggestion-box full-width">
			<div class="suggestions-list">
				<div class="suggestion-body">
        <h4>Find New Friends</h4>
        <hr>
					<img class="img-responsive img-circle" src="assets/img/blog/comment_2.png" alt="Image" data-insta_upload_ext_elem="1">
					<div class="name-box">
						<h4>Anthony McCartney</h4>
						<span>@antony</span>
					</div>
          <span><i class="fa">Add</i></span>
          <br>
          <br>
            <hr>
        </div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/blog/comment_2.png" alt="Image" data-insta_upload_ext_elem="1">
					<div class="name-box">
						<h4>Sean Coleman</h4>
						<span>@sean</span>
					</div>
					<span><i class="fa">Add</i></span>
          <!-- <i class="fa fa-plus"></i>< -->
          <br>
          <br>
            <hr>
        </div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/blog/comment_1.png" alt="Image" data-insta_upload_ext_elem="1">
					<div class="name-box">
						<h4>Francis Long</h4>
						<span>@francis</span>
					</div>
					<span><i class="fa">Add</i></span>
          <br>
          <br>
            <hr>
      	</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/blog/comment_1.png" alt="Image" data-insta_upload_ext_elem="1">
					<div class="name-box">
						<h4>Vanessa Wells</h4>
						<span>@vannessa</span>
					</div>
          <span><i class="fa">Add</i></span>
          <br>
          <br>
            <hr>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/blog/comment_3.png" alt="Image" data-insta_upload_ext_elem="1">
					<div class="name-box">
						<h4>Anna Morgan</h4>
            <span>@anna</span>
					</div>
          <span><i class="fa">Add</i></span>
          <br>
          <br>
            <hr>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/blog/comment_3.png" alt="Image" data-insta_upload_ext_elem="1">
					<div class="name-box">
						<h4>Clifford Graham</h4>
            <span>@clifford</span>
					</div>
					<span><i class="fa">Add</i></span>
				</div>
			</div><!--suggestions-list end-->
        </div>