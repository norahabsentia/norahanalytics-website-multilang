<!DOCTYPE html>
<html lang="en"> 
<?php
if(isset($_POST['mail'])) {

	// EDIT THE 2 LINES BELOW AS REQUIRED
	$email_to = "info@norahai.com";
	$email_subject = "Your email subject line";

	function died($error) {
		// your error code can go here
		echo "We are very sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}


	// validation expected data exists


	

	$first_name = $_POST['first']; // required
	$last_name = $_POST['last']; // required
	$email_from = $_POST['mail']; // required
	$telephone = $_POST['comp']; // not required
	$comments = $_POST['sms']; // required

	$error_message = "";


	$email_message = "Form details below.\n\n";

	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}

	

	$email_message .= "First Name: ".clean_string($first_name)."\n";
	$email_message .= "Last Name: ".clean_string($last_name)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Company Name: ".clean_string($telephone)."\n";
	$email_message .= "Message: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
echo "<script> alert('We will contact you soon!!!'); </script>";
?>

<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.

<?php

}
?>
<head>
    <title>Norah Analytics</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
	<script>
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
	</script>
<Style>
form {
  position: relative;
  width: auto;
  margin: 0 auto;

  padding: 20px 22px;
 

}

form input, form button, form textarea{
  width: 212px;
  border: 1px solid;
  border-bottom-color: rgba(255,255,255,.5);
  border-right-color: rgba(60,60,60,.35);
  border-top-color: rgba(60,60,60,.35);
  border-left-color: rgba(80,80,80,.45);
  background-color: rgba(0,0,0,.2);
  background-repeat: no-repeat;
  padding: 8px 24px 8px 10px;
  font: bold .875em/1.25em "Open Sans Condensed", sans-serif;
  letter-spacing: .075em;
  color: #fff;
  text-shadow: 0 1px 0 rgba(0,0,0,.1);
  margin-bottom: 19px;
}

form input:focus { background-color: rgba(0,0,0,.4); }

form input.email, form textarea {
   

    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAMCAYAAAC9QufkAAAAGXRFW…+gAsZExrMZVP0fmGZ1IjWiBCoL0NsXgPgGGcnzLECAAQD5y8iZ2Z69IwAAAABJRU5ErkJggg==);
    background-position: 220px 10px;
    background-color: grey;
    opacity: 0.6;
    padding-right: 27px;
    width: 292px;
    margin-left: 58px;
    text-align: center;
}

form input.pass, form textarea {
  background-position: 223px 8px
}

::-webkit-input-placeholder { color: #ccc; text-transform: uppercase; }
::-moz-placeholder { color: #ccc; text-transform: uppercase; }
:-ms-input-placeholder { color: #ccc; text-transform: uppercase; }

form button[type=submit] {
  width: 248px;
  margin-bottom: 0;
  
  letter-spacing: .05em;
  text-shadow: 0 1px 0 #133d3e;
  text-transform: uppercase;
 
  border-top-color: #9fb5b5;
  border-left-color: #608586;
  border-bottom-color: #1b4849;
  border-right-color: #1e4d4e;
  cursor: pointer;
}
@media screen and (max-width: 450px)  {
    
    #abc
    {
        width:75%;
    }

    .abc
    {
        width:75%;
        
    }
    
}
@media screen and (min-width: 450px)  {
    
    #abc
    {
        width:657px;
    }

    .abc
    {
        width:657px;
        
    }
    
}

</style>
</head> 

<body class="home-page">   
    <!-- ******HEADER****** --> 
    <header id="header" class="header navbar-fixed-top">  
        <div class="container">       
            <h1 class="logo">
                <a href="index.php"><span class="text">NORAH Analytics</span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar navbar-right navbar-inverse navbar-expand-md" role="navigation">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a class="nav-link" href="index.php">Home</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Product <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#dynamicpricing">Dynamic Pricing</a>
								<a class="dropdown-item" href="#churn">Churn Prediction</a>
								<a class="dropdown-item" href="#custom">Custom Notification</a>
							  </div>                            

							  </li><!--//dropdown-->                         
                        <li class="nav-item"><a class="nav-link" href="resources.php">Resources</a></li>
							  <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                           <li class="nav-item"><a class="nav-link" href="contactus.php">Contact us</a></li>
                        <center>
                        <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" href="#demo">Request for Demo</a></li></center>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="up" class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1"></li>

            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->        
    
    <section class="promo section section-on-bg">
        <div class="container text-center">                
            <h2 class="title">Boost your Game Revenues and Player Engagement<br />with Norah Analytics!</h2>
            <p class="intro"></p>
            <a class="btn btn-cta btn-cta-primary" href="#demo">Request for Demo</a>
        </div><!--//container-->
    </section><!--//promo-->
    
    <div id="test" class="sections-wrapper">   
     
        <!-- ******Why Section****** -->
        <section id="why" class="section why">
            <div class="container">
   
                <div id="dynamicpricing"  class="row item">
                    <div class="content col-12 col-lg-4 order-lg-12">
				<br>
                        <h3 class="title" style="font-weight:600;">Dynamic Pricing</h3>
                        <div class="desc">
                            <p>Different players react to different pricing at different times. Maximize in-app purchase
revenues by charging custom prices to each player by using deep learning and predictive
analysis.</p>
							  <p><a class="btn btn-cta btn-cta-primary" href="dynamic.php">Learn More</a>
							   <a class="btn btn-cta btn-cta-primary" href="#demo">Request Demo</a></p> 
                        </div>
                                             
                    </div><!--//content-->
    <figure class="figure col-12 col-lg-7 order-lg-1">
                        <img class="img-fluid" src="6.png" alt="" />
                   </figure>
                </div><!--//item-->
                
                <div id="churn" class="row item">
             <div class="content col-12 col-lg-4">
			 	<br>
				
                        <h3 class="title" style="font-weight:600;">Churn Prediction</h3>
                        <div class="desc">
                            <p>
Predict churn to gain insights that empower you to deliver engagement strategies. Use well-
crafted marketing campaigns to retain customers.</p>
		  <p><a class="btn btn-cta btn-cta-primary" href="churn.php">Learn More</a> 
                      <a class="btn btn-cta btn-cta-primary" href="#demo">Request Demo</a></p> 
                        </div>
                        
                     <!--//quote-->                        
                    </div><!--//content-->
                  <figure class="figure offset-lg-1 col-12 col-lg-7">
                        <img class="img-fluid" src="7.png" alt="" />
                        <div class="control text-center">
                       </div><!--//control-->
                    </figure>
                </div><!--//item-->
                
                <div id="custom" class="row item ">
                     <div class="content col-12 col-lg-4 order-lg-12" style="padding-left:40px;">
				<br>
                        <h3 class="title" style="font-weight:600;">Custom Notification</h3>
                        <div class="desc">
						
                            <p>Create personalized experiences with the AI-generated custom notifications and offers, built
to maximize user engagement and interaction.</p>
 <p><a class="btn btn-cta btn-cta-primary" href="custom.php">Learn More</a>  
   <a class="btn btn-cta btn-cta-primary" href="#demo">Request Demo</a></p>                               
					  </div>
                       <!--//quote-->                        
                    </div><!--//content-->
                       <figure class="figure col-12 col-lg-7 order-lg-1">
                        <img class="img-fluid" src="5.png" alt="" />
                       
                    </figure>
                </div><!--//item-->
                
                
                
               
            </div><!--//container-->
        </section><!--//why-->  
        
        <!-- ******Testimonials Section****** -->
        
        <!-- ******Press Section****** -->
        
        <!-- ******CTA Section****** -->
        <section id="cta-section" class="section cta-section text-center home-cta-section">
            <div id="demo" class="container">
             <h2 class="title" style="
   
    margin-left: 58px;
    text-align: center;
">Ready to Try it out ? Get a Demo</h2>
          </div><!--//container-->
			
<form name="contactform" method="post" action="index.php">
    
  <label for=""></label>
  <input type="text" name="first" id="" placeholder="First Name" class="email">
    
	  <label for=""></label>
  <input type="text" name="last" id="" placeholder="Last Name" class="email">
  <br>
      <label for=""></label>
  <input type="text" name="comp" id="" placeholder="Company Name" class="email">
    
	 <label for=""></label>
  <input type="text" name="mail" id="" placeholder="Email" class="email">
    <br>
  <label for=""></label>
<input type="text" name="hear" id="" placeholder="How did you Hear About us?" class="email" style="
    margin-right: 352px;
">

  <label for=""></label>
<br>
  <label for=""></label>
 
 <textarea id ='abc' name="sms" rows="4" cols="50" >
 Drop us a Message
</textarea>
    <br>
  <button type="submit">Submit</button>

</form>

        </section><!--//cta-section-->
        
    </div><!--//section-wrapper-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        
        <div class="bottom-bar">
            <div class="container">
          </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
    <!-- Video Modal -->
    <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
                </div>
                <div class="modal-body">
                    <div class="video-container embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="vimeo-video" src="https://player.vimeo.com/video/32424882?" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div><!--//video-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- *****CONFIGURE STYLE****** -->  

 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>     
    <script type="text/javascript" src="assets/js/main.js"></script>
    
    <!-- Modal video -->
    <script type="text/javascript" src="assets/js/modal-video.js"></script> 
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script  src="index.js"></script>
            
</body>
</html> 

