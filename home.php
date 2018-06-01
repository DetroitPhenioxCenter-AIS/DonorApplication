<?php 

 session_start();

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
      $(document).ready( function() {
        $('#alert').delay(2000).fadeOut();
      });
    </script>
      <title>Home</title>
   </head>
   <body id="adminpage">
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#"><img class="img-responsive" height="40" src="http://www.detroitphoenixcenter.org/images/layer%200.png?crc=3873543260"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
               <ul class="navbar-nav ml-auto my-2 my-lg-0">
               	  <li class="nav-item pt-2 text-dark">
                     <h6>Welcome <?php echo($_SESSION['u_user_name']);  ?></h6>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="#"><i class="fa fa-bell"></i></a>
                  </li>
                  <li class="nav-item">
                  	<form action="logout.php" method="post">
                     <button class="btn btn-light" name="logout" type="submit">Logout</button>
                 	</form>
                  </li>
                  <!--  <li class="nav-item">
                     <a class="nav-link disabled" href="#">Disabled</a>
                     </li> -->
               </ul>
               <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> -->
            </div>
         </nav>
         <div class="row">
  <div class="w-100">
  <ul class="nav nav-pills shadow"  role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home"> <span class="fa fa fa-credit-card"></span> Donate Money</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#d1"> <span class="fa fa-book" ></span> Donate Items</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#d2"> <span class="fa fa-calendar"></span> Events</a>
    </li>
  </ul>
</div>
 <!-- <?php 
  //$conn = mysqli_connect('127.0.0.1','root','');
   //mysqli_select_db($conn,'USERBASE'); ?> -->
  <!-- Tab panes -->
  <div class="container">
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
          <div class="container">
			    <form class="form-horizontal" role="form">
			      <fieldset>
			        <legend>
			          <h1 class="form-top">Donate By Payment</h1>
			        </legend>
			        <div class="form-group">
			          <label class="col-sm-3 control-label" for="card-holder-name">Name</label>
			          <div class="col-sm-9">
			            <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
			          </div>
			        </div>
			        <div class="form-group">
			          <label class="col-sm-3 control-label" for="card-number"> Card Number</label>
			          <div class="col-sm-9">
			            <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
			          </div>
			        </div>
			        <div class="form-group">
			          <label class="col-sm-3 control-label" for="expiry-month">Expiration</label>
			          <div class="col-sm-9">
			          		<div class="row pl-3">
			          		<div class="col-xs-6">
			                <select class="form-control " name="expiry-month" id="expiry-month">
			                  <option>Month</option>
			                  <option value="01">Jan (01)</option>
			                  <option value="02">Feb (02)</option>
			                  <option value="03">Mar (03)</option>
			                  <option value="04">Apr (04)</option>
			                  <option value="05">May (05)</option>
			                  <option value="06">June (06)</option>
			                  <option value="07">July (07)</option>
			                  <option value="08">Aug (08)</option>
			                  <option value="09">Sep (09)</option>
			                  <option value="10">Oct (10)</option>
			                  <option value="11">Nov (11)</option>
			                  <option value="12">Dec (12)</option>
			                </select>
			            	</div>
			            	<div class="col-xs-6">
			                <select class="form-control " name="expiry-year">
			                  <option value="17">2017</option>
			                  <option value="18">2018</option>
			                  <option value="19">2019</option>
			                  <option value="20">2020</option>
			                  <option value="21">2021</option>
			                  <option value="22">2022</option>
			                  <option value="23">2023</option>
			                </select>
			            </div>

			            </div>
			             
			          </div>
			        </div>
			        <div class="form-group">
			          <label class="col-sm-3 control-label" for="cvv">CVV</label>
			          <div class="col-sm-9">
			            <input type="password" class="form-control" maxlength="3" name="cvv" id="cvv" placeholder="Security Code">
			          </div>
			        </div>
			        <br>
			        <div class="form-group">
			          <div class="col-sm-2">
			            <button type="button" class="btn btn-success" id="pay-now">Pay Now</button>
			          </div>
			        </div>
			      </fieldset>
			   </form>
	     </div>


    </div>
    <div id="d1" class="container tab-pane fade"><br>
    <!--table-->
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
            <tr>
                <td>Beds</td>
                <td>200</td>
               <!-- data-toggle="modal" data-target="#myModal" -->
                <td><a href="https://www.amazon.com/s/ref=nb_sb_noss_1?url=search-alias%3Daps&field-keywords=+beds&rh=i%3Aaps%2Ck%3A+beds"><button type="button" class="btn btn-sm btn-primary">Buy</button></a></td>
              
    		</tr>
    		<tr>
                <td>Sheets</td>
                <td>200</td>
               <!-- data-toggle="modal" data-target="#myModal" -->
                <td><a href="https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=bedsheets"><button type="button" class="btn btn-sm btn-primary">Buy</button></a></td>
              
    		</tr>
    		<tr>
                <td>Books</td>
                <td>200</td>
               <!-- data-toggle="modal" data-target="#myModal" -->
                <td><a href="https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=books&rh=i%3Aaps%2Ck%3Abooks&ajr=0"><button type="button" class="btn btn-sm btn-primary">Buy</button></a></td>
              
    		</tr>
    		<tr>
                <td>Clothes</td>
                <td>200</td>
               <!-- data-toggle="modal" data-target="#myModal" -->
                <td><a href="https://www.amazon.com/s/ref=nb_sb_noss_1?url=search-alias%3Dstripbooks&field-keywords=clothes"><button type="button" class="btn btn-sm btn-primary">Buy</button></a></td>
              
    		</tr>
     
    </tbody>
  </table>                
    </div>
    <div id="d2" class="container tab-pane fade"><br>
    <h1>Events</h1>
        <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6Rd7_CyaP3FOvx3ijyWQflOOe7uvR74uyxcoPpa4pyAPShFmd" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Event 1</h5>
       <p class="card-text"><small> Date : 06-01-2018<br>Venue : DPC<br>Description : This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
        <button  name="invite" class="btn btn-md btn-primary">Register</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlEteLUUNiPUClzjkHtV3ukGrBim01r-XutDfI9YdB4v5sH99-" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Event 2</h5>
       <p class="card-text"><small> Date : 06-01-2018<br>Venue : DPC<br>Description : This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
      <button  name="invite" class="btn btn-md btn-primary">Register</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjA8WDPKKkGrdJlqtdSbP_ZzcP3bhaS0HR8wzSIsilsbeGDQ2rmA" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Event 3</h5>
       <p class="card-text"><small> Date : 06-01-2018<br>Venue : DPC<br>Description : This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
       <button  name="invite" class="btn btn-md btn-primary">Register</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjA8WDPKKkGrdJlqtdSbP_ZzcP3bhaS0HR8wzSIsilsbeGDQ2rmA" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Event 4</h5>
      <p class="card-text"><small> Date : 06-01-2018<br>Venue : DPC<br>Description : This is a wider card with supporting text below as a natural lead-in to additional content.</small></p>
        <button  name="invite" class="btn btn-md btn-primary">Register</button>
    </div>
  </div></div>               
    </div>
    
  </div> 
 

  
</div>

   
   
    </div>
  </div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
   </body>
</html>



