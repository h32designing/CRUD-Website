<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form-v1 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/_buttons.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php include 'connection.php'; ?>
<?php
$ID = $_GET['id'];
$query = "select * from product where id = $ID";
$GetData = mysqli_query($con, $query);
$res = mysqli_fetch_assoc($GetData); // print_r($res);

?>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="Crud.php" method="post" enctype="multipart/form-data">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Product Infomation</span>
			            </h2>
                        <input type="hidden"  name="id" value = "<?= $res['id'] ?>">
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Product Infomation</h3>
									<p>Please enter your infomation and proceed to the next step so we can create a new product.  </p>
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Product Name</legend>
											<input type="text" value = "<?= $res['name']?>" class="form-control2" id="name" name="name" placeholder="Casual Black Shoes" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Product Description</legend>
											<input type="text" name="desctiption" value = "<?= $res['description']?>"  id="description" class="form-control2" placeholder="high quality..." required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Product Price</legend>
											<input type="number" value = "<?= $res['price']?>" class="form-control2" id="price" name="price" placeholder="500" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<input type="number" value = "<?= $res['quantity']?>"  class="form-control2 input-border" id="quantity" name="quantity" placeholder="10" required>
									</div>
								</div>
							</div>
                            
                            
			            </section>
						<!-- SECTION 2 -->
			          <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Upload Product Image</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Upload Product Image</h3>
									<p>Please Upload Produt Image and finish the process so we can create your product.</p>
								</div>
                                <div class="form-row form-holder form-holder-2">                                    
                                <div class = "col-lg-6 container">
                                        <div class="d-flex flex-column align-items-center text-center  user-profile-image">

                                        <input class="form-control" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;" />

                                            <img class="mt-5 border" style="padding-top:0px; margin-top:0px; width:350px;" src="<?= $res['image']?>" value="<?= $res['image']?>" id="UserImage">

                                            <div class="upload-photo text-center ">
                                                <br />
                                                <img src="images/camera.png" alt="cameraImg"  class = "img-responsive" >
                                            
                                            </div>
                                        </div>
                                </div>
                                <a href="ViewData.php">
									<input type="submit" value = "Update" class = "btn btn-primary mt-5 ml-5" style = "width:300px;" name = "upd">
								</a>
                                </div>

								</div>
							</div>
			            </section> 
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/main.js"></script>
    <script>
        $(document).ready(function () {


            $(".upload-photo").click(function () {
               $("#Pro_Image").trigger('click')
            })

            $("#UserImage").click(function () {
                $("#Pro_Image").trigger('click')
            })


            $("#Pro_Image").change(function () {
                if (this.files && this.files[0]) {
                    var fileReader = new FileReader();
                    fileReader.readAsDataURL(this.files[0]);
                    fileReader.onload = function (x) {

                        $("#UserImage").attr('src', x.target.result);
                    }
                }
            })
        })
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>