<!doctype html>
<html lang="en">
  <head>
  	<title>Table 06</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style3.css">

	</head>

    <?php include 'connection.php'; ?>
   

    <?php
$querys = 'select * from product';
if (isset($_GET['srch'])) {
    $search = $_GET['search'];
    $querys = "select * from product where  name like '%$search%' or description like '%$search%' 
    or price like  '%$search%' or quantity like '%$search%' ";
}
($res = mysqli_query($con, $querys)) or die('incorrect Query!!');
$rowCount = mysqli_num_rows($res);
?>

	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					<h2 class="heading-section">Table #06</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center">Table Accordion</h3>

                    <form action = "" method = "get">
                <div class="input-group col-lg-6 container mb-5 mt-3">
				
				
                    <input type="text" class="form-control" placeholder="Search" name = "search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" name = "srch" >Search</button>
                        <a href="ViewData.php" class = "btn btn-primary ml-3">Reset</a>
                    </div>
                        
                </div>
                
            </form>
					<?php
                    if($rowCount > 0)
                    {
                    ?>
                    <div class="table-wrap">
						<table class="table" style="overflow-x: hidden;">
						  <thead class="thead-primary">
						    <tr>
						    	
						    	<th class="th">&nbsp;</th>
						    	<th class="th">Name</th>
						      <th class="th">Price</th>
						      <th class="th">Quantity</th>
						      <th class="th">Total</th>
						      <th class="th">&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
        
        
        <?php while ($data = mysqli_fetch_assoc($res)) {
         ?>

                          
						    <tr class="alert" role="alert">
						    	<!-- <td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td> -->


						    	<td>
						    		<div class="img" style="background-image: url(<?= $data['image'] ?>);"></div>
						    	</td>
						      <td>


						      	<div class="email">
						      		<span><?= $data['name'] ?></span>
						      		<span><?= $data['description'] ?></span>
						      	</div>
						      </td>


						      <td><?= $data['price'] ?> Rs</td>
						      <td class="quantity">
                              <?= $data['quantity'] ?>
				          </td>
                          

				          <td><?= $data['total'] ?></td>


						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><a href="ViewData.php?Delid=<?= $data[
                                    'id'] ?>" class="btn btn-danger" 
                                    onclick = "return confirm('Are you sure you want to delete!!');return false;"><i class="fa fa-close"></i></a>&nbsp;</span>
				          	</button>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><a href="Edit.php?id=<?= $data[
                                    'id'] ?>" class="btn btn-primary" 
                                   ><i class="fa fa-edit"></i></a>&nbsp;</span>
				          	</button>
				        	</td>
						    </tr>

                            <?php } ?>

						   
						    
						    
						  </tbody>
						</table>
						<a href="Index.php" class = "btn btn-primary ml-3">Add More Records</a>
						<br>
						<br>
					</div>
                    <?php }
                    else{
                        echo '<p>No Records Found </p>';}
                        
                        error_reporting(0);
                        $DelID = $_GET['Delid'];
                        $quer = "delete from product where id = $DelID";
                        $res = mysqli_query($con, $quer);
                        echo $res;
                        if ($res) {
                            echo "<script>alert('Data Deleted!!');window.location.href = 'ViewData.php';</script>";
                        }
                        mysqli_close($con);?>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

