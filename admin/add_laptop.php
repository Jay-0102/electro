<?php include "header.php"; ?>

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
        <h2>Add Laptop</h2>
        

 <form action="" method="POST">
 <table>
            <div class="input-box">
                <input type="text"  name="id" placeholder="id">
            </div>

            <div class="input-box">
                <input type="text"  name="name" placeholder="Name" >
            </div>
           
            <div class="input-box">
                <input type="text" name="model" placeholder="Model" >
            </div>
            
           <!-- <div class="input-box">
                <input type="text" name="description" placeholder="Description" required>-->
            </div>
            <div class="input-box">
                <input type="number" name="price" placeholder="Price" >
            </div>
            <div class="input-box">

                <input type="file" name="image" accept="image/*" placeholder="Image" >
            </div>
           
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
</div>
</center>


<?php
// Database connection
 include "dbname.php";


if (isset($_POST['add'])) 
{
    $name=$_POST['name'];
	$model=$_POST['model'];
    $price=$_POST['price'];
    $img=$_POST['img'];
    //for file upload
$target_dir="img/"; //for image upload in which folder

$target_file=$target_dir . basename($_FILES["img"] ["name"]) ; //which file upload from form and where
//echo "$target_file";

$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES["img"] ["tmp_name"],$target_file))
{
    $img=$target_file;
    $sql="INSERT INTO laptop VALUES (NULL,'$name','$model',$price,'$image_name')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {

       
        $image = $target_file;
        // Insert data into the database
        $sql = "INSERT INTO laptop (name, model, price , img) VALUES ('$name', '$model', $price , '$image')";
        
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
        echo '<br><br><div class="alert alert-success alert-dismissible">'.
        '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
        'Error uploading the image...'.
      '</div>';
    } 

}
}
//update
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
                $sql="UPDATE laptop SET name='$name',model='$model',price=$price ,img='$image' WHERE lp_id=$id";
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
            $sql="UPDATE laptop SET name='$name', model='$model',price=$price WHERE lp_id=$id";
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
       $sql="DELETE FROM laptop WHERE lp_id = $id";
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