<?php 
session_start();
if(isset($_SESSION["user_name"])){
        header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Use bootstrap 5 CDN path for css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="css/form.css" />
    <!-- link fontawesome css file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AR Computers || Login</title>
</head>
<body>
    <div class="form_section">
        <div class="form_logo">
            <div class="logo_box">
                <img src="../images/header-logo.png" alt="" />
            </div>
            <div class="form_fields">
                <form>
                    <!-- <div class="responsive_fields">
                        <div class="form_field">
                            <input id="login_fname" type="text" placeholder="First Name *" />
                            <span class="field_message error" ><i class="icon fa fa-info-circle" aria-hidden="true"></i></span>
                        </div>
                        <div class="form_field">
                            <input id="login_lname" type="text" placeholder="Last Name *" />
                            <span class="field_message error" ><i class="icon fa fa-info-circle" aria-hidden="true"></i></span>
                        </div>
                    </div> -->
                    <div class="form_field">
                        <input id="login_email" type="email" placeholder="Email *" />
                        <span class="field_message error" ><i class="icon fa fa-info-circle" aria-hidden="true"></i></span>
                    </div>
                    <div class="form_field">
                        <input id="login_password" type="password" placeholder="Password *" />
                        <span class="field_message error" ><i class="icon fa fa-info-circle" aria-hidden="true"></i></span>
                    </div>
                    <!-- <div class="form_field">
                        <input id="login_cpassword" type="password" placeholder="Confirm password *" />
                        <span class="field_message error" ><i class="icon fa fa-info-circle" aria-hidden="true"></i></span>
                    </div> -->
                    <div class="responsive_fields my-4">
                        <input id="login_form"  type="submit" value="Login" class="form_btn" />
                        <!-- <a href="login.php" class="form_btn" >Log In</a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Use bootstrap 5 CDN path for bundle.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>