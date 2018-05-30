<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/donor.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

    <title>Donor Registration</title>
  </head>
  <body>
    <?php
    
    <div class="container-fluid">
        <div class="background img-fluid"></div>
        <div class="row">
            <div class="col-sm-12">
                <img src="img/logo.png" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 info">
                <div class="info-div text-center">
                    <h1>HOW YOU CAN HELP?</h1>
                    <img src="img/heart.svg" height="200px" width="200px" class="img-fluid">
                    <p>Make a Donation to Support the Detroit Phoenix Center!</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="registration">
                    <div class="text-center introduce">
                        <h1>Please Introduce Yourself!</h1>
                    </div>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label for="first-name">First Name:<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" id="first-name" placeholder="Enter Your First-Name">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name:<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" id="last-name" placeholder="Enter Your Last-Name">
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Phone Number:</label>
                            <input type="number" class="form-control" id="phone-number" placeholder="Enter Your Phone-Number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:<sup style="color:red">*</sup></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Your First-Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button> 
                    </form>
                    
                </div>
            </div>  
        </div>
        
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>