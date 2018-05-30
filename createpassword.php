<?php

      include_once 'website_head.php';
 ?>

    <title>Donor Login</title>
    <div class="container">
            <div class="background img-fluid"></div>
            <div class="head_image text-center pt-4 pb-2">
              <img src="img/logo.png" class="img-fluid">
            </div>
            <div class="row justify-content-md-center mt-3">
                  <div class="col-lg-6 col-md-10 col-sm-12">
                          <div class="login_box">
                                <div class="login_title text-center text-dark pt-2 pb-2 ml-4 mr-4 border-bottom border-dark">
                                     <h2>Create Password</h2>
                                </div>
                                <div class="login_form pt-4 pl-5 pr-5 pb-3">
                                    <form action="password_data.php" method="post">
                                        <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-id-badge' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroup" name="username" placeholder="Username">
                                          </div>
                                        </div>
                                        <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInputGroup1">Password</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-key' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="inlineFormInputGroup1" placeholder="Password">
                                          </div>
                                        </div>
                                        <div class="col-auto">
                                          <label class="sr-only" for="inlineFormInputGroup1">Confirm Password</label>
                                          <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-key' aria-hidden='true'></i></div>
                                            </div>
                                            <input type="password" class="form-control" name="confirm-password" id="inlineFormInputGroup1" placeholder="Confirm Password">
                                          </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="submit" name="create" value="Create Password" class="btn btn-success">
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

    