
<?php

include_once 'website_head.php';

?>

<title>Volunteer Registration</title>
    <div class="container">
            <div class="background img-fluid"></div>
            <div class="head_image text-center pt-2 pb-1">
              <img src="img/logo.png" class="img-fluid">
            </div>
            <div class="row justify-content-md-center mt-1">
                  <div class="col-lg-7 col-md-10 col-sm-12">
                          <div class="login_box">
                                <div class="login_title text-center text-dark pt-2 pb-2 ml-4 mr-4 border-bottom border-dark">
                                     <h2>Volunteer Sign Up</h2>
                                </div>
                                <div class="login_form pt-3 pl-5 pr-5 pb-2">
                                  <?php
                                      $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                      if(strpos($url, "signup=empty") == true){
                                          echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Please fill the required fields!</div>";
                                      } 
                                      elseif(strpos($url, "signup=invalid") == true){
                                          echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Please enter only alphabets and spaces in firstname or lastname!</div>";
                                      }

                                      elseif(strpos($url, "signup=emailerror") == true){
                                          echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Please enter valid email address!</div>";
                                      }

                                       elseif(strpos($url, "signup=volunteertaken") == true){
                                          echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Email already exists!</div>";
                                      }
                                    
                                     
                                    
                                    

                                      ?>
                                    <form action="volunteer_data.php" method="post">
                                      <div class="row">
                                        <div class="col-lg-6 col-12">
                                          <label class="sr-only" for="inlineFormInputGroup">Firstname</label>
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-user' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" name="first-name" placeholder="Firstname" value="<?php if(isset($_GET['first-name'])) echo $_GET['first-name'] ?>">
                                          </div>
                                        </div>
                                        <div class=" col-lg-6 col-12">
                                          <label class="sr-only" for="inlineFormInputGroup">Lastname</label>
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-user' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" name="last-name" placeholder="Lastname(Optional)" value="<?php if(isset($_GET['last-name'])) echo $_GET['last-name'] ?>">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6 col-12">
                                          <label class="sr-only" for="inlineFormInputGroup">Phone</label>
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-phone' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="tel" class="form-control" id="inlineFormInputGroup" name="phone" placeholder="Phone Number(Optional)" value="<?php if(isset($_GET['phone'])) echo $_GET['phone'] ?>">
                                          </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                          <label class="sr-only" for="inlineFormInputGroup1">Email</label>
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-envelope' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="email" class="form-control" name="email" id="inlineFormInputGroup1" placeholder="E-Mail" value="<?php if(isset($_GET['email'])) echo $_GET['email'] ?>">
                                          </div>
                                        </div>
                                      </div>
                                        <div class="col-auto pl-0 pr-0">
                                          <label class="sr-only" for="inlineFormInputGroup1">Street Address</label>
                                          <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-address-book' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="text" class="form-control" name="address" id="inlineFormInputGroup1" placeholder="Street Address(Optional)" value="<?php if(isset($_GET['address'])) echo $_GET['address'] ?>">
                                          </div>
                                        </div>
                                        <div class="col-auto pl-0 pr-0">
                                          <div class="input-group mb-3 event-box pt-2 pb-1 pl-2 pr-1">
                                            <label class=" text-center">Which Events Would You Like to volunteer?</label>
                                            <div class="row">
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" name="event[]" type="checkbox"  value="All Events">
                                                <span style="font-size: 15px;">All Events</span>
                                              </label>
                                              </div></div>
                                              <div class="col-lg-4 col-6">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" name="event[]" type="checkbox"  value="Wine Tasting Event">
                                                    <span style="font-size: 15px;">Wine Tasting </span> 
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="event[]"  value="Shopping Event">
                                                <span style="font-size: 15px;">Shopping </span>                          
                                              </label>
                                              </div></div>
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="event[]" value="Basketball Charity Event">
                                                <span style="font-size: 15px;">Basketball Charity </span>
                                              </label>
                                              </div></div>
                                              
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="event[]"  value="As Needed">
                                               <span style="font-size: 15px;">As Needed</span>
                                              </label>
                                              </div></div>
                                          </div>
                                          </div>
                                        </div>
                                        <div class="col-auto pl-0 pr-0">
                                          <div class="input-group mb-3 event-box pt-2 pb-1 pl-2 pr-1">
                                            <label class=" text-center">How You Would Like to Volunteer?</label>
                                            <div class="row">
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" name="volunteer[]" type="checkbox"  value="Cooking">
                                                <span style="font-size: 15px;">Cooking</span>
                                              </label>
                                              </div></div>
                                              <div class="col-lg-4 col-6">
                                                <div class="form-check">
                                                  <label class="form-check-label">
                                                    <input class="form-check-input" name="volunteer[]" type="checkbox"  value="Decoration">
                                                    <span style="font-size: 15px;">Decoration</span> 
                                                  </label>
                                                </div>
                                              </div>
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="volunteer[]"  value="Serving People">
                                                <span style="font-size: 15px;">Serving People</span>                          
                                              </label>
                                              </div></div>
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="volunteer[]" value="Managing People">
                                                <span style="font-size: 15px;">Managing People </span>
                                              </label>
                                              </div></div>
                                              
                                              <div class="col-lg-4 col-6"><div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" name="volunteer[]"  value="As Needed">
                                               <span style="font-size: 15px;">As Needed</span>
                                              </label>
                                              </div></div>
                                          </div>
                                          </div>
                                        </div>
                                       
                                        <div class="form-group text-center">
                                            <input type="submit" name="volunteer-submit" value="SignUp" class="btn btn-success">
                                        </div>  
                                    </form>            
                                </div>
                               
                                  
                                
                          </div>
                  </div>
            </div>       
    </div> 

<?php 

include_once 'website_foot.php';

?>