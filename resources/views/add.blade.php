<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .login-dark {
  height:730px;
  background:#white url(../../assets/img/star-sky.jpg);
  background-size:cover;
  position:relative;
}

.login-dark form {
  max-width:320px;
  width:90%;
  background-color:#1e2833;
  padding:40px;
  border-radius:4px;
  transform:translate(-50%, -50%);
  position:absolute;
  top:50%;
  left:50%;
  color:#fff;
  box-shadow:3px 3px 4px rgba(0,0,0,0.2);
}

.login-dark .illustration {
  text-align:center;
  padding:15px 0 20px;
  font-size:100px;
  color:#2980ef;
}

.login-dark form .form-control {
  background:none;
  border:none;
  border-bottom:1px solid #434a52;
  border-radius:0;
  box-shadow:none;
  outline:none;
  color:inherit;
}

.login-dark form .btn-primary {
  background:#214a80;
  border:none;
  border-radius:4px;
  padding:11px;
  box-shadow:none;
  margin-top:26px;
  text-shadow:none;
  outline:none;
}

.login-dark form .btn-primary:hover, .login-dark form .btn-primary:active {
  background:#214a80;
  outline:none;
}

.login-dark form .forgot {
  display:block;
  text-align:center;
  font-size:12px;
  color:#6f7a85;
  opacity:0.9;
  text-decoration:none;
}

.login-dark form .forgot:hover, .login-dark form .forgot:active {
  opacity:1;
  text-decoration:none;
}

.login-dark form .btn-primary:active {
  transform:translateY(1px);
}
body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
.gradient-custom {
/* fallback for old browsers */
/* background: #6a11cb; */

/* Chrome 10-25, Safari 5.1-6 */
/* background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)); */

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)) */
}
</style>
</head>

<body>

<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="adminpanel"
          class="list-group-item list-group-item-action py-2 ripple active"
          aria-current="true"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Admin Login</span>
        </a><br>
        <a href="login" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>User Login</span>
        </a><br>
        <a href="add" class="list-group-item list-group-item-action py-2 ripple active"
          ><i class="fas fa-lock fa-fw me-3"></i><span>Add a Student</span></a
        ><br>
        <a href="read" class="list-group-item list-group-item-action py-2 ripple active"
        ><i class="fas fa-lock fa-fw me-3"></i><span>Check Student</span></a
      ><br>
        <a href="delete" class="list-group-item list-group-item-action py-2 ripple active"
          ><i class="fas fa-chart-line fa-fw me-3"></i><span>Delete a Student</span></a
        ><br>
        <a href="update" class="list-group-item list-group-item-action py-2 ripple active" >
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Update Student</span>
        </a><br>
        
        <a href="teachers" class="list-group-item list-group-item-action py-2 ripple active"
          ><i class="fas fa-globe fa-fw me-3"></i><span>Teachers</span></a
        ><br>
        <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-building fa-fw me-3"></i><span>Partners</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
        > -->
      </div>
    </div>
</nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid d-flex align-items-center justify-content-center w-100 h-100">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img
          src="imgs/SPSLOGO.webp"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Search form -->
      <div class="d-none d-md-flex input-group w-auto my-auto ">
       <h1 style="color: white; font-family:Poppins" >Sadiq Public School</h1>
      </div>
</nav>
<!-- g -->
<!-- 
    <div class="login-dark ">
        <form action="create" method="GET">
            <h2 class="sr-only ">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Enter your name" ></div>
            <div class="form-group"><input class="form-control" type="text" name="class" placeholder="Enter your Class"></div>
            <div class="form-group"><input class="form-control" type="text" name="roll" placeholder="Enter your Roll number" ></div>            
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" ></div>
            <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Enter your Phone number"></div>
            
            <div class="form-group"><input class="form-control" type="date" name="bday" placeholder="Enter your name" autocomplete="off"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Add</button></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script> -->
    <section class="vh-100 gradient-custom">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5" style="    margin-top: 7%;
      ">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-0 mt-md-0 pb-5">
<form action="create" method="get" enctype="multipart/form-data">
              <!-- <h2 class="fw-bold mb-2 text-uppercase">Login</h2> -->
              <img src="imgs/SPSLOGO.webp" alt="">
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" class="form-control form-control-lg" name="name"/>
                <label class="form-label" for="typeEmailX">Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                {{-- <input type="text" id="typeEmailX" class="form-control form-control-lg" name="class"/> --}}
                <select name="class"  class="form-control form-control-lg" id="hey">
                  <option value=""></option>
                  <option value="11">1st Year</option>
                  <option value="12">2nd Year</option>
                </select>
                <label class="form-label" for="typeEmailX">Class</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" class="form-control form-control-lg" name="roll"/>
                <label class="form-label" for="typeEmailX">Roll Number</label>
              </div>

              <!-- <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                <label class="form-label" for="typeEmailX">Email</label>
              </div> -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" class="form-control form-control-lg" name="phone"/>
                <label class="form-label" for="typeEmailX">Phone</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="date" id="typeEmailX" class="form-control form-control-lg" name="bday"/>
                <label class="form-label" for="typeEmailX">Date of Birth</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="file" id="typePasswordX" class="form-control form-control-lg" name="img" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">ADD</button>

             
              </form>

           

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>