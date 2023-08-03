<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .gradient-custom {
/* fallback for old browsers */
/* background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
/* background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)); */

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)) */
} 
.hi{
  background: rgb(63,94,251);
background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(0,0,0,1) 100%);
}
</style>
</head>

<body>
<section class="vh-100 gradient-custom">
  <div class="container py-2 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100" style="magin-top:10%;">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5 " >
        <div class="card bg-dark text-white hi" style="border-radius: 25px;border:none;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-0 pb-0">
<form action="panel" method="get">
              <!-- <h2 class="fw-bold mb-2 text-uppercase">Login</h2> -->
              <img src="imgs/SPSLOGO.webp" alt="">
              <h1>Admin Login</h1><br>

              <div class="form-outline form-white mb-2">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-2">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

             

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

              <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div> -->
              </form>

            <!-- </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>

</html>