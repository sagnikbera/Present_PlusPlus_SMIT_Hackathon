<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link class="logo" rel="icon" type="image/png" href="assets/images/logo.jpg"/>
    <title>present++(student)</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc;margin-top:400px }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
      <div class="row" style="justify-content: center;">
        <div class="col-md-5" >
          <div class="right-content">
            <div class="top-content">
              <h6>Fill your details to be registered</h6>
            </div>
            <form id="contact"method="POST" action="addstudent.php">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="course" type="text" class="form-control" id="course" placeholder="Department" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="year" type="text" class="form-control" id="year" placeholder="Year" required="">
                  </fieldset>
                </div>
             
                <div class="col-md-12">
                  <fieldset>
                    <input name="pass" type="password" class="form-control" id="pass" placeholder="Create Password" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <h9 style="color: aliceblue; font-size: 14px;">Security question: What is your favourite pet ?</h9>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="secans" type="text" class="form-control" id="secans" placeholder="Please answer" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <h9 style="color: aliceblue; font-size: 14px;">Add your face id</h9>
                </div>
                <div onClick="startcapture()" type="button" class="col-md-12" style="display: flex; justify-content: center;">
                  <fieldset style="width: 40px;">
                    <input name="k" type="button" id="image" src="https://png.pngtree.com/png-clipart/20190705/original/pngtree-blue-camera-button-cirlce-png-image_4255760.jpg" placeholder="Add your face id" required="">
                  </fieldset>
                </div>
                <!-- <div id="results">Your captured image will appear here...</div> -->
                <div class="container">
   
    <!-- <form method="POST" action="storeImage.php"> -->
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
        
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results" style="width:100%"></div>
            </div>
            <div class="col-md-12 text-center">
                <br/>
            </div>
        </div>
    <!-- </form>s -->
</div>

                
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">Register</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- footer -->
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

     <script>
      function startcapture(){
        Webcam.set({
       
        width: 338,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
      }
      function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
    
       function hi(){
  // alert("hi");
  event.preventDefault();
          var email=document.getElementById("email").value;
          var pass=document.getElementById("pass").value;
          var year=document.getElementById("year").value;
          var course=document.getElementById("course").value;
          var secans=document.getElementById("secans").value;
          var name=document.getElementById("name").value;
          $.ajax({
              type: "POST",
              url: "./addstudent.php",
              data: {email:email,pass:pass,name:name,year:year,secans:secans,course:course,imgpath:"to be done"},
              // dataType: {},
              success: function (response) {
                console.log(response);
                  // $("#message").text(response.message).css("color", response.success ? "green" : "red");
                  if(response==1){

                    alert("Registration successful");
                  }
                  else{
                    alert("Wrong Details");

                  }
              }
          });
 }

     </script>