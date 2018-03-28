<?php
  session_start();
  if(!isset($_SESSION["user_name"]))
  {
    header("Location: ../index.html");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Post Advertisement</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<!--==========================
				NAVBAR
	============================-->

	<section id="navigation-bar">
	<nav class="navbar navbar-default" style="background-color: #83ba03;">
		<div class="container-fluid">
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			       <span class="icon-bar"></span>
			       <span class="icon-bar"></span>
			       <span class="icon-bar"></span> 
			    </button>
			    <div class="navbar-header">
					<a class="navbar-brand" href="#">FARMER ASSISTANT</a>
				</div>
		     </div>
			
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#home">Home</a></li>
					<li><a href="#home">Contact Us</a></li>
					<li><a href="#home">About Us</a></li>
				</ul>
			</div>
		</div>	
	</nav>
	</section>

	<!--==========================
		ADVERTISEMENT TABLE
	============================-->

	<section id="form">
		<div class="container">
			<div class="row">
				<center><div id="h">Product Advertisement Form</div></center>
				<div class="col-sm-8 col-sm-offset-2" style="background-color: #e6efef; padding-top: 2%;">
					
					<form action="../server-scripts/farmer-post-insertion.php" method="POST">
						<div class="form-group" style="padding-top:1%;">
							<fieldset>
				      			<legend>Product Details:</legend>
				      			<div class="col-sm-12">
						      		<div class="row">
						      			<div class="col-sm-12">
								      		<div class="form-group">
								    			<label for="pname">Product Name<p id="s" style="display:inline">*</p></label>
								    			<div class="input-group">
								    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"di ></i></span>
								      				<input type="text" class="form-control" id="pname" name="pname" placeholder="Enter the crop name" required>
								      			</div>
								      		</div>
							      		</div>
							      	</div>
								   	<div class="row">
						      			<div class="col-sm-6">
								      		<div class="form-group">
								    			<label for="image">Image<p id="s" style="display:inline">*</p></label>
								    			<div class="input-group">
								    				<div class="btn btn-default">
								                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
								                    </div> 
								      			</div>
								      		</div>
								      	</div>
								    	<div class="col-sm-6">
								      		<div class="form-group">
								    			<label for="mobile">Category<p id="s" style="display:inline">*</p></label>
								    			<div class="input-group">
								    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								    				<select class="form-control" name="types">
												        <option value="veg">Vegetables</option>
												        <option value="fruit">Fruits</option>
												        <option value="cereal">Cereals</option>
												    </select>
								      			</div>
								      		</div>
								      	</div>
								    </div>
								    <div class="row">
								    	<div class="col-sm-4">
								      		<div class="form-group">
								    			<label for="quantity">Quantity (in kg)<p id="s" style="display:inline">*</p></label>
								    			<div class="input-group">
								    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      				<input type="Number" class="form-control" id="quantity" name="quantity" placeholder="Enter crop quantity in kg" required>
								      			</div>
								      		</div>
								      	</div>
								      	<div class="col-sm-4">
								      		<div class="form-group">
								    			<label for="pname">Price (per kg)<p id="s" style="display:inline">*</p></label>
								    			<div class="input-group">
								    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      				<input type="Number" class="form-control" id="price" name="price" placeholder="Enter crop price for per kg" required>
								      			</div>
								      		</div>
								      	</div>
								      	<div class="col-sm-4">
								      		<div class="form-group">
								      			<label for="negotiation">Price Negotiability<p id="s" style="display:inline">*</p></label>
											    <div class="input-group">
											  
												    <label class="radio-inline"><input type="radio" name="pnego" value="Yes">&nbsp;Yes</label>&nbsp;&nbsp;
												    <label class="radio-inline"><input type="radio" name="pnego" value="No">&nbsp;No</label>
											    </div>
								      		</div>
								      	</div>
								    </div>
								    <div class="row">
								    	<div class="col-sm-6">
								      		<div class="form-group">
								    			<label for="fromdate">From Date<p id="s" style="display:inline">*</p></label>
								    			<div class="input-group">
								    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      				<input type="date" class="form-control" id="date" name="fromdate" required>
								      			</div>
								      		</div>
								      	</div>
								      	<div class="col-sm-6">
								      		<div class="form-group">
								    			<label for="expiredate">Expire Date<p id="s" style="display:inline">*</p></label>
								    			<div class="input-group">
								    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      				<input type="date" class="form-control" id="date" name="expiredate" required>
								      			</div>
								      		</div>
								      	</div>
								    </div>

								    <div class="row">
								    	<div class="col-sm-12">
								    		<label for="description">Descriprtion</label>
								    		<div class="input-group">
								    				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								      				<textarea rows="5" cols="5" class="form-control" id="description" name="description" placeholder="Enter description about the product"></textarea>
								      		</div>
								    	</div>
								    </div>
								</div>
							</fieldset>
							<fieldset>
								<legend></legend>
								<div class="row">  
					                <div class="col-xs-4 col-xs-offset-2">
										<div class="form group">
					                        <input type="reset" class="btn btn-reset" value="Reset" id="reset" style="width: 90%; background-color: #88b73c; color: white;">
					                    </div>
					                </div>
					                <div class="col-xs-4 col-xs-offset-1">
										<div class="form group">
					                        <input type="submit" class="btn btn-submit" value="Submit" id="submit" style="width: 90%; background-color: #88b73c; color: white;">
					                    </div>
					                </div>
				                </div>	
			                </fieldset>
				      	</div>
			      	</form>
				</div>
			</div>
		</div>
	</section>

</body>
</html>