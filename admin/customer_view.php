<!doctype html>
<html lang="en">

<head>
  <?php
    include "admin_css.php";
    
  ?>
  <style>
    tr td{
      font-weight:600;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
      data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="../logout.php">Sign out</a>
      </li>
    </ul>
  </nav>

  
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer_view.php">
                <span data-feather="file"></span>
                Customer
              </a>
            </li>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="laptop_view.php">
                <span data-feather="users"></span>
                Laptop
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="smartphone_view.php">
                <span data-feather="users"></span>
              Smartphone
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="led_view.php">
                <span data-feather="users"></span>
              Led
              </a>
            </li> -->
           
            
          </ul>

         
        </div> 
      </nav>


      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <!-- <h1 class="h2">Dashboard</h1> -->
          <div class="btn-toolbar mb-2 mb-md-0">
            
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button> -->
          </div>
        </div>

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="container">
    <div class="row ">
    </div>
</div>
      <h2>Customer Details</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm table-light text-dark ">
            <thead>
              <tr >
                <th class="bg-dark text-light p-2">Id</th>
                <th class="bg-dark text-light p-2">Name</th>
                <th class="bg-dark text-light p-2">Email</th>
                <th class="bg-dark text-light p-2">Password</th>
                <th class="bg-dark text-light p-2">Mobile</th>
                <th class="bg-dark text-light p-2">Address</th>
               
              </tr>
            </thead>
            <tbody>
          <?php
                $con=mysqli_connect('localhost','root','','electro');
                $sel="select * from registration";
                $q1=mysqli_query($con,$sel);
                while($row=mysqli_fetch_assoc($q1))
                {

          ?>
              <tr>
              <td class="p-2"><?php echo $row['r_id']; ?></td>
                <td class="p-2"><?php echo $row['name']; ?></td>
                <td class="p-2"><?php echo $row['email']; ?></td>
                <td class="p-2"><?php echo $row['password']; ?></td>
                <td class="p-2"><?php echo $row['mobileno']; ?></td>
                <td class="p-2"><?php echo $row['address']; ?></td>
                <!--<td><a href="cust_edit.php"="<?php //echo $row['id']; ?>">Edit</a></td>-->
                
              </tr>
              <?php } ?>
              
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>


  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
    integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
    crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>