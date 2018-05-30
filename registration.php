<?php

        include_once 'website_head.php';
 ?>

 <title>Donor Registration</title>
 <div class="container-fluid">
    <div class="background img-fluid"></div>
        <div class="row ">
            <div class="col-6 text-left"><img src="img/logo.png" class="img-fluid"></div>
            <div class="col-6 text-right pt-3"><a class="btn btn-outline-success" href="login.php"><i class="fa fa-sign-in pr-1"></i>Login</a></div>
        </div>
        <div class="row ">
            <div class="col-xl-6 col-lg-12 ">
                <div class="text-center pt-5 pb-3 ml-4 mr-4 registration_info">
                    <h1 class="pt-4 pb-3">HOW YOU CAN HELP?</h1>
                    <div class="pt-3 pb-2">
                        <img src="img/heart.svg" height="200px" width="200px" class="img-fluid">
                    </div>
                    <p class="pt-3 pb-2">Make a Donation to Support the Detroit Phoenix Center!</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="registration_box pt-4 pb-4 pl-3 pr-3 mt-5">
                    <div class="text-center registration_title border-bottom border-dark  pb-3">
                        <h1>Donor Sign Up!</h1>
                    </div>
                    <div class="registration_form pt-4 pb-4">
                        <?php
                            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            if(strpos($url, "registration=empty") == true){
                                echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Please fill the required Fields!</div>";
                            } 
                            elseif(strpos($url, "registration=charerror") == true){
                                echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Please include alphabets and spaces in FullName!</div>";
                            }
                            elseif(strpos($url, "registration=emailerror") == true){
                            echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Please enter a valid email address!</div>";
                            } 
                            elseif(strpos($url, "registration=usertaken") == true){
                                echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>UserName Already Exists!</div>";
                            } 
                            elseif(strpos($url, "registration=emailtaken") == true){
                                echo "<div class='pt-1 pb-1 pl-2 text-danger text-center'>Email Already Exists!</div>";
                            } 

                            ?>
                        <div class=" pt-1 pb-1 pl-2 text-danger text-center" name="error"></div>
                        <form action="user_data.php" method="post">
                            <div class="col-auto pb-3">
                                <label class="sr-only" for="inlineFormInputGroup">Your Full Name</label>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-user' aria-hidden='true'></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" name="full-name" placeholder="Your Full Name" value="<?php if(isset($_GET['full-name'])) echo $_GET['full-name'] ?>" >
                                </div>
                            </div>
                            <div class="col-auto pb-3">
                                <label class="sr-only" for="inlineFormInputGroup">User Name</label>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-id-badge' aria-hidden='true'></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" name="user-name" placeholder="User Name" value="<?php if(isset($_GET['user-name'])) echo $_GET['user-name'] ?>">
                                </div>
                            </div>

                            <div class="col-auto pb-3">
                                <label class="sr-only" for="inlineFormInputGroup">E-Mail</label>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-envelope' aria-hidden='true'></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="inlineFormInputGroup" name="email" placeholder="E-mail" value="<?php if(isset($_GET['email'])) echo $_GET['email'] ?>">
                                </div>
                            </div>

                            <div class="col-auto pb-2">
                                <label class="sr-only" for="inlineFormInputGroup">Phone Number</label>
                                <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                              <div class="input-group-text"><i class='fa fa-phone' aria-hidden='true'></i></div>
                                        </div>
                                        <input type="number" class="form-control" id="inlineFormInputGroup" name="phone" placeholder="Phone Number( Optional )" value="<?php if(isset($_GET['phone'])) echo $_GET['phone'] ?>">
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <input type="submit" name="submit" value="Register" class="btn btn-success pl-5 pr-5">
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
    

    


