<?php
    session_start();

    if(!isset($_SESSION['username'])){
        echo "you are logged out";
        header('location:login.php');
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teammates</title>
    
    <!-- bootstrap cdn link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">

   

</head>

<body>

    <!-- header section starts -->

    <header class="fixed-top py-3">

        <div class="container d-flex align-items-center justify-content-between">

            <a href="#" class="logo"><span>Team</span>Mates</a>

            <div id="menu-bar" class="fas fa-bars d-inline-block d-md-none"></div>

            <nav class="nav">
                
                <a href="#" class="active">Home</a>
                <a href="#students"> Students </a>
                <a href="#mentors">Mentors</a>
                <a href="#">  <?php echo $_SESSION['username']; ?>    </a>
                <a href="logout.php">Log Out</a>
            </nav>

        </div>

    </header>

    <!-- header section end-->




    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="container">

            <div class="row align-items-center pt-5">

                <div class="col-md-7">
                    <img src="images/team2.gif" width="100%" alt="">
                </div>


                <div class="col-md-5 content text-center text-md-start pl-md-5">
                   
                    <h3>Welcome to <span>TeamMates</span></h3> <br>
                    <p>Online platform For Finding Perfect Teammates and Mentors At One Place</p>
                    <p>
                      Participate in Hackathons and get some prizes <br> <br>
                      Find Your TeamMates With Us!
                    </p>
                    
                   
                <center>

                    <a href="students.php" class="link-btn">Find Now</a>
                </center>
                </div>
            </div>

        </div>

        

        

        
        <!-- home section ends -->

        
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
          <defs>
              <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
              </defs>
              <g class="wave1">
                  <use xlink:href="#wave-path" x="50" y="3" fill="#35D6ED">
                  </g>
                  <g class="wave2">
                      <use xlink:href="#wave-path" x="50" y="0" fill="#65DDEF">
                      </g>
                      <g class="wave3">
                          <use xlink:href="#wave-path" x="50" y="9" fill="#7AE5F5">
                          </g>
                      </svg>

     
                    </section>
                    
       

    <!-- about section starts  -->

    <h1 class="heading"> _____About <span>Teammates_____</span></h1>

    <section class="about" id="about">

        
        <div class="container">

           



            <div class="row align-items-center flex-wrap-reverse">

               

                <div class="col-md-6 content">

                <center>
                    <h3>Online platform For Finding Hackathon <br> <span> Teammates & Mentors </span></h3>
                    <br>
                    <p>Nowadays, lots of hackathons are going on and hackathons are the best way to improve and showcase student skills. But right now each and every student is busy doing something else. And it becomes very difficult to find a teammates for hackathons. So to solve this problem Teammates will come as a huge help.<br> <br>
                          Your Teammates are just one click away
                    </p> <br>



                    <a href="students.php" class="link-btn"> Find Now</a>

                    </center>
                </div>

                <div class="col-md-6">


                    <img src="images/find.gif" class="w-100" alt="">

                </div>



            </div>

        </div>
   

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3" fill="#35D6ED">
                    </g>
                    <g class="wave2">
                        <use xlink:href="#wave-path" x="50" y="0" fill="#65DDEF">
                        </g>
                        <g class="wave3">
                            <use xlink:href="#wave-path" x="50" y="9" fill="#7AE5F5">
                            </g>
                        </svg>

    </section>

    <!-- about section ends -->

  
  

<!--------------------enthuists-filter-section-ends-------------------------------->


    <section id="students">
      <h1 class="heading"> _____Hackathon <span> Students_____</span> </h1>
        <div class="main-container">
         <div class="filter-container">
            <div class="category-head">
              <ul>
                <div class="category-title active" id="all">
                  <li>All</li>
                </div>
                <div class="category-title" id="web">
                  <li>Web Developer</li>
                </div>
                <div class="category-title" id="app">
                  <li>App Developer</li>
                </div>
                <div class="category-title" id="ml">
                  <li>AI/ML Developer</li>
                </div>
                <div class="category-title" id="ar">
                  <li>AR/VR Developer</li>
                </div>
                <div class="category-title" id="chain">
                  <li>Blockchain Developer</li>
                </div>
              </ul>
            </div>
  
            <div class="posts-collect">
              <div class="posts-main-container">
                <!-----------------------------------------------AR/VR---------------------------------------------------------------------------------------->
                <!-- single post -->
                <div class="all ar">
                  <div class="post-img">
                    <img src="images/g2.png" alt="post" />
                    <span class="category-name">AR/VR</span>
  
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Niya Sharma</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all ar">
                  <div class="post-img">
                    <img src="images/b4.png" alt="post" />
                    <span class="category-name">AR/VR</span>
  
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>abhi sharma</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all ar">
                  <div class="post-img">
                    <img src="images/g6.png" alt="post" />
                    <span class="category-name">AR/VR</span>
  
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Kavya oberoi</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all ar">
                  <div class="post-img">
                    <img src="images/b7.png" alt="post" />
                    <span class="category-name">AR/VR</span>
  
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Krish Goenka</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
  
                <!-----------------------------------------------web---------------------------------------------------------------------------------------->
  
                <!-- single post -->
                <div class="all web">
                  <div class="post-img">
                    <img src="images/g1.png" alt="post" />
                    <span class="category-name">Web</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Nish rana</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all web">
                  <div class="post-img">
                    <img src="images/b1.jpg" alt="post" />
                    <span class="category-name">Web</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Anuj ram</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all web">
                  <div class="post-img">
                    <img src="images/g3.png" alt="post" />
                    <span class="category-name">Web</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Anu Kapadia</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all web">
                  <div class="post-img">
                    <img src="images/b2.png" alt="post" />
                    <span class="category-name">Web</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>mayur shah</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
  
                <!-----------------------------------------------AL/ML---------------------------------------------------------------------------------------->
  
                <!-- single post -->
                <div class="all ml">
                  <div class="post-img">
                    <img src="images/g4.png" alt="post" />
                    <span class="category-name">AI/ML</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Ayushi malik</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all ml">
                  <div class="post-img">
                    <img src="images/b3.png" alt="post" />
                    <span class="category-name">AI/ML</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Aryan roy</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all ml">
                  <div class="post-img">
                    <img src="images/g5.png" alt="post" />
                    <span class="category-name">AI/ML</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Aditi Sharma</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all ml">
                  <div class="post-img">
                    <img src="images/b5.png" alt="post" />
                    <span class="category-name">AI/ML</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Nishant verma</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
  
                <!-----------------------------------------------app---------------------------------------------------------------------------------------->
  
                <!-- single post -->
                <div class="all app">
                  <div class="post-img">
                    <img src="images/g7.png" alt="post" />
                    <span class="category-name">App</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Nilam Rana</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all app">
                  <div class="post-img">
                    <img src="images/b6.png" alt="post" />
                    <span class="category-name">App</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Rishi raina</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all app">
                  <div class="post-img">
                    <img src="images/g8.png" alt="post" />
                    <span class="category-name">App</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>meena git</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all app">
                  <div class="post-img">
                    <img src="images/b8.png" alt="post" />
                    <span class="category-name">App</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Kiran Verma</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
  
                <!-----------------------------------------------chain---------------------------------------------------------------------------------------->
  
                <!-- single post -->
                <div class="all chain">
                  <div class="post-img">
                    <img src="images/g9.png" alt="post" />
                    <span class="category-name">Blockchain</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Trisha Khurana</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all chain">
                  <div class="post-img">
                    <img src="images/b9.png" alt="post" />
                    <span class="category-name">Blockchain</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Krishna pal</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all chain">
                  <div class="post-img">
                    <img src="images/g10.png" alt="post" />
                    <span class="category-name">Blockchain</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Riya khan</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
                <!-- single post -->
                <div class="all chain">
                  <div class="post-img">
                    <img src="images/b10.png" alt="post" />
                    <span class="category-name">Blockchain</span>
                    <div class="share">
                      <a href="#" class="fab fa-github"></a>
                      <a href="#" class="fab fa-twitter"></a>
                      <a href="#" class="fas fa-envelope"></a>
                      <a href="#" class="fab fa-linkedin"></a>
                      <a href="#" class="fas fa-tv"></a>
                    </div>
                  </div>
  
                  <div class="post-content">
                    <div class="post-content-top">
                      <span>Nil Sharma</span>
                    </div>
                  </div>
                </div>
                <!-- end of single post -->
              </div>
            </div>
          </div>
        </div>
      </section>
<!------------------------------enthuists-filter section ends----------------------------------->



 
 
 
 
      <!-------------------------------last-footer--------------------------------------------------->
 
 
<section class="quality">
  <div class="containerstate">
      <div class="row">
          <div class="col-md-4">
              <p>
                  1,000+ <br> Hackathon Enthusiasts
              </p>


          </div>
          <div class="col-md-4">
              <p>
                  500+ <br> Hackathon Mentors
              </p>

          </div>

          <div class="col-md-4">
              <p>
                  4.5+ <br>ratting
              </p>

          </div>
      </div>
  </div>

</section>

<!-------------------------------last-footer-ends------------------------------------------->




    <!-------------------------------mentors section starts--------------------------------->
    
    <section class="experts" id="mentors">

    <h1 class="heading"> _____Hackathon <span> Mentors_____</span> </h1>

        

        <div class="container">

            <div class="d-flex justify-content-center flex-wrap">

                <div class="bod">

                    <div class="mbox">
                        <img src="images/g3.png" alt="">
                        <div class="info">
                            <h3 class="title"> Riya Roy</h3>
                            <span class="post">App Developer</span>
                            <div class="icon">
                            <a href="#" class="fab fa-github"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                    <div class="mbox">
                        <img src="images/b2.png" alt="">
                        <div class="info">
                            <h3 class="title"> Kunal kumar</h3>
                            <span class="post">Web Developer</span>
                            <div class="icon">
                            <a href="#" class="fab fa-github"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                    <div class="mbox">
                        <img src="images/g2.png" alt="">
                        <div class="info">
                            <h3 class="title"> Shri Das</h3>
                            <span class="post">Blockchain</span>
                            <div class="icon">
                            <a href="#" class="fab fa-github"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                    <div class="mbox">
                        <img src="images/b5.png" alt="">
                        <div class="info">
                            <h3 class="title"> Manas Pawar </h3>
                            <span class="post">AI/ML</span>
                            <div class="icon">
                            <a href="#" class="fab fa-github"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                        <a href="#" class="fab fa-instagram"></a>
                            </div>
                        </div>
                    </div>


                </div>

                <center>
                    <a href="mentors.php" class="link-btn"> View All</a>
                </center>

            </div>

        </div>

    </section>

    <!------------------------------mentors section ends------------------------------------->

    <!-----------------------------review-starts-------------------------------------------------------> 



    <!------------------------review-section------------------------------------->
   
    <h1 class="heading"> _____What Students Say About <span> TeamMates_____</span> </h1>
    <section class="containerrev" id="review">
    
      <div class="card">
        <div class="bg-image">
          <img src="images/reviewbg.gif" alt="" />
        </div>

        <div class="pic">
          <img src="images/boy11.png" alt="" />
        </div>
        <div class="info">
          <h3>Naman Roy</h3>
          <p>
            TeamMates is easy to use platform where you can find perfect teammates and mentors for hackathons very easily.
          </p>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
        </div>
      </div>

      <div class="card">
        <div class="bg-image">
          <img src="images/reviewbg.gif" alt="" />
        </div>

        <div class="pic">
          <img src="images/g9.png" alt="" />
        </div>
        <div class="info">
          <h3>Siya Kumar</h3>
          <p>
            TeamMates is a guidebook for those who don't know anything about hackathons. It is the best platform to find teammates. 

            
          </p>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
        </div>
      </div>

      <div class="card">
        <div class="bg-image">
          <img src="images/reviewbg.gif" alt="" />
        </div>

        <div class="pic">
          <img src="images/boy13.png" alt="" />
        </div>
        <div class="info">
          <h3>Manas Das</h3>
          <p>
            TeamMates had helped me to get connected with my awesome teammate and we got first prize in that hackathon.

          </p>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star"></i> </span>
          <span> <i class="fas fa-star-half-alt"></i> </span>
        </div>
      </div>
    </section>
  </section>

  <!-- review section ends -->


    <!-----------------------------review-ends-------------------------------------------------------> 
   





   

    <!-- blogs section starts  -->
   
    <section class="blogs" id="blogs">

    <h1 class="heading"> _____Blogs Written By<span> Hackathon Winners_____ </span> </h1>

        

        <div class="container">

            <div class="d-flex justify-content-center flex-wrap">

                <div class="box p-3 m-2">
                    <div class="image">
                        <img src="images/blog1.gif" class="w-100 h-100" alt="">
                    </div>
                    <div class="content p-2">
                        <h3>All Information Realated to Hackathons</h3>
                        <a href="#" class="link-btn">read more</a>
                        <div class="icons">
                            <a href="#"><i class="fas fa-user"></i> meera roy</a>
                            <a href="#"><i class="fas fa-calendar"></i>01 aug, 2020</a>
                        </div>
                    </div>
                </div>

                <div class="box p-3 m-2">
                    <div class="image">
                        <img src="images/blog2.gif" class="w-100 h-100" alt="">
                    </div>
                    <div class="content p-2">
                        <h3>Hackathon Winning Tips For Everyone</h3>
                        <a href="#" class="link-btn">read more</a>
                        <div class="icons">
                            <a href="#"><i class="fas fa-user"></i>tushar gupta</a>
                            <a href="#"><i class="fas fa-calendar"></i>05 jun, 2021</a>
                        </div>
                    </div>
                </div>

                <div class="box p-3 m-2">
                    <div class="image">
                        <img src="images/blog3.gif" class="w-100 h-100" alt="">
                    </div>
                    <div class="content p-2">
                        <h3>How to present your idea in Hackathon</h3>
                        <a href="#" class="link-btn">read more</a>
                        <div class="icons">
                            <a href="#"><i class="fas fa-user"></i> jay raj</a>
                            <a href="#"><i class="fas fa-calendar"></i>10 april, 2021</a>
                        </div>
                    </div>
                </div>
                <div class="box p-3 m-2">
                    <div class="image">
                        <img src="images/blog4.gif" class="w-100 h-100" alt="">
                    </div>
                    <div class="content p-2">
                        <h3>Time Management during hackathons</h3>
                        <a href="#" class="link-btn">read more</a>
                        <div class="icons">
                            <a href="#"><i class="fas fa-user"></i> Shree singh</a>
                            <a href="#"><i class="fas fa-calendar"></i>10 april, 2021</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- blogs section ends -->






    <!--  Footer -->
  <footer id="footer">
    <video
    class="edit"
    src="images/footer.mp4"
    id="video-footer-slider"
    loop
    autoplay
    muted
    width="100%"
    height="100%"
  ></video>
    <div class="container">
      <h3>TeamMates</h3>
      <!---------------------------------------------------------------------------------------------
      <p style="font-size: 16px;"> A platform For Finding Teammates and Mentors at one place</p>    ---->

      <div class="footlink">
        <a href="#home">Home</a>
        <a href="#students">Students</a>
        <a href="#mentors">Mentors</a>
        <a href="#about">About</a>
        <a href="#review">Reviews</a>
        <a href="#blogs">Blogs</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
      </div> <br>
      
      <div class="copyright">
        &copy;All Rights Reserved
      </div>
    </div>
  </footer>

  
  
  <!-- End Footer -->




  

    <!-- js file link  -->
    <script src="js/script.js"></script>
    <script src="js/script1.js"></script>

</body>

</html>
