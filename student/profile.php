<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    <link class="logo" rel="icon" type="image/png" href="assets/images/logo.jpg" />
    <title>present++(student)</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
</head>

<body>


    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="#" class="logo"><img src="assets/images/logo.jpg" alt="Logo"></a>
            <a href="#"><em>present</em> ++</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <!-- <a href="#" class="logo"><img src="assets/images/logo.jpg" alt="Logo"></a> -->
            <ul class="main-menu">
                <li><a href="#section1">Home</a></li>
                <li class="has-submenu"><a href="#section10">Department</a>
                    <ul class="sub-menu">
                        <li style="text-align:center"><a href=""><strong>CSE</strong></a></li>
                        <li style="text-align:center"><a href=""><strong>ECE</strong></a></li>
                        <li style="text-align:center"><a href=""><strong>IT</strong></a></li>
                        <li style="text-align:center"><a href=""><strong>EE</strong></a></li>
                        <li style="text-align:center"><a href=""><strong>ME</strong></a></li>

                        <!-- <li><a href="">Civil</a></li>
            <li><a href="">BCA/MCA</a></li>
            <li><a href="">MBA</a></li> -->
                    </ul>
                </li>
                <li class="has-submenu"><a href="#section5">Notice</a>
                    <ul class="sub-menu">


                    <?php
                                                                            include("./config.php");
                                                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                                                            // Check connection
                                                                            if ($conn->connect_error) {
                                                                                die("Connection failed: " . $conn->connect_error);
                                                                            }
                                                                            // $p=$grpname;
                                                                            $sql = "SELECT * FROM notice ";
                                                                            $result = $conn->query($sql);
                                                                            $p="";
                                                                            if ($result->num_rows > 0) {
                                                                                // output data of each row

                                                                                
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    // $userid=$row["userid"];
                                                                                    
                                                                            
                                                                                    $p=$p.' 
                                                                          <li style="color:white"><a >'.$row["topic"].'</a></li>
                                                                                      
                                                                                ';
                                                                                }
                                                                            
                                                                            } else {
                                                                                echo "NO Leave Requests";
                                                                                // $p=-1;
                                                                            }
                                                                            echo $p;
                                                                            
                                                                        
                                                                            $conn->close();
                                                                        
                                                                            
                                                                            ?>

                        
                    </ul>
                </li>
                <li><a href="#section4">Schedule</a>
                    <!-- <ul class="sub-menu">
            <li><a href="#section2">Who we are?</a></li>
            <li><a href="#section3">What we do?</a></li>
            <li><a href="#section3">How it works?</a></li>
            <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
          </ul> -->
                </li>
                <!-- <li><a href="#section4">Notice</a></li> -->
                <!-- <li><a href="#section5">Video</a></li> -->
                <!-- <li><a href="#section6">Contact</a></li> -->
                <li class="has-submenu"><a href="#section5">Profile</a>
                    <ul class="sub-menu">

                    <?php
                                                                            include("./config.php");
                                                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                                                            // Check connection
                                                                            if ($conn->connect_error) {
                                                                                die("Connection failed: " . $conn->connect_error);
                                                                            }
                                                                            // $userid=  echo "<script>document.writeln(localStorage.getItem(`userid`));</script>";
                                                                            // $p=$grpname;
                                                                            $userid=12;
                                                                            $sql = "SELECT * FROM users WHERE userid='$userid' ";
                                                                            $result = $conn->query($sql);
                                                                            $p="";
                                                                            if ($result->num_rows > 0) {
                                                                                // output data of each row

                                                                                
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    // $userid=$row["userid"];
                                                                                    
                                                                            
                                                                                    $p=$p.' 
                        <li><a href="#">Name:'.$row["name"].'</a></li>
                        <li><a href="#">Email:'.$row["email"].'</a></li>
                        <li><a href="#">Dept:'.$row["course"].'</a></li>
                        <li><a href="#">Year:'.$row["year"].'</a></li>
                        <li style="color:white"><a onclick="lreq('.$row["userid"].')">Make Leave Request</a></li>
                        <li><a href="index.php" onclick="logout()">Log Out</a></li>

                                                                                      
                                                                                ';
                                                                                }
                                                                            
                                                                            } else {
                                                                                echo "NO Leave Requests";
                                                                                // $p=-1;
                                                                            }
                                                                            echo $p;
                                                                            
                                                                        
                                                                            $conn->close();
                                                                        
                                                                            
                                                                            ?>


                     </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>now track your attendence, much easier</h6>
                <h2><em>attendence</em> tracker</h2>
                <div class="main-button">
                    <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-pencil"></i>Facial Recognition</h4>
                            </div>
                            <div class="content-hide">
                                <p>Facial recognition for attendance automates tracking by capturing and analyzing
                                    facial features. It enhances efficiency in any institution.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post second-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>lecture schedule</h4>
                            </div>
                            <div class="content-hide">
                                <p>The Lecture Schedule outlines class dates, times, and topics. It guides students in
                                    managing their time, preparing for discussions, and staying on track with
                                    coursework.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section3">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-book"></i>your data security</h4>
                            </div>
                            <div class="content-hide">
                                <p>Data security safeguards students' personal and academic information. It involves
                                    encryption, access controls, and regular audits to prevent unauthorized access or
                                    breaches.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a posuere imperdiet.</p>
                                <!-- <div class="scroll-to-section"><a href="#section4">Read More</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section why-us" data-section="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Why you should choose Present++</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id='tabs'>
                        <ul>
                            <li><a href='#tabs-1'>Facial Recognition</a></li>
                            <li><a href='#tabs-2'>Attendence Analytics</a></li>
                            <li><a href='#tabs-3'>Data Security</a></li>
                        </ul>
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-01.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Facial Recognition</h4>
                                        <p>Facial recognition is an advanced technology that identifies individuals by
                                            analyzing and comparing unique facial features. It involves capturing an
                                            image or video of a person's face and extracting key facial landmarks, such
                                            as distance between eyes, nose shape, and jawline.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-02.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Attendence Analytics</h4>
                                        <p>Attendance analytics involves analyzing attendance data to gain insights into
                                            patterns, trends, and student engagement. By tracking attendance rates,
                                            tardiness, and absenteeism, institutions can identify at-risk students,
                                            evaluate course effectiveness, and optimize resources. This data aids in
                                            making informed decisions to enhance learning experiences and tailor
                                            interventions. However, balancing data use with privacy concerns is crucial
                                            to ensure ethical and responsible handling of attendance-related
                                            information.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-03.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Data Security</h4>
                                        <p>We have implemented encryption, access controls, and regular audits to
                                            protect student records. Understanding privacy settings on educational
                                            platforms and social media helps students control their digital footprint.
                                            Staying informed about data policies and reporting any suspicious activity
                                            ensures a safe online learning environment, fostering trust and responsible
                                            data handling among students.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section courses" data-section="section4">
        <div class="container-fluid"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Your Lecture Schedule</h2>
                </div>
            </div>

            <div class="owl-carousel owl-theme">
                <!-- 1 -->
                

                <?php
                                                                            include("./config.php");
                                                                            $conn = new mysqli($servername, $username, $password, $dbname);
                                                                            // Check connection
                                                                            if ($conn->connect_error) {
                                                                                die("Connection failed: " . $conn->connect_error);
                                                                            }
                                                                            // $p=$grpname;
                                                                            $sql = "SELECT * FROM lecture ";
                                                                            $result = $conn->query($sql);
                                                                            $p="";
                                                                            if ($result->num_rows > 0) {
                                                                                // output data of each row
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $userid=$row["userid"];
                                                                                    
                                                                            if($row["status"]==0 ){
                                                                              if($row["start"]==0 ){
                                                                              

                                                                                $p=$p.'<div class="item">
                                                                                <img src="assets/images/courses-01.jpg" alt="Course #1">
                                                                                <div class="down-content">
                                                                                    <h4>'.$row["subject"].'</h4>
                                                                                    <p>'.$row["topic"].'-'.$row["date"].'-'.$row["time"].'</p>
                                                                                    <div class="author-image">
                                                                                        <img src="assets/images/author-01.png" alt="Author 1">
                                                                                    </div>
                                                                                    <div class="text-button-pay">
                                                                                        <a ><em>Not Started Yet</em><i class="fa fa-angle-double-right"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                            
                                                                            ';
                                                                              }
                                                                              else{
                                                                              

                                                                                  $p=$p.'<div class="item">
                                                                                  <img src="assets/images/courses-01.jpg" alt="Course #1">
                                                                                  <div class="down-content">
                                                                                      <h4>'.$row["subject"].'</h4>
                                                                                      <p>'.$row["topic"].'-'.$row["date"].'-'.$row["time"].'</p>
                                                                                      <div class="author-image">
                                                                                          <img src="assets/images/author-01.png" alt="Author 1">
                                                                                      </div>
                                                                                      <div class="text-button-success">
                                                                                          <a onclick="giveatt()"><em>Live(give attendance)</em><i class="fa fa-angle-double-right"></i></a>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                              
                                                                              ';
                                                                                
                                                                               
                                                                              }
                                                                             

                                                                              
                                                                            }
                                                                            else{
                                                                              
                                                                              $p=$p.'<div class="item">
                                                                              <img src="assets/images/courses-01.jpg" alt="Course #1">
                                                                              <div class="down-content">
                                                                                  <h4>'.$row["subject"].'</h4>
                                                                                  <p>'.$row["topic"].'-'.$row["date"].'-'.$row["time"].'</p>
                                                                                  <div class="author-image">
                                                                                      <img src="assets/images/author-01.png" alt="Author 1">
                                                                                  </div>
                                                                                  <div class="text-button-pay">
                                                                                      <a><em>Completed</em><i class="fa fa-angle-double-right"></i></a>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                          
                                                                          ';
                                                                            }
                                                                                }
                                                                            
                                                                            } else {
                                                                                echo "NO Leave Requests";
                                                                                // $p=-1;
                                                                            }
                                                                            echo $p;
                                                                            
                                                                        
                                                                            $conn->close();
                                                                        
                                                                            
                                                                            ?>

                <!-- 
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Business World</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Media Technology</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Communications</h4>
              <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4>Business Ethics</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4>Photography</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="">
            <div class="down-content">
              <h4>Web Development</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="">
            <div class="down-content">
              <h4>Learn HTML CSS</h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="">
            <div class="down-content">
              <h4>Social Media</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4>Digital Arts</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4>Media Streaming</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div> -->
            </div>
        </div>
        </div>
    </section>


    <!-- <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video to learn more <em>about Grad School</em></h4>
            <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> for details.
            <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>
            <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Power HTML Template</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img src="assets/images/main-thumb.png"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section> -->

    <!-- <section class="section courses" data-section="section5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>See Your Notice</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="Course #1">
            <div class="down-content">
              <h4>Digital Marketing</h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="Author 1">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
        <div class="item">
            <img src="assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
              <h4>Business World</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="Author 2">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Media Technology</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="Author 3">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Communications</h4>
              <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="Author 4">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4>Business Ethics</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4>Photography</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="">
            <div class="down-content">
              <h4>Web Development</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-02.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="">
            <div class="down-content">
              <h4>Learn HTML CSS</h4>
              <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>
              <div class="author-image">
                <img src="assets/images/author-03.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="">
            <div class="down-content">
              <h4>Social Media</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-04.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <h4>Digital Arts</h4>
              <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>
              <div class="author-image">
                <img src="assets/images/author-05.png" alt="">
              </div>
              <div class="text-button-free">
                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="">
            <div class="down-content">
              <h4>Media Streaming</h4>
              <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>
              <div class="author-image">
                <img src="assets/images/author-01.png" alt="">
              </div>
              <div class="text-button-pay">
                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
              </div>
            </div>
          </div> -->
    </div>
    </div>
    </div>
    </section>



   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i>Team - <u><i> "KGEC_Unknown" </i></u>: Pioneering Innovation
                        Beyond Limits in the Hackathon Realm!

                        <!-- | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">KGEC_Unknown</a></p> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      function lreq(u){
        var c=prompt("cause of leave","sickness");
        var d=prompt("date of leave","28-08-2023");
        $.ajax({
              type: "POST",
              url: "./addleave.php",
              data: {cause:c,date:d,userid:u},
              // dataType: {},
              success: function (response) {
                alert("leave request added");
                }
          });
      }
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                    scrollTop: reqSectionPos
                },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function () {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                        siblings().removeClass('active');
                }
            });
        };
        function logout(){
          location.replace("index.php");
        }
        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
            if ($(e.target).hasClass('external')) {
                return;
            }
            e.preventDefault();
            $('#menu').removeClass('active');
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
        function giveatt(){
          // window.location.replace("./facialrecognition/index.php");
          location.href="http://127.0.0.1:5500/index.html";
        }
    </script>
</body>

</html>