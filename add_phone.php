<?php include "header.php"; ?>
 <!-- Add laptop Form Starts -->
 <!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="./css/style2.css">
    <style>
        input[type=file]::file-selector-button {
        margin-right: ;
        border: none;
        margin-top: 5px;
        margin-left: 1px;
        margin-bottom: 5px;
        background: #D10024;
        padding: 10px 20px;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
        transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
        background: #D10024;
        }
    </style>
</head>

<body>
<br>
<center>
        <div class="wrapper">
        <h2>Add Phone</h2>
        

 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
 <table>
      <div class="input-box">
                <input type="text"  name="id" placeholder="Id">
            </div>
           <div class="input-box">
                <input type="text"  name="name" placeholder="Name">

            </div>
            <div class="input-box">
                <input type="text" name="model" placeholder="Model">
            </div>    
            <div class="input-box">
                <input type="number" name="price" placeholder="Price">
            </div>

            <div class="input-box">

                <input type="file" name="image" placeholder=" Main Image" required>
            </div>
            <div class="input-box">
                <input type="file" name="image1" placeholder="Image_1" required>
            </div>
            <div class="input-box">
                <input type="file" name="image2" placeholder="Image_2" required>
            </div>
            <div class="input-box">
                <input type="file" name="image3" placeholder="Image_3" required>
            </div>  
            <!-- <div class="input-box">
                <input type="text" name="desc" placeholder="Description" required>
            </div>
            <!--<div class="input-box">-->
          
            <!--</div>-->
                
            

            <div class="row">
            <div class="col-md-4">
                <div class="input-box button">
                    <input type="Submit" name="add" value="ADD">     
                </div>

            </div>
            <div class="col-md-4">
                <div class="input-box button">
                     <input type="Submit" name="edit" value="EDIT">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-box button">
                    <input type="Submit" name="delete" value="DELETE">
                </div>
            
            </div>
        </div>
           
        </table>
</form>
</div>
</center>
<?php
include "dbname.php";
if (isset($_POST['add'])) 
{
    $name=$_POST['name'];
	$model=$_POST['model'];
    $price=$_POST['price'];
    
    // File upload
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $target_file1 =$target_dir . basename($_FILES["image1"]["name1"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file && $_FILES["image1"]["tmp_name1"], $target_file1)) 
    {
        $image = $target_file;
        $img1  = $target_file1;
        // Insert data into the database

        $sql = "INSERT INTO phone (name, model, price , des , img) VALUES ('$name', '$model', $price ,  '$des' , '$image')";     
        if (mysqli_query($conn, $sql)) 
        {

            echo '<br><br><div class="alert alert-success alert-dismissible">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Product Inserted Successfully...'.
          '</div>';
            
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
    else 
    {
        echo "Error uploading the image.";
    }

        // File upload
     $target_file = $target_dir . basename($_FILES["image1"]["name"]);
    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) 
    {
        $image1 = $target_file;
        // Insert data into the database
        $sql = "INSERT INTO phone (name, model, price , des , img,img1) VALUES ('$name', '$model', $price ,  '$des' , '$image','$image1')";     
        if (mysqli_query($conn, $sql)) 
        {

            echo '<br><br><div class="alert alert-success alert-dismissible">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Product Inserted Successfully...'.
          '</div>';
            
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
    else 
    {
        echo "Error uploading the image.";
    }

    // File upload
    $target_file = $target_dir . basename($_FILES["image2"]["name"]);
    if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file)) 
    {
        $image2 = $target_file;
        // Insert data into the database
        $sql = "INSERT INTO phone (name, model, price , des , img,img1,img2) VALUES ('$name', '$model', $price ,  '$des' , '$image','$image1' , '$image2')";     
        if (mysqli_query($conn, $sql)) 
        {

            echo '<br><br><div class="alert alert-success alert-dismissible">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Product Inserted Successfully...'.
          '</div>';
            
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
    else 
    {
        echo "Error uploading the image.";
    }

    // File upload
    $target_file = $target_dir . basename($_FILES["image3"]["name"]);
    if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file)) 
    {
        $image3 = $target_file;
        // Insert data into the database
        $sql = "INSERT INTO phone (name, model, price , des , img,img1,img2,img3) VALUES ('$name', '$model', $price ,  '$des' , '$image','$image1' , '$image2' , '$image3')";     

        if (mysqli_query($conn, $sql)) 
        {
            echo '<br><br><div class="alert alert-success alert-dismissible">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Product Inserted Successfully...'.
          '</div>';
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
    else 
    {
        echo "Error uploading the image.";
    }
}

//Update 

//include "conn.php";
    if(isset($_POST['edit']))
    {
        if(isset($_POST['id']))
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $model=$_POST['model'];
            $price=$_POST['price'];

            //for update image
            //update data with image
            if(!empty($_FILES['image'] ['name']))
            {
                
                $target_dir="images/";
                $target_file=$target_dir.basename($_FILES['image']['name']);
                $imagetype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
                {
                    $image=$target_file;
                    $sql="UPDATE phone SET name='$name',model='$model',price=$price ,img='$image' WHERE p_id=$id";
                }
                else
                {
                    echo '<br><br><div class="alert alert-danger alert-dismissible">'.
                    '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                    'Error To New Upload Data...'.
                  '</div>';
                }
            }
            else
            {
                //update data without image
                $sql="UPDATE phone SET name='$name', model='$model',price=$price WHERE p_id=$id";
            }

            $res=mysqli_query($conn,$sql);
            if($res)
            {
                echo '<br><br><div class="alert alert-success alert-dismissible">'.
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                'Product Updated Successfully...'.
              '</div>';
            }
            else
            {
                echo '<br><br><div class="alert alert-danger alert-dismissible">'.
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                'Data Not Upadated...'.
              '</div>';
            }

           
        }
    }

 //Delete
 if(isset($_POST['delete']))
 {
    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
        $sql="DELETE FROM phone WHERE p_id = $id";
        $res=mysqli_query($conn,$sql);
    if($res)
        {
            echo '<br><br><div class="alert alert-success alert-dismissible">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Recorded Deleted...'.
          '</div>';
        }
    else
        {
            echo '<br><br><div class="alert alert-danger alert-dismissible">'.
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
                'Recorded Not Deleted...'.
              '</div>';
        }
    }
 }


mysqli_close($conn);
?>
<br><br>
<?php include "footer.php"; ?>
</body>
<html>