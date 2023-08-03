{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* body {
    background: #121213;
} */

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    border: 1px solid red;
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}
.carousel-item {
  height: 10vh;
  min-height: 350px;
  justify-content: center;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg" style="background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(0,0,0,1) 100%); ">
        <div class="container-fluid" style="color: wheat">
          
          <a class="navbar-brand" href="#">  <img style="width: 30px;" src="imgs/SPSLOGO.webp" alt=""> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Grades
                </a>
                <ul class="dropdown-menu" style="color:white;">
                  <li><a class="dropdown-item" href="#">Class 6</a></li>
                  <li><a class="dropdown-item" href="#">Class 7</a></li>
                  <li><a class="dropdown-item" href="#">Class 8</a></li>
                  <li><a class="dropdown-item" href="#">Class 9</a></li>
                  <li><a class="dropdown-item" href="#">Class 10</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="teachers">Our Teachers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">About</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> 

      
      <!-- Gallery -->
  

<header style="padding: 1%">

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url(https://images-vod.wixmp.com/e2622a2a-c800-4528-a8fc-ce24e6174189/images/6dd8b5c3960141fb9080e90e3ed30ca1~mv2/v1/fill/w_863,h_485/file.png)">
        <div class="carousel-caption">
         
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://images-vod.wixmp.com/e2622a2a-c800-4528-a8fc-ce24e6174189/images/0d372a3fa68b4473ad4840d643dfae10f000/v1/fill/w_863,h_485,q_85,usm_0.66_1.00_0.01/file.webp')">
        <div class="carousel-caption">
          
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('https://images-vod.wixmp.com/e2622a2a-c800-4528-a8fc-ce24e6174189/images/ea7752c34cba40b2a37bcf1451b2504ef000/v1/fill/w_863,h_485,q_85,usm_0.66_1.00_0.01/file.webp')">
        <div class="carousel-caption">
         
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</header>

<!-- Page Content -->

        
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
/* Slider */
img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.containers {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}


  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top " style="padding: 0.5%;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="imgs/SPSLOGO.webp" alt="" style="width:50px; margin-top:-30%;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="subject">SUBJECT</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">TEACHERS</a></li>
        <li><a href="#pricing">GALLERY</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>SPS</h1> 
  <p>We specialize in Online Learning</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required >
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger"><a href="email"> Subscribe</a></button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About SPS</h2><br>
      <h4>His Highness Sir Sadiq Mohammad Khan Abbasi, the Ameer of Bahawalpur laid the foundation stone of Sadiq Public School on 4th March 1953; provided 450 acres of land and financed the entire construction. His Chief Minister, Makhdoomzada Hassan Mahmud, supervised the project.</h4><br>
      <p>At that time there were very few public schools - Aitchison College in Lahore and Lawrence College in Murree - and His Highness was determined to provide a public school education for students in the Bahawalpur region.

        ​
        
        On January 18th, 1954, His Highness Sir Sadiq Mohammad Khan Abbasi inaugurated the School with 37 students and 7 teachers. The initial structure consisted of the Main Academic Block, 2 Boarding Houses and 5 Staff Houses with Khan Anwar Sikandar Khan as the first Principal. Sadiq Public School began as an institution for girls and boys. In the next two years, one swimming pool, a hospital and 12 staff houses were built by the Public Works Department.
        In 1957, the first batches of students appeared, for Senior Cambridge. In 1958 students appeared for Matriculation in 1958 and in 1966 for Intermediate and in 1966 students appeared for Cambridge A Levels.
        In 1966 the admission of girls was stopped. A separate Girls' Section started in May 2003 with 9 girls and has since grown to more than 700 girls with more than 100 boarders commissioned August 2006. The new academic building for girls, donated by H.H. the Ruler of Abu Dhabi and President of UAE, was completed on July 25th, 2008 for girls classes (Class 6 to 12). Lessons for girls in the new building began on October 6th, 2008.
        Today there are four academic blocks, six boarding houses, more than 2500 students, 180 teachers, 61 staff houses, 100 staff quarters, 2 swimming pools, a library, a squash court, a gymnasium, a horse-riding club, an IT Centre, and an open-air amphitheatre..
        Sadiq Public School students gain admission to the world's best universities and make strong and valued contributions to their beloved Pakistan.
        ​</p>
      <br><button class="btn btn-default btn-lg" id="gt">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo" style="margin-top: 50%;margin-left:10%;"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span > <img src="imgs/SPSLOGO.webp" alt="" style="margin-top:20%; width:50%;margin-left:2%;"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> A Public-School education aims to develop the whole student. The Sadiq Public School curriculum has 5 broad elements: Discipline, Academics, Sports, Non-sport activities, and Community Service.
        English-medium means the language of instruction is English. </h4><br>
      <p><strong>VISION:</strong> A Public-School curriculum begins with self-discipline. Discipline simply means doing the right thing at the right time. Sadiq Public School students who walk beneath the gates every morning can look up to see the school motto: Do The Right, Fear No Man.
        Students study an academic curriculum that develops their literacy and numeracy, building towards proficiency in the Punjab Board’s Intermediate and Cambridge’s A Level qualifications. The purpose of the academic element of our curriculum is not simply to pass examinations, but to become a knowledgeable, critical thinker. Learning facts is not an education; learning to think critically, learning to learn, and developing a purposeful sense of inquiry is to be educated.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Teachers</h4>
      <p>We provide Highly Qualified Teachers</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>Secuirty</h4>
      <p>Security of your accounts and Campus</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Teachers</h2><br>
  {{-- <h4>What we have created</h4> --}}
  <div class="row text-center slideanim">
    <div class="col-sm-3">
      <div class="thumbnail" style="border:5px solid black;  color:#303030;">
        <img src="imgs/f1.jpg" alt="Paris" width="400" height="300">
        <p><strong>Muhammad Farhan</strong></p>
        <p>Maths Teacher</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail" style="  border:5px solid black; color:#303030;">
        <img src="imgs/a1.jpg" alt="New York" width="400" height="300">
        <p><strong>Arham Mazhar</strong></p>
        <p>Physics Teacher</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail" style="   border:5px solid black;color:#303030;">
        <img src="imgs/aq1.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Ahmed Qamar</strong></p>
        <p>Urdu Teacher</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail" style=" border:5px solid black;  color:#303030;">
        <img src="imgs/n1.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Muhammad Noman</strong></p>
        <p>Computer Teacher</p>
      </div>
    </div> 
  </div><br>

  <div class="row text-center slideanim">
    <div class="col-sm-3 ">
      <div class="thumbnail" style="  border:5px solid black; color:#303030;">
        <img src="imgs/h1.jpg" alt="San Francisco" width="400" height="300">
        <p ><strong>Hammad Hussain</strong></p>
        <p>English Teacher</p>
      </div>
    </div>
    <div class="col-sm-3 ">
      <div class="thumbnail" style=" border:5px solid black;  color:#303030;">
        <img src="imgs/si1.jpg" alt="San Francisco" width="400" height="300">
        <p ><strong>Suhaib Iqbal</strong></p>
        <p>Islamiyat  Teacher</p>
      </div>   
     </div>

      <div class="col-sm-3 ">
        <div class="thumbnail" style="color:#303030; border:5px solid black;"> 
          <img src="imgs/s1.jpg" alt="San Francisco" width="400" height="300">
          <p ><strong>Saim Abbas</strong></p>
          <p>Biology Teacher</p>
        </div>   
      </div>
      <div class="col-sm-3 ">
        <div class="thumbnail" style=" border:5px solid black;  color:#303030;">
          <img src="imgs/m1.jpg" alt="San Francisco" width="400" height="300">
          <p ><strong>Muhammad Moaaz</strong></p>
          <p>Pak Studies Teacher</p>
        </div>   
      </div>



  </div><br>
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Do the right, fear no man"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
{{-- <div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div> --}}

<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="containers" id="pricing">
  <div class="mySlides">
    <div class="numbertext">1 / 5</div>
    <img src="imgs/school.webp" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 5</div>
    <img src="imgs/grass.webp" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 5</div>
    <img src="imgs/overview.webp" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 5</div>
    <img src="imgs/lab.webp" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 5</div>
    <img src="imgs/ri.png" style="width:100%">
  </div>
    
  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="imgs/school.webp" style="width:100%" onclick="currentSlide(1)" alt="School">
    </div>
    <div class="column">
      <img class="demo cursor" src="imgs/grass.webp" style="width:100%" onclick="currentSlide(2)" alt="Acdemic Block">
    </div>
    <div class="column">
      <img class="demo cursor" src="imgs/overview.webp" style="width:100%" onclick="currentSlide(3)" alt="School Gate">
    </div>
    <div class="column">
      <img class="demo cursor" src="imgs/lab.webp" style="width:100%" onclick="currentSlide(4)" alt="School Gate 2">
    </div>
    <div class="column">
      <img class="demo cursor" src="imgs/ri.png" style="width:100%" onclick="currentSlide(5)" alt="Moto">
    </div>    
   
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bahawalpur, PK</p>
      <p><span class="glyphicon glyphicon-phone"></span> +92 345678910</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sps.contact@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form action="contact" method="GET">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comment" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
{{-- <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%"> --}}

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  {{-- <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p> --}}
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
