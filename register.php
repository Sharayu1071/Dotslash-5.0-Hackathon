
<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- bootstrap cdn link  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    
<?php

include 'connect.php';

      if(isset($_POST['submit'])){
          $username = mysqli_real_escape_string($con, $_POST['username']);
          $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $password = mysqli_real_escape_string($con, $_POST['password']);
          $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
          
          $pass = password_hash($password, PASSWORD_BCRYPT);
          $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

          $emailquery = " select * from register where email='$email' ";
          $query = mysqli_query($con,$emailquery);

          $emailcount = mysqli_num_rows($query);

          if($emailcount>0){
              echo "email already exists ";
          }else{
              if($password === $cpassword){

                $insertquery ="INSERT INTO `register` (`username`, `mobile`, `email`, `pass`, `cpass`) VALUES ('$username','$mobile','$email','$pass','$cpass')";

                 
                 
                  $iquery = mysqli_query($con, $insertquery);

                  if($iquery){
                      ?>
                      <script>
                      alert("Registration Successful...!");
                      </script>
                      <?php
                  }else{
                    ?>
                    <script>
                    alert(" Something Went Wrong...");
                    </script>
                    <?php
                  }

              }else{
                  echo "password not matching";
              }
          }

      }
?>



    <!---------------signup-page------------->

    <section class="login">
      <div class="row">
        <center>
          <h1>Register Now</h1>
        </center>
        <div class="col-md-6">
          <img src="images/register.gif" width="100%" height="100%" alt="" />
        </div>
        <div class="col-md-6" id="sign-up">
          <br />

          <h1>Create Account</h1>

          <form
            action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> "
            method="POST"
          >
            <label for="username"><b>Name</b></label
            ><br />
            <input
              type="text"
              class="sign-up-ip"
              placeholder="Enter Name"
              name="username"
              required
            />
            <br />

            <label for="mobile"><b>Mobile No</b></label
            ><br />
            <input
              type="text"
              class="sign-up-ip"
              placeholder="Enter Mobile No"
              name="mobile"
              required
            />
            <br />

            <label for="email"><b>Email</b></label
            ><br />
            <input
              type="text"
              class="sign-up-ip"
              placeholder="Enter Email"
              name="email"
              required
            />
            <br />

            <label for="password"><b>Password</b></label
            ><br />
            <input
              type="password"
              class="sign-up-ip"
              placeholder="Enter Password"
              name="password"
              required
            />
            <br />

            <label for="cpassword"><b> Confirm Password</b></label
            ><br />
            <input
              type="password"
              class="sign-up-ip"
              placeholder="Confirm Password"
              name="cpassword"
              required
            />
            <br />

            <p>
              By creating an account you agree to our
              <a href="#" style="color: dodgerblue">Terms & Privacy</a>.
            </p>

            <div class="sign-up-last">
              <button type="button" class="cancelbtn" name="cancel">
                Cancel
              </button>
              <button type="submit" class="signupbtn" name="submit">
                Sign Up
              </button>
            </div>

            <p>
              Have an account ?
              <a href="login.php" style="color: dodgerblue">Log In</a>.
            </p>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
