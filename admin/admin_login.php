<?php

// include "header.php";
if(isset($_SESSION['admin']))
{
    header("location:dashboard.php");

}?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>

<?php
    include "dbname.php";
        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            if(empty($email))
            {
                ?>
                <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Email field required......
              </div>
              <?php
                //echo "<p class='error'>Email field Required</p> <br>";
            }
            else if(empty($password))
            {
                //echo "<p class='error'>password field Required</p> <br>";
                ?>
                <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                password field required......
              </div>
              <?php
            }
            else
            {
           // $pass=md5($pass);
            $sql="SELECT * FROM admin WHERE email = '$email'";
            $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) == 1)
        {
            $row=mysqli_fetch_assoc($res);
            if ( $row['password'] == $password)
            {
              
               $_SESSION['email'] = $row['email'];
               $_SESSION['name'] = $row['name'];
               //header("Location: index.php");
               //exit();
               echo '<script>window.location="dashboard.php"</script>';
              
           
              
           }
            else
             {
                   // echo "<p class='error'>Password Does not exist</p> <br>";
                   ?>
                <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                password does not match......
              </div>
              <?php
             }
            
           
        }
        else
        {
           // echo "<p class='error'>Email Does not match</p> <br>";
           ?>
           <div class="alert alert-danger alert-dismissible">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           Email does not exist.........
         </div>
         <?php
        }
    }
          
        
        }
    ?>
  <br>
    <center>
    <div class="wrapper">
        <h2>Admin Login</h2>
        <form action="<?php //echo $_SERVER['PHP_SELF'];?>" align="center" method="POST">
        <table>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" >
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" >
            </div>
            <div class="input-box button">
                <input type="Submit" name="submit" value="Login">
            </div>
        </table>
        </form>
    </div>
</center>
<br>



   
</body>


</html>
