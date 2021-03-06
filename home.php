<?php 

 session_start();
  include_once 'Includes/db.php';
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet"> 
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="styles.css">
       <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
       <script type="text/javascript"> 
    </script>
      <title>Home</title>
   </head>
   <body id="adminpage">
     <div class="container-fluid">
     	<!-- Title Bar Starts -->

         <nav class="navbar navbar-expand-lg ">
			    <a class="navbar-brand" href="#"><img class="img-responsive" height="40" src="http://www.detroitphoenixcenter.org/images/layer%200.png?crc=3873543260"></a>
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			            </button>
			    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			        <ul class="navbar-nav ml-auto my-2 my-lg-0">
			            <li class="nav-item pt-2 text-dark">
			                <h6>Welcome
			                    <?php echo ($_SESSION['u_user_name']); ?>
			                </h6>
			            </li>
			            <li class="nav-item active">
			                <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
			            </li>
			            <li class="nav-item">
			                <form action="logout.php" method="post">
			                    <button class="btn btn-light" name="logout" type="submit">Logout</button>
			                </form>
			            </li>
			            
			        </ul>
			        
			    </div>
		  </nav>
		  <!-- Title Bar Ends -->
         	<!-- Navbar Tabs Starts -->
			  	<div class="w-100">
				  <ul class="nav nav-pills shadow menu"  role="tablist">
				    <li class="nav-item">
				      <a class="nav-link active menu-item" data-toggle="pill" href="#home"> <span class="fa fa fa-credit-card"></span> Donate Money</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link menu-item" data-toggle="pill" href="#d1"> <span class="fa fa-book" ></span> Donate Items</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link menu-item" data-toggle="pill" href="#d2"> <span class="fa fa-calendar"></span> Events</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link menu-item" data-toggle="pill" href="#d3"> <span class="fa fa-bar-chart"></span> Donation Reports</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link menu-item" data-toggle="pill" href="#d4"> <span class="fa fa-money"></span> FundRaisers</a>
				    </li>
				    <li class="nav-item">
				    	<a class="nav-link menu-item" data-toggle="pill" href="#d5"> <span class="fa fa-group"></span> Create Events</a>
				    </li>
				  </ul>
				</div>
			<!-- Navbar Tabs Ends -->
  				<!-- Tab panes Starts -->
  				<div class="container-fluid">
  					<!-- alert for payment starts -->
  					<div class="row justify-content-md-center payment-alert">
						<div class="col-12">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Your Payment has been Successfully Done!</strong>
								<p> Please Check your mail for confirmation </p>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
					<!-- alert for payment ends -->
  					<!-- alert for events starts -->
  					<div class="row justify-content-md-center event-alert">
  						<div class="col-12">
  							<div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>Your Event has been Successfully Created!</strong>
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
  						</div>
  					</div>
  					<!-- alert for events ends -->
  					<div class="tab-content">
  						<!-- Donate By Money Tab Starts -->
    					<div id="home" class=" tab-pane active">
    						<div class="pl-2 pt-3 pb-2"><h5>Choose the required Payment Method</h5></div>
    						<!-- Different Payment Tab Starts -->
    						<div class="row">
    							<div class="col-lg-3 col-md-12">
    								<div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									  <a class="nav-link active pt-3 pb-3 " id="v-pills-card-tab" data-toggle="pill" href="#v-pills-card" role="tab" aria-controls="v-pills-card" aria-selected="true">Creditcard/Debitcard</a>
									  <a class="nav-link pt-3 pb-3  " id="v-pills-paypal-tab" data-toggle="pill" href="#v-pills-paypal" role="tab" aria-controls="v-pills-paypal" aria-selected="false">Paypal</a>
									  <a class="nav-link pt-3 pb-3 " id="v-pills-quickpay-tab" data-toggle="pill" href="#v-pills-quickpay" role="tab" aria-controls="v-pills-quickpay" aria-selected="false">Quickpay</a>
								     </div>
    							</div>
    							<!-- Different Payment Tab Ends -->
    							<div class="col-lg-9 col-md-12">
    								<div class="tab-content px-2" id="v-pills-tabContent">
									  <div class="tab-pane fade show active" id="v-pills-card" role="tabpanel" aria-labelledby="v-pills-card-tab">
									  	<div class="container">
									  		<div class="row justify-content-md-center justify-content-sm-center">
									  			<div class=" col-lg-8 col-md-10 col-sm-12  border mt-1 mb-2" >
									  				<div class="row pt-2 pb-2 border-bottom">
									  					<div class="col-8">
													  	<h6 class="d-inline-block pt-1 "><b>Payment Details</b></h6></div>
													  	<div class="col-4 card-tile">
													  	</div>
													</div>
													<?php
														$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
														if(strpos($url, "carddetails=empty") == true){
           													echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Please enter all  card details!</div>";
                                      					} 

                                      					elseif(strpos($url,"carddetails=wrong") == true){

                                      						echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Payment Error! Please type correct card details</div>";

                                      					}

                                      					elseif(strpos($url,"payment=success") == true){

                                      						echo '<div class="row justify-content-md-center card-payment">
												  						<div class="col-12">
												  							<div class="alert alert-success alert-dismissible fade show" role="alert">
																			  <strong>Your Payment has been Successfully Done!</strong>
																			  <p> Please Check your mail for confirmation </p>
																			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																			    <span aria-hidden="true">&times;</span>
																			  </button>
																			</div>
												  						</div>
												  					</div>';

                                      					}
													 ?>
													 
													<div class="pt-2 pl-3 pr-3">
									  				<form action="card_payment.php" method="post" >

									  					<div class="row">
									  						<div class="col-12">
									  							<div class="form-group">
									  								<label for="amount">Amount</label>
									  								<div class="input-group">
									  									<input type="number" name="amount" class="form-control" placeholder="Enter Donation amount" autocomplete="amount" value="<?php if(isset($_GET['amount'])) echo $_GET['amount']; ?>" id="amount">
									  									<div class="input-group-append"><span class="input-group-text"><i class="fa fa-money"></i></span></div>
									  									
									  								</div>
									  							</div>
									  						</div>
									  						
									  					</div>
									  					<div class="row">
									  						<div class="col-12">
									  							<div class="form-group">
									  								<label for="cardname">CardHolder Name</label>
									  								<div class="input-group">
									  									<input type="text" name="name" class="form-control" placeholder="Enter Name" autocomplete="name" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>" id="cardname">
									  									<div class="input-group-append"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
									  									
									  								</div>
									  							</div>
									  						</div>
									  						
									  					</div>
									  					<div class="row">
									  						<div class="col-12">
									  							<div class="form-group">
									  								<label for="cardnumber">Card Number</label>
									  								<div class="input-group">
									  									<input type="tel" name="cardnumber" class="form-control" placeholder="Valid Card Number" autocomplete="cc-number" value="<?php if(isset($_GET['cardnumber'])) echo $_GET['cardnumber']; ?>" id="cardnumber">
									  									<div class="input-group-append"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
									  									
									  								</div>
									  							</div>
									  						</div>
									  						
									  					</div>
									  					<div class="row">
									  						<div class="col-7">
									  							<div class="form-group">
									  								<label for="expdate">Expiry Date</label>
									  								<div class="input-group">
									  									<input type="tel" name="expdate" class="form-control" placeholder="MM/YY" autocomplete="exp-date" value="<?php if(isset($_GET['expdate'])) echo $_GET['expdate']; ?>" id="expdate">
									  									<div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
									  									
									  								</div>
									  							</div>
									  						</div>
									  						<div class="col-5">
									  							<div class="form-group">
									  								<label for="cvv">CVV</label>
									  								<div class="input-group">
									  									<input type="password" name="cvv" class="form-control" placeholder="Enter CVV" autocomplete="cvv" maxlength="3" value="<?php if(isset($_GET['cvv'])) echo $_GET['cvv']; ?>" id="cvv">
									  									<div class="input-group-append"><span class="input-group-text"><i class="fa fa-key" ></i></span></div>
									  									
									  								</div>
									  							</div>
									  						</div>
									  					</div>
									  					<div class="row">
									  						<div class="col-12">
									  							<div class="form-group text-center">
						                                            <input type="submit" name="donate" id="donate" value="Donate" class="btn btn-success pl-5 pr-5">
						                                            
						                                        </div> 
									  						</div>
									  					</div>
									  				</form>	
									  			</div>
									  			</div>
									  		</div>
									  	</div>
									  </div>
									  <div class="tab-pane fade paypal" id="v-pills-paypal" role="tabpanel" aria-labelledby="v-pills-paypal-tab"><div class="py-3 text-center"><h1> COMING SOON</h1></div></div>
									  <div class="tab-pane fade quickpay" id="v-pills-quickpay" role="tabpanel" aria-labelledby="v-pills-quickpay-tab"><div class="py-3 text-center"><h1> COMING SOON</h1></div></div>
									</div>
								</div>
    						</div>	
    					</div>
    					<!-- Donate By Money Tab Ends -->
    					<!-- Donate By Item Tab Starts -->
    					<div id="d1" class="container tab-pane fade"><br>
							  	<h2>Inventory</h2>
							  	<p>Type to check the inventory anything you want to donate.</p> 
							  	<script>
									jQuery(document).ready(function(){
									 jQuery("#myInput").on("keyup", function() {
									    var value = jQuery(this).val().toLowerCase();
									    jQuery("#myTable tr").filter(function() {
									      jQuery(this).toggle(jQuery(this).text().toLowerCase().indexOf(value) > -1)
									    });
									  });
									});
								</script>
 
						  		<input class="form-control" id="myInput" type="text" placeholder="Search..">
						  		<br>
						  		<table class="table table-bordered table-striped">
						    		<thead>
								      <tr>
								        <th>Items</th>
								        <th>We need</th>
								        <th>Buy</th>
								      </tr>
								    </thead>
						    		<tbody id="myTable">
						    			<?php

						    				$sql = "SELECT * FROM inventory;";
						    				$result = mysqli_query($conn,$sql);
						    				while($row = mysqli_fetch_assoc($result)){

						    					echo '<tr><td>'. $row['inventory_name'] . '</td><td>'. $row['inventory_quantity'].
						    					'</td><td><a href="'.$row['url'].'" target="_blank"><button type="button" class="btn btn-sm btn-primary">Buy</button></a></td></tr>';
						    				}

						    			    ?>
								            
						     
						    		</tbody>
						  		</table>                
						</div>
						<!-- Donate By Item Tab Ends -->
						<!-- Events Tab Starts -->
    					<div id="d2" class="container tab-pane fade"><br>
    						<h1>Events</h1>
        					<div class="card-deck">
        						<div class="row">
        						<?php
        								$sql = "SELECT * FROM events;";
						    			$result = mysqli_query($conn,$sql);
						    			while($row = mysqli_fetch_assoc($result)){

						    				echo '<div class="col-lg-3 col-sm-6 col-12 mb-3"><div class="card">
							    					<img class="card-img-top" src="img/events.jpg" he>
							    <div class="card-body text-center">
							      <h5 class="card-title">'.$row['event_name'].'</h5>
							       <h6 class="card-text">'. $row['event_date'].'</h6><h6>Venue :'.$row['event_venue'].'</h6><small><p class="text-left">Description :'.$row['event_description'].'</p></small>
							        <a href="https://www.eventbrite.com/e/a-wine-tasting-to-benefit-detroit-phoenix-center-tickets-33245771999" name="invite" class="btn btn-md btn-primary">Register</a>
							    </div>
							  </div></div>';
						    			}

        						 ?>
							  </div>
							</div>               
    					</div>
    					<!-- Events Tab Ends -->
    					<!-- Donation Reports Tab Starts -->
     					<div id="d3" class="container tab-pane fade"><br>
    						<h2>Donation Reports</h2>
    						<table class="table table-striped">
    							<tr>
    								<td>id</td>
    								<td>Year</td>
    								<td>Donation method</td>
    								<td>Donated</td>
    								<td>Report</td>
    							</tr>
    							
    							<tr>
    								<td>1</td>
    								<td> <?php  echo date("Y"); ?></td>
    								<td>Donate By Money</td>
    								<td><?php echo '$'. ($_SESSION['u_total']); ?></td>
    								<td>
    									<a class='btn btn-primary'  name='pdf' href="donation_report.php">PDF</a>
    									
    								</td>
    							</tr>

    							
    						</table>
    						
    						
    					</div>
    					<!-- Donation Reports Tab Ends -->
    					<!-- Fund Raisers Tab Starts -->
    					<div id="d4" class="container tab-pane fade ">
    						<h2 class="pt-4">Fund Raisers</h2>
    						<div class="card-deck">
    							<div class="row">
    							<?php 

    								$sql = "SELECT * FROM fundraiser;";
						    		$result = mysqli_query($conn,$sql);
						    		while($row = mysqli_fetch_assoc($result)){
						    			$amount_received = ($row['amount_received']/$row['actual_amount'])*100;
						    			echo '<div class="col-lg-4 col-md-6 col-12"><div class="card" >
						    					<img class="card-img-top" src="img/fundraising.jpg" >
							    				<div class="card-body ">
							    					<h5 class="card-title text-center">'.$row['fund_name'].'</h5>
							    					<div class="card-text">
							    						<p><small> Description: '.$row['fund_description'].'</small></p>
							    						<h6 class="text-center pb-2"> Total Amount: $'.$row['actual_amount'].'</h6>
							    						<div class="progress">
							    						  
														  <div class="progress-bar" role="progressbar" style="width:'.$amount_received.'%;"aria-valuenow="900" aria-valuemin="0" aria-valuemax="1000">
														  </div>
														</div>
														<h6 class="text-center pt-1">Amount Received: $'.$row['amount_received'].'/ $'.$row['actual_amount'].'</h6>
														  <div class="mt-4 text-center">
														  <button type="button" class="btn btn-md btn-primary fundid" data-toggle="modal" data-target="#exampleModalCenter" data-id="'.$row['fund_id'].'"> Donate </button>
														
														  </div>
														
														
							    					 </div>
							    					 
							    				</div>
							    				
						    			 	 </div></div>';
						    		}


    							 ?>
    							</div>
						    		
    						</div>
    						<div class="modal fade" id="exampleModalCenter" role="dialog">
    							<div class="modal-dialog modal-dialog-centered">    
      								<!-- Modal content-->
      								<div class="modal-content">

        							<form >
        								<div class="modal-body">  
        									<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
											  <li class="nav-item">
											    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">CreditCard/DebitCard</a>
											  </li>
											  <li class="nav-item">
											    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Paypal</a>
											  </li>
											  <li class="nav-item">
											    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Quickpay</a>
											  </li>
											</ul>  
											<div class='pt-1 pb-1 pl-2 text-danger text-center' id="payment-error">Please enter all  card details!</div>
											<div class="tab-content" id="pills-tabContent">
											  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
											  	<div class="form-group">
									  				<label for="amount">Amount</label>
									  				 <div class="input-group">
									  					<input type="number" name="amount" id="modal_amount" class="form-control" placeholder="Enter Donation amount" autocomplete="amount" value="">
									  					<div class="input-group-append"><span class="input-group-text"><i class="fa fa-money"></i></span></div>
									  									
									  				</div>
									  			</div>
									  			<div class="form-group">
									  				<label for="name">CardHolder Name</label>
									  				 <div class="input-group">
									  					<input type="text" name="name" class="form-control" placeholder="Enter Name" autocomplete="name" id="modal_name" value="">
									  					<div class="input-group-append"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
									  									
									  				</div>
									  			</div>
									  			<div class="form-group">
									  				<label for="cardnumber">Card Number</label>
									  				<div class="input-group">
									  					<input type="tel" name="cardnumber" class="form-control" placeholder="Valid Card Number" autocomplete="cc-number" value="" id="modal_number">
									  					<div class="input-group-append"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
									  									
									  				</div>
									  			</div>
									  			<div class="row">
									  				<div class="col-7">
									  				 <div class="form-group">
									  					<label for="expdate">Expiry Date</label>
									  						<div class="input-group">
									  							<input type="tel" name="expdate" class="form-control" placeholder="MM/YY" autocomplete="exp-date" value="" id="modal_expdate">
									  							<div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
									  									
									  						</div>
									  				</div>
									  				</div>
									  				<div class="col-5">
									  				<div class="form-group">
									  					<label for="cvv">CVV</label>
									  					<div class="input-group">
									  					<input type="password" name="cvv" class="form-control" placeholder="Enter CVV" autocomplete="cvv" maxlength="3" value="" id="modal_cvv">
									  					<div class="input-group-append"><span class="input-group-text"><i class="fa fa-key" ></i></span></div>
									  									
									  					</div>
									  				</div>
									  				</div>
									  			</div>
											  </div>
											  <div class="tab-pane fade paypal" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><div class="py-3 text-center"><h1> COMING SOON</h1></div></div>
											  <div class="tab-pane fade quickpay" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="py-3 text-center"><h1> COMING SOON</h1></div></div>
											</div>        
                							   
                							<input type="hidden" name="fundid" id="fundid">                      
        								</div>
        								<div class="modal-footer">
          									<button type="submit" class="form-control btn btn-primary btn-small"  name="fundraiser" id="fundraiser">Submit</button>
        								</div>
    								</form>
        							</div>
      							</div>      
    						</div>
    						
    					</div>
    					<!-- Fundraiser Tab Ends -->
    					<!-- Create Events Tab starts -->
    					
    					<div id="d5" class="container tab-pane fade">
    						<div class="row">
    							<div class="col-lg-6 col-12 text-center pb-3">
    								<div class=" pt-5 pb-3">
    									<h4 >Create Your Own Events And Help Us By Contributing to the Community</h4>
    								</div>
    								<div >
    									<img src="img/create-events.jpg">
    								</div>
    							</div>
    							<div class="col-lg-6 col-12  mt-5 pl-1 pr-1 pt-3">
                                     <div class='pt-1 pb-1 pl-2 text-danger text-center' id="event-error">Please Enter All The Details </div>
                                     <div class='pt-1 pb-1 pl-2 text-danger text-center' id="date-error">Please Enter the Event Date in MM-DD-YYYY format </div>
    								<form >
    									<div class="form-group">
									  		<label for="event-name">Event Name</label>
									  			<div class="input-group">
									  				<input type="text" name="event-name" class="form-control" id="event-name" placeholder="Enter the Name of the Event" value="">
									  				<div class="input-group-append"><span class="input-group-text"><i class="fa fa-group"></i></span></div>
									  									
									  			</div>
									  	</div>
									  	<div class="form-group">
									  		<label for="event-name">Event Date</label>
									  			<div class="input-group">
									  				<input type="text" name="event-date" class="form-control" placeholder="Date Format: MM-DD-YYYY" id="event-date" value="">
									  				<div class="input-group-append"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
									  									
									  			</div>
									  	</div>
									  	<div class="form-group">
									  		<label for="event-name">Event Venue</label>
									  			<div class="input-group">
									  				<input type="text" name="event-venue" class="form-control" id="event-venue" placeholder="Enter the Name of the Event Venue" value="">
									  				<div class="input-group-append"><span class="input-group-text"><i class="fa fa-institution"></i></span></div>
									  									
									  			</div>
									  	</div>
									  	<div class="form-group">
									  		<label for="event-name">Event Description</label>
									  			<div class="input-group">
									  				<textarea name="description" class="form-control" placeholder="Event Description should not be more than two lines" id="description" value="" row="2"></textarea>
									  				<div class="input-group-append"><span class="input-group-text"><i class="fa fa-sticky-note"></i></span></div>
									  									
									  			</div>
									  	</div>

									  	<div class="form-group"><button type="submit" id="create" class="form-control btn btn-primary btn-large"  name="create">Create Event</button></div>
    								</form>
    							</div>
    						</div>
    					</div>
    					<!-- Create Events Tab ends -->
  					</div> 
 		 		</div>
 		 		<!-- Tab Panes Ends -->
		
   </div>


      <!-- Optional JavaScript -->
      <script type="text/javascript">
      	$('document').ready(function(){
      		$('#event-error').hide();
      		$('.event-alert').hide();
      		$('#payment-error').hide();
      		$('.payment-alert').hide();
      		$('#date-error').hide();
      	// fundraiser modal form submission
      	$('#fundraiser').click(function(){
      		var cardname = $('#modal_name').val();
      		var cardnumber = $('#modal_number').val();
      		var amount = $('#modal_amount').val();
      		var expdate = $('#modal_expdate').val();
      		var cvv = $('#modal_cvv').val();
      		var fundid = $('#fundid').val();
      		var payment_data = 'card-name=' + cardname + '&card-number=' + cardnumber + '&amount=' + amount + '&expdate=' + expdate + "&cvv=" + cvv  + '&fundid=' + fundid;
      		if( cardname == "" || cardnumber == "" || amount == "" || expdate == "" || amount == "")
      		{
      			$('#payment-error').show();
      			return false;
      		}
      		else{

      			$.ajax({
      				type: "POST",
      				url: "fund_data.php",
      				data: payment_data,
      				success: function(){
      					 $('#exampleModalCenter').hide();
      					 $('body').removeClass('modal-open');
						 $('.modal-backdrop').remove();
						 $('.payment-alert').delay(1000).show();

      				}
      			});
      			$('#modal_name').val("");
      			$('#modal_number').val("");
      			$('#modal_amount').val("");
      			$('#modal_expdate').val("");
      			$('#modal_cvv').val("");
      			return false;
      		}
      	});

      	// event form submission
      	$('#create').click(function(){
      		var event_name = $('#event-name').val();
      		var event_date = $('#event-date').val();
      		var event_venue = $('#event-venue').val();
      		var description = $('#description').val();
      		var date_pattern = /(\d{2})-(\d{2})-(\d{4})/;
      		var data = 'event-name='+ event_name + '&event-date=' + event_date  + '&event-venue=' + event_venue + '&description=' + description;
      		if( event_name == "" || event_date == "" || event_venue == "" || description == "")
      		{
      			$('#event-error').show();
      			return false;
      		}

      		 else if(!date_pattern.test(event_date)){
      			$('#date-error').show();
      			return false;
      		}
      		else{

      			$.ajax({
      				type: "POST",
      				url: "event_data.php",
      				data: data,
      				success: function(){
      					
      					$('.event-alert').show();
      				}
      			});
      			$('#event-name').val("");
      			$('#event-date').val("");
      			$('#event-venue').val("");
      			$('#description').val("");
      			return false;
      		}

      	});

       // Getting the id value of particular fundraiser
    	$('.fundid').on('click', function (e) {
       		$('#fundid').val($(this).attr("data-id"));       
    	});

      // Assigning the fundid to modal
    	$('#exampleModalCenter').on('hidden.bs.modal', function () {
        $('#fundid').val('');
    		});
    });
     </script>
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
   </body>
</html>



