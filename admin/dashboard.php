<!doctype html>
<html lang="en">

<head>
  <?php
    include "admin_css.php";
  ?>
  <?php include "dbname.php";?>
  
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Electronic Devices</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
      data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
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
            <li class="nav-item">
              <a class="nav-link" href="laptop_view.php">
                <span data-feather="users"></span>
                Laptop
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="smartphone_view.php">
                <span data-feather="users"></span>
              Smartphone
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="led_view.php">
                <span data-feather="users"></span>
              Led
              </a>
            </li>
           
            
          </ul>

         
        </div> 
      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
            </div>
          
          </div>
        </div>

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="container">
    <div class="row ">
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-cherry">
                <div class="card-statistic-3 p-4">
                  
                    <div class="mb-4">
                        <h5 class="card-title mb-0">LAPTOP</h5>
                       
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                          
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                        <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM laptop";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                       
                    ?>
                        </div>
                        <h1><?php echo $count; ?></h1>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                   
                    <div class="mb-4">
                        <h5 class="card-title mb-0">SMARTPHONE</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                              
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                        <?php 
                        //Sql Query 
                        $sql1 = "SELECT * FROM phone";
                        //Execute Query
                        $res1 = mysqli_query($conn, $sql1);
                        //Count Rows
                        $count = mysqli_num_rows($res1);
                       
                    ?>
                        </div>
                        <h1><?php echo $count; ?></h1>
                        </div>
                    </div>
                    
                       
                    </div>
                </div>

                
        <div class="col-xl-6 col-lg-6">
            <div class="card l-bg-blue-dark">
                <div class="card-statistic-3 p-4">
                   
                    <div class="mb-4">
                        <h5 class="card-title mb-0">LED</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                              
                            </h2>
                        </div>
                        <div class="col-4 text-right">
                        <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM led";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count = mysqli_num_rows($res2);
                       
                    ?>
                        </div>
                        <h1><?php echo $count; ?></h1>
                        </div>
                    </div>
                    
                       
                    </div>
                </div>

            </div>
        </div>
   
          <tbody>

 

             
              
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