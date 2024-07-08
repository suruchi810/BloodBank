<link rel="stylesheet" href="css/styles.css">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="css/mycustom.css">
<body>
<!-- Navigation starts -->
<nav id="mainNav" class="navbar fixed-top navbar-default navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="./index.php">DONATETHEBLOOD</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
    </ul>
    
    <ul class="navbar-nav form-inline my-2 my-lg-0">
  
      <li class="nav-item">
 <?php  
 session_start();   
 if(isset($_SESSION['name'])){
        echo $_SESSION['name'];
 } 
        else {
          echo "something";
        }
        ?></a>
      </li>

    </ul>
  </div>
</nav>
<style type="text/css">
 
 .customNav{
 	/* position: absolute; */
 	/* top: 4px; */
 	/* left: 5px; */
 }	
.customNav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px; 
    margin-left:-30px;
    margin-top:-23px;   
}

.customNav li a {
    display: block;
    padding-top:5px;
    height: 40px;
    text-decoration: none;
    width:280px;
    color:black;
} 



 </style>

<div id="sidebar" class="sidebar">

<div class="customNav">
        <ul class="nav">

            <!-- <li class="active"><a href="index.php"><i class="fa fa-user" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>Dashboard</a></li>
            
            <li><a href="add_donor.php"><i class="fa fa-edit" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>Add Donors</a></li>
            <li><a href="donor_list.php"><i class="fa fa-edit" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>Donors</a></li>
            <li><a href="contact_info.php"><i class="fa fa-edit" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>change contactus Info</a></li>
            
            <li><a href="logout.php"><i class="fa fa-edit" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>Blood-Stock</a></li>
            <li><a href="user/logout.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>LogOut</a></li> -->
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];}else{echo "hello sir";}?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          
          <a class="dropdown-item" href="user/index.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>

          <a class="dropdown-item" href="user/update.php"><i class="fa fa-edit" aria-hidden="true"></i>
Update Profile</a>

          <a class="dropdown-item" href="user/logout.php">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>

Logout</a>
          </div>
      </li>
        </ul>

</div>
</div><!--/.sidebar-->
<script defer src="fontawesome/js/all.js"></script>