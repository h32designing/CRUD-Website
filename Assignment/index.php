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
											<input type="text" class="form-control2" id="name" name="name" placeholder="Casual Black Shoes" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Product Description</legend>
											<input type="text" name="desctiption" id="description" class="form-control2" placeholder="high quality..." required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Product Price</legend>
											<input type="number" class="form-control2" id="price" name="price" placeholder="500" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<input type="number" class="form-control2 input-border" id="quantity" name="quantity" placeholder="10" required>
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

                                        <input class="form-control" type="file" id="Pro_Image" name="uploaded" style="visibility: hidden;" required/>

                                            <img class="mt-5 border" style="padding-top:0px; margin-top:0px; width:350px;" src="images/upload.jpg" id="UserImage">

                                            <div class="upload-photo text-center ">
                                                <br />
                                                <img src="images/camera.png" alt="cameraImg"  class = "img-responsive" >
                                            
                                            </div>
                                        </div>
                                </div>
<a href="ViewData.php"><input type="submit" value = "submit" class = "btn btn-primary mt-5 ml-5" style = "width:300px;" name = "ins">
</a>                                
</div>

								</div>

<!--                                
								<div class="form-row">
									<div class="form-holder form-holder-1">
										<input type="text" name="find_bank" id="find_bank" placeholder="Find Your Bank" class="form-control" required>
									</div>
								</div>
								<div class="form-row-total">
									<div class="form-row">
				                		<div class="form-holder form-holder-2 form-holder-3">
				                			<input type="radio" class="radio" name="bank-1" id="bank-1" value="bank-1" checked>
				                			<label class="bank-images label-above bank-1-label" for="bank-1">
				                				<img src="images/form-v1-1.png" alt="bank-1">
				                			</label>
											<input type="radio" class="radio" name="bank-2" id="bank-2" value="bank-2">
											<label class="bank-images label-above bank-2-label" for="bank-2">
												<img src="images/form-v1-2.png" alt="bank-2">
											</label>
											<input type="radio" class="radio" name="bank-3" id="bank-3" value="bank-3">
											<label class="bank-images label-above bank-3-label" for="bank-3">
												<img src="images/form-v1-3.png" alt="bank-3">
											</label>
				                		</div>
				                	</div>
				                	<div class="form-row">
				                		<div class="form-holder form-holder-2 form-holder-3">
				                			<input type="radio" class="radio" name="bank-4" id="bank-4" value="bank-4">
				                			<label class="bank-images bank-4-label" for="bank-4">
				                				<img src="images/form-v1-4.png" alt="bank-4">
				                			</label>
											<input type="radio" class="radio" name="bank-5" id="bank-5" value="bank-5">
											<label class="bank-images bank-5-label" for="bank-5">
												<img src="images/form-v1-5.png" alt="bank-5">
											</label>
											<input type="radio" class="radio" name="bank-6" id="bank-6" value="bank-6">
											<label class="bank-images bank-6-label" for="bank-6">
												<img src="images/form-v1-6.png" alt="bank-6">
											</label>
				                		</div>
				                	</div>
								</div>  -->
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