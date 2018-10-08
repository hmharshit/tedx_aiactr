<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#a51e15" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TEDx-AIACTR | 2018</title>
    <link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="external/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="external/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
<link rel="stylesheet" href="public/css/contact.css">


   <style>
	    body{
	    	background-image: url(public/images/contactbg.gif);
	    	background-size:cover;
	    }
	    hr{
	    	background: white;	
	    }

		.contact-form{
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
   </style>


  </head>
<body>

	<?php include "header.php";?>



<div class="container contact-form">
	<h1>Contact form</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
       	<address><label>AIACTR Campus, Geeta Colony</label></address>
       	<p><label>Email:- </label></p>
       	<p><label>Phone:-</label> </p>
       </div>

       <div class="col-md-6">
       	
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" class="form-control">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" class="form-control">
         </div>

         <div class="form-group">
          <label>Phone no.</label>
          <input type="text" class="form-control">
         </div>

         <div class="form-group">
         	<label>Message</label>
         	<textarea  class="form-control" rows="7"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block">Send</button>
         </div>

       </div>

    </div>

</div>
 <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.1869477578434!2d77.2651855650831!3d28.654120532409273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc944ec6b523%3A0xd8bf72d453dbf662!2sAIACTR!5e0!3m2!1shi!2sin!4v1536816080393" height="500" width="100%" frameborder="0" allowfullscreen></iframe>
    </div> 
     <?php include "includes/footer.php" ?>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
      <symbol id="close" viewBox="0 0 18 18">
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
          S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
          l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
          c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
          s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
      </symbol>
    </svg>



</body>
</html>
