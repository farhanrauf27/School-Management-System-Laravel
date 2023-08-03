<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <style>
        body{
            background:white url(../../assets/img/star-sky.jpg);
        }
        table{
            width:100%;
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
        src="{{asset('imgs/SPSLOGO.webp')}}"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Search form -->
      <div class="d-none d-md-flex input-group w-auto my-auto ">
       <h1 style="color: white; font-family:Poppins">Sadiq Public School</h1>
      </div>
</nav>





    <!-- <h1>Here You can add a record</h1> -->
    


    <div class="container" style="margin-top: 7%;
    width: 78%;
    margin-left: 18%;">
      <table class="table table-striped table-dark mt-5" id="tabel">
            <thead class=" bg-danger text-white fw-bold">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Roll no</th>
                <th>phone</th>
                <th>Date of birth</th>
                <th>Password</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($pread as $read)
                <tr>
                    <form action="delete" method="GET">
                        @csrf
                    <td> {{$read['id']}}</td>
                    <td> {{$read['name']}}</td>
                    <td> {{$read['email']}}</td>
                    <td> {{$read['class']}}</td>
                    <td> {{$read['roll']}}</td>
                    <td> {{$read['phone']}}</td>
                    <td> {{$read['bday']}}</td>
                    <td> {{$read['password']}}</td>
                    <td><a href = 'delete/{{ $read->id }}'>Delete</a></td>
                    
                   
                    
                </form>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#tabel').DataTable();
} );
    </script>
</body>
</html>