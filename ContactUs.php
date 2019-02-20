<?php
if ($_POST["submit"]) 
                    {
                        if (!$_POST['name']) {
                            $error="<br />Please enter your name";
                        }
                        if (!$_POST['email']) {
                          $error.="<br />Please enter your email address";
                        }
                        if (!$_POST['message']) {
                          $error.="<br />Please enter a message";
                        }
                        if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $error.="<br />Please enter a valid email address";
                        }
                        if ($error) { $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
                        } else { 
                            if (mail("danish.mithani@somaiya.edu", "Message from website!", "Name: ". $_POST['name']."
                                                                                    Email: ".$_POST['email']."
                                                                                    Comment: ".$_POST['comment'])) {
                                $result='<div class="alert alert-success"><strong>Thank you!</strong> We\'ll be in touch.</div>';
                            } else {
                                $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
                            }  
                        }
                    }
?>

<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aeronotics Team of kjsce ">
    <meta name="author" content="Team Onyx">
    <!-- <link rel="onyx logo" href="images/ONYX_LOGO_ICON.ico"  type="image/x-icon" /> -->
    <link rel="icon" href="IMAGES/ONYXLOGO.png"   type="image/png"  /> 
    <title>TEAM ONYX</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Custom CSS -->
    <link rel="stylesheet" href="mycss.css">
    <!-- font awesome -->
    <link eel="text/sttylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- bootstrap javascript component -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- link to  javascript -->
    <!--<script src="javascript/myjavascript.js"  type="text/javascript"></script>-->
     <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
    section {margin:0; padding:0px}
    /*GMAP STYLES */
    .gmap-area {
  background-image: url("https://s7.qtrpages.info/combine/../themes/jtherczeg-corlate/assets/images/map.jpg");
  background-position: 0 0;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 40px 0;margin:0;
}

.gmap-area .gmap iframe {
  border-radius: 20%;
  height: 480px;
  width: 500px;
}

.gmap{
    border: 10px solid #f6f5f0;
    border-radius: 20%;
    height: 500px;
    width: 500px;
    box-shadow: 0px 0px 3px 3px #e7e4dc;
    overflow: hidden;
    position: relative;
    margin: 0 auto;
}

.gmap-area .map-content ul {
  list-style: none; 
}

.gmap-area .map-content address h5{
  font-weight: 700;
  /* font-size: 16px; */
}
#contact h1,h2,h3,p {
  margin:0 0 30px 0;
  font-family: 'Patua One', cursive;
  text-transform: uppercase;
  letter-spacing:1px;
}

#contact p{
  margin:0 0 25px;
  font-size:18px;
  line-height:1.6em;
  font-family: 'Patua One', cursive;
}
#contact a{
  color:#26a5d3;
}
#contact a:hover,a:focus{
  text-decoration:none;
  color:#26a5d3;
}

#contact{
  background:#333333;
  color:#f4f4f4;
  padding-bottom:80px;
}
#contact label {
  font-family: 'Patua One', cursive;
  font-size:1.5em;
}

#contact textarea.form-control{
    height:100px;
}
.list-inline li {margin-top:5px;}
.media {display:inline-block;}
.list-inline .btn {width:150px;}

@media screen and (max-width: 720px){
.gmap{height:300px;width:300px;}

.gmap-area .gmap iframe {
  border-radius: 20%;
  height: 280px;
  width: 300px;
}

}


    </style>

  </head>
<body>
    <!-- div for navbar-->
    <section>
    <div>
      <nav class="navbar mynav navbar-default navbar-fixed-top " role="navigation">
        <div class="container-fluid" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar" >
              <span class="sr-only" >Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="http://www.somaiya.edu/kjsce" class="navbar-brand"  target="_blank"> 
              <img src="IMAGES-copyyy'/svv_logo2.png" class="navimgsize" alt="kjsce logo">
            </a>
            <a href="#" class="navbar-brand" >
              <img src="IMAGES/ONYXLOGO.png" class="navimgsize" alt="Team onyx logo">
            </a>
          </div>
          <div id="mynavbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav navbar-right nav_right_style"  >
              <li ><a href="index.html">Home</a></li>
              <li ><a href="AboutUS.html">About US</a></li>
              <!-- <li><a href="OurTeam.html">Our Team</a></li> -->
              <li><a href="projects.html">Our Projects</a></li>
              <li><a href="Sponsers.html">Sponsers</a></li>
              <li class="active"><a href="#">Contact</a></li>
            </ul>
          </div>

        </div>
      </nav>   
    </div>
    </section>
    <!-- end navbars -->
    <!-- Google maps -->

<div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="gmap">
                            <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.787241671583!2d72.89763341480239!3d19.07308975702058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c627a20bcaa9%3A0xb2fd3bcfeac0052a!2sK.J.+Somaiya+College+Of+Engineering!5e0!3m2!1sen!2sin!4v1503924034565" frameborder="0"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-6 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <span>
    <h3 style="padding:5px; margin:0;"><i class="fa fa-map-marker" aria-hidden="true" style="color: black !important;" ></i> Team Onyx</h3>
    
  Room No: 20, Aryabhatta building,<br/>
  K. J. Somaiya College of Engineering<br />
  Vidyavihar East<br/>
  Mumbai - 400077.<hr /></span>
     <span> 
    <h3 style="padding:5px; margin:0;"><i class="fa fa-envelope-o" aria-hidden="true" style="color: black !important;" ></i> Email Us:</h3>
    teamonyxindia@gmail.com<br />
    teamonyxindia.engg@somaiya.edu<br/>samruddha.gawande@onyxindia.co.in<hr /></span>
        <span>

    <h3 style="padding:5px; margin:0;"> <i class="fa fa-phone" aria-hidden="true" style="color: black !important;" ></i> Contact US </h3>
    +91 1234567890<br/>
    +91 1234567890<br/>+91-9769207557<br />
    </span>
                                </address>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <!-- COSNTACT INFO -->
    <section >
    <div class="row">
        <!-- Contact form -->
         <div class="col-md-12">
          


          <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div style="padding:20px;">
              <h2>Contact Us</h2>
              <p>Feel free to Shout Out by filling the contact form or visiting our social network sites.</p>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php echo $result; ?>  
                    <form class="form-horizontal" method="post">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Jane Doe" value="<?php echo $_POST['name']; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input name="email" type="email" class="form-control" placeholder="jane.doe@example.com" value="<?php echo $_POST['email']; ?>" >
                    </div>
                    <div class="form-group ">
                      <label for="message">Your Message</label>
                     <textarea  class="form-control"  name="message"><?php echo $_POST['message']; ?></textarea> 
                    </div>
                    <input value="Send Message" type="submit" name="submit" class="btn btn-default" />
                  </form>
                  <hr>
                    <h3>Our Social Sites</h3>
                    <ul class="list-inline banner-social-buttons">
                    <li><div class="media"><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter" style="color:#00b6f1"> <span class="network-name" style="color:black"> Twitter</span></i></a></div></li>
                    <li><div class="media"><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook" style="color:#3b5998"></i> <span class="network-name" style="color:black"> Facebook</span></a></div></li>
                    <li><div class="media"><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play" style="color:#ff0000"> <span class="network-name" style="color:black"> Youtube</span></i></a></div></li>
                    <li><div class="media"><a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram" style="color:#c32aa3"> <span class="network-name" style="color:black"> Instagram</span></i></a></div></li>
                    <li><div class="media"><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin" style="color:#007bb6"> <span class="network-name" style="color:black"> LinkedIn</span></i></a></div></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section>


          </div>
          </div>
        </section>
  <!-- start footer -->
 
 <!-- end footer -->

    </body>
</html>
