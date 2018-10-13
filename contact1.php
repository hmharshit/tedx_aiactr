<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
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
    <link rel="stylesheet" type="text/css" href="public/css/gall.css">
    <style>
        body{
            background-image: url(public/images/conta.gif);
            background-size:cover;
        }
        a{
            color: white;
        }
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=email], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=submit] {
    background-color: #df0024;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #010101;
}

.contaa{
    border-radius: 5px;
    background-color: #df0024;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}

    </style>
</head>
<body>
     <div class="loader"></div>
<?php include "header.php";?>

    <div class="contact">
        <font size="17px">Contact Us</font>
        <div class="line"></div><br>
        <div class="row">
            <div class="col-md-6">
        <address><label>AIACTR Campus, Geeta Colony</label></address>
        <p><label><a href="mailto:tedxaiactr@gmail.com">Email:- tedxaiactr@gmail.com</a> </label></p>
        <p><label><a href="tel:9716012061">Phone:- 9716012061</a></label> </p>
         <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.1869477578434!2d77.2651855650831!3d28.654120532409273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc944ec6b523%3A0xd8bf72d453dbf662!2sAIACTR!5e0!3m2!1shi!2sin!4v1536816080393" height="300" width="100%" frameborder="0" allowfullscreen></iframe>
    </div>
       </div>

 <div class="col-md-6">
  <form action="contactus.php" method="post">
        <input type="text" id="contact_name" name="firstname" placeholder="Your name..">
    <br><br>
        <input type="email" id="contact_email" name="lastname" placeholder="Your last name..">
<br><br>
        <input type="text" id="contact_no" name="lastname" placeholder="Your last name..">
<br>    <br>   
        <textarea id="subject" name="contact_message" placeholder="Write something.." style="height:200px"></textarea>
  <br><br>
      <input type="submit" value="Submit">
  </form>
</div>
    </div>

        </div>
    </div>
       <?php include "includes/footer1.php" ?>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
      <symbol id="close" viewBox="0 0 18 18">
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
    			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
    			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
    			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
    			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
      </symbol>
    </svg>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"></script>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="external/js/jquery.min.js"></script>
    <script type="text/javascript" src="external/js/popper.min.js"></script>
    <script type="text/javascript" src="external/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="external/js/angular.min.js"></script>
    <script type="text/javascript" src="public/js/index.js"></script>
</body>
</html>
