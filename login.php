
<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- bootstrap cdn link  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>



    <?php

include 'connect.php';

      if(isset($_POST['submit'])){
         
          $email = $_POST['email'];
          $password = $_POST['password'];

          $email_search = " select * from register where email='$email' ";
          $query = mysqli_query($con,$email_search);

          $emai_count = mysqli_num_rows($query);

          if($emai_count){
              $email_pass = mysqli_fetch_assoc($query);

              $db_pass = $email_pass['pass'];

              $_SESSION['username'] = $email_pass['username'];

              $pass_decode = password_verify( $password, $db_pass);

              if($pass_decode){
                  echo "Login Successful"; 
                 
                 ?>
    <script>
     location.replace("home.php");
    </script>
    <?php

              }else{
                  echo "Incorrect Password";
              }
          }else{
              echo "Invalid Email";
               }
     }

?>


    <!---------------login-page------------->

    <section class="login width=100%">
        <div class="row">
           <center>
           <h1>Log In Now</h1>
        </center>
           <br>
           <br>

        


            <div class="col-md-6">
               <img src="images/login.gif" width="100%" alt="">
            </div>

            <div class="col-md-6" id="sign-up">
                <center>

                

                <br>
                <br>
                <h1>Get Started With Your Account.</h1>
                <br /> <br>

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST">
                    <label for="email"><b>Email</b></label><br />
                    <input type="text" class="sign-up-ip" placeholder="Enter Email" name="email" required /><br /><br />

                    <label for="password"><b>Password</b></label><br />
                    <input type="password" class="sign-up-ip" placeholder="Enter Password" name="password"
                        required /><br /><br />

                    <div class="sign-up-last">
                        <button type="button" class="cancelbtn" name="cancel">
                            Cancel
                        </button>
                        <button type="submit" class="signupbtn" name="submit">
                            Log In
                        </button>
                    </div>
                    <br />
                    <br>

                    <p>
                        Don't have an account ?
                        <a href="register.php" style="color: dodgerblue">Register here</a>.
                    </p>
                </form>
            </center>
            </div>
        </div>
    </section>
</body>

</html>