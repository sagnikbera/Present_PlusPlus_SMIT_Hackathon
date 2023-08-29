<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link class="logo" rel="icon" type="image/png" href="assets/images/logo.jpg"/>
    <title>present++(student)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css"> 
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!-- <title>Document</title> -->
</head>
<body>
    <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4><em>Register now</em> if you are not register with your <em>unique face id</em></h4>

              <div class="col-md-12" style="display: flex; justify-content: center;">
                <fieldset>
                  <button type="submit" style="background-color: #f5a425;
                  color: #fff;
                  font-size: 13px;
                  text-transform: uppercase;
                  letter-spacing: 0.5px;
                  font-weight: 700;
                  padding: 12px 20px;
                  display: inline-block;
                  outline: none;
                  box-shadow: none;
                  border: none;"><a href="register.php" class="external" style="color: white;">Register Now</a></button>
                </fieldset>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6><em>Log In if you have already registered</em></h6>
            </div>
            <!-- <form id="contact" action="login.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="email" class="form-control" id="email" placeholder="User Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required="">
                  </fieldset>
                </div>
                
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Login</button>
                  </fieldset>
                </div>
              </div>
            </form> -->
            <form id="login-form" onsubmit="hi()">
              <input type="email" name="email" id="email" placeholder="Email" required>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <button  type="submit">Login</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i>Team - <u><i> "KGEC_Unknown" </i></u>: Pioneering Innovation Beyond Limits in the Hackathon Realm!
          
           <!-- | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">KGEC_Unknown</a></p> -->
        </div>
      </div>
    </div>
  </footer>


  <!-- just try -->
  <!-- <button id="captureButton">Capture Screenshot</button> -->


</body>
</html>




<script>
 function hi(){
  // alert("hi");
  event.preventDefault();
          var email=document.getElementById("email").value;
          var pass=document.getElementById("password").value;
          $.ajax({
              type: "POST",
              url: "./login.php",
              data: {email:email,password:pass},
              // dataType: {},
              success: function (response) {
                console.log(response);
                  // $("#message").text(response.message).css("color", response.success ? "green" : "red");
                  if(response!=0){
                    // localstorage.setItem
                    localStorage.setItem("userid", response);
                    alert("login successful");
                    if(response>5){

                      window.location.replace("./profile.php");
                    }
                    else{
                      window.location.replace("../admin/index.php");

                    }
                  }
                  else{
                    alert("Wrong Credentials");

                  }
              }
          });
 }
</script>

<!-- <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<script>
    document.getElementById("captureButton").addEventListener("click", function() {
        // Capture the entire body of the webpage
        html2canvas(document.body).then(function(canvas) {
            // Convert canvas to image and display or save it
            var img = document.createElement("img");
            img.src = canvas.toDataURL("image/png");
            newfolder = myObject.CreateFolder ("./ssimage");
        
            saveButton.href = signaturePad.toDataURL();
            saveButton.download = img.src;
            // Create a new window to display the screenshot
           // var screenshotWindow = window.open();
           // screenshotWindow.document.write('<img src="' + img.src + '" alt="Screenshot">');
        });
    });
    </script>
     -->