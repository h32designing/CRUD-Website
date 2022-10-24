<?php include 'Connection.php'; ?>

<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    $Description = $_POST['desctiption'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];
    $Total  = $Price * $Quantity;

    $FileProp = $_FILES['uploaded'];
         echo '<pre>';
         print_r($FileProp);
         echo '</pre>';
    $FileName = $_FILES['uploaded']['name'];
    $FileType = $_FILES['uploaded']['type'];
    $FileTempLoc = $_FILES['uploaded']['tmp_name'];
    $FileSize = $_FILES['uploaded']['size'];

    $folder = 'images/';
    echo $FileTempLoc;
    $folder = $folder . $FileName;

    $query = " insert into product(name, description, price, quantity, total, image) values ('$Name','$Description','$Price','$Quantity','$Total','$folder')";

    $res = mysqli_query($con, $query) or die("Query Failed");

    if ($res) {
        echo "<script> alert('Data Inserted');window.location.href='ViewData.php';</script>";
        move_uploaded_file($FileTempLoc, $folder);
    }
     else {
        echo "<script> alert('Data Insertion Failed'); </script>";
    }
} ?>


<?php 
if (isset($_POST['upd'])) 
{
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Description = $_POST['desctiption'];
    $Price = $_POST['price'];
    $Quantity = $_POST['quantity'];
    $Total  = $Price * $Quantity;


    $FileProp = $_FILES['uploaded'];
         echo '<pre>';
         print_r($FileProp);
         echo '</pre>';
    $FileName = $_FILES['uploaded']['name'];
    $FileType = $_FILES['uploaded']['type'];
    $FileTempLoc = $_FILES['uploaded']['tmp_name'];
    $FileSize = $_FILES['uploaded']['size'];

    $folder = 'images/';
    echo $FileTempLoc;
    $folder = $folder . $FileName;

    if($FileName != "")
    {
        $query = "update product set 
        name = '$Name',
        description	= '$Description',
        price = '$Price',
        quantity = '$Quantity',
        total = '$Total',	
        image = '$folder'
        where id = '$Id'";
    
        $res = mysqli_query($con, $query) or die("Query Failed");
    
        if ($res) {
            echo "<script> alert('Data Inserted');window.location.href='ViewData.php';</script>";
            move_uploaded_file($FileTempLoc, $folder);
        }
         else {
            echo "<script> alert('Data Insertion Failed');window.location.href='ViewData.php';</script>";
        }

    }
    else
    {

    $query = "update product set 
    name = '$Name',
    description	= '$Description',
    price = '$Price',
    quantity = '$Quantity',
    total = '$Total'
    where id = '$Id'";

    $res = mysqli_query($con, $query) or die("Query Failed");

    if ($res) {
        echo "<script> alert('Data Inserted');</script>";
        move_uploaded_file($FileTempLoc, $folder);
    }
     else {
        echo "<script> alert('Data Insertion Failed'); </script>";
    }
    }

    
} ?>