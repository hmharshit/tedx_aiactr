<?php
// extracting the required details from the nomination form and inserting into registration_data

require_once('connect.php');
$yrls        = array();
$editor_urls = array();
$_POST       = $_POST['nomination'];
$first_name  = $_POST['nominator_first_name'];
$last_name   = $_POST['nominator_last_name'];
$email       = $_POST['nominator_email'];
$phone       = $_POST['nominator_phone'];
$is_self = ((int) $_POST['is_self'] == 1 ? "true" : "false");
$nominee_first_name = $_POST['nominee_first_name'];
$nominee_last_name  = $_POST['nominee_last_name'];
$nominee_email      = $_POST['nominee_email'];
$nominee_phone      = $_POST['nominee_phone'];
$nominee_city       = $_POST['nominee_city'];
$nominee_country    = $_POST['country_id'];
$nominee_gender     = $_POST['nominee_gender'];
$occupation         = $_POST['occupation'];
$about_the_nominee  = $_POST['about_the_nominee'];
$talk_description   = $_POST['talk_description'];
$category_list      = implode(",", $_POST['category_list']);
$public_speaking    = $_POST['public_speaking'];
for ($i = 0; $i < sizeof($_POST['media_links_attributes']); $i++) {
    $yrls[] = $_POST['media_links_attributes'][$i]['url'];
}
$yrls = implode(",", $yrls);
for ($i = 0; $i < sizeof($_POST['editorial_links_attributes']); $i++) {
    $editor_urls[] = $_POST['editorial_links_attributes'][$i]['url'];
}
$editor_urls         = implode(",", $editor_urls);
$is_personal_contact = $_POST['is_personal_contact'];

$SQL_QUERY = "INSERT INTO registration_data
    (nominator_first_name, nominator_last_name, nominator_email, nominator_phone,
    is_nominate_himself, nominee_first_name, nominee_last_name, nominee_email,
    nominee_phone, city, country, gender, occupation, recommendation_reason,
    ted_talk_info, categories, public_speaking_info, media_urls, articles_urls, is_known_personally)
    VALUES
    ('$first_name', '$last_name', '$email', '$phone', $is_self, '$nominee_first_name',
    '$nominee_last_name', '$nominee_email', '$nominee_phone', '$nominee_city',
    '$nominee_country', '$nominee_gender', '$occupation', '$about_the_nominee',
    '$talk_description', '$category_list', '$public_speaking', '$yrls', '$editor_urls',
    $is_personal_contact);";

// querying in database
$result = pg_query($db_connection, $SQL_QUERY);





// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$user_email=$nominee_email;
$user_name=$nominee_first_name;
$user_body='Hello user';
$organiser_name='TEDxAIACTR';
$organiser_body="<!DOCTYPE html><html>\n
<head><style type=\"text/css\"></style></head>\n
<head><title></title><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /><meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" /><style type=\"text/css\">    /* CLIENT-SPECIFIC STYLES */\n    body,    table,    td,    a       -webkit-text-size-adjust: 100%;      -ms-text-size-adjust: 100%;    \n    table,    td       mso-table-lspace: 0pt;      mso-table-rspace: 0pt;    \n    img       -ms-interpolation-mode: bicubic;    \n    /* RESET STYLES */\n    img       border: 0;      height: auto;      line-height: 100%;      outline: none;      text-decoration: none;    \n    table       border-collapse: collapse !important;    \n    body {      height: 100% !important;      margin: 0 !important;      padding: 0 !important;      width: 100% !important;    }\n    /* iOS BLUE LINKS */\n    a[x-apple-data-detectors]       color: inherit !important;      text-decoration: none !important;      font-size: inherit !important;      font-family: inherit !important;      font-weight: inherit !important;      line-height: inherit !important;    \n    /* MEDIA QUERIES */\n    @media screen and (max-width: 480px)       .mobile-hide         display: none !important;            .mobile-center         text-align: center !important;          \n    /* ANDROID CENTER FIX */\n    div[style*=\"margin: 16px 0;\"]       margin: 0 !important;    }  </style>\n  
        <body style=\"margin: 0 !important; padding: 0 !important; background-color: #eeeeee;\" bgcolor=\"#eeeeee\">\n    
            
            <div style=\"display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;\">Improving lives through oral healthcare.</div>\n    
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td align=\"center\" style=\"background-color: #eeeeee;\" bgcolor=\"#eeeeee\"><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:600px;\"><tr><td align=\"center\" valign=\"top\" style=\"font-size:0; padding: 35px;\" bgcolor=\"#044767\"><div style=\"display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;\"><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:300px;\"><tr><td align=\"center\" valign=\"top\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 36px; font-weight: 800; line-height: 48px;\"                        class=\"mobile-center\"><h1 style=\"font-size: 22px; font-weight: 800; margin: 0; color: #ffffff;\">                         TEDx AIACTR, Delhi                        </h1></td></tr></table></div></td></tr><tr><td align=\"center\" style=\"padding: 35px 35px 20px 35px; background-color: #ffffff;\" bgcolor=\"#ffffff\"><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:600px;\"><tr><td align=\"center\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;\"><img src=\"https://s3-ap-southeast-1.amazonaws.com/files.praktice.xyz/images/email_template/hero-image-receipt.png\" width=\"80\" height=\"80\" style=\"display: block; border: 0px;\" /><br><h2 style=\"font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;\">                        Nomination form has been filled.                      </h2></td></tr><tr><td align=\"left\" style=\"padding-top: 20px;\"><table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\"><tr><td width=\"100%\" colspan=\"2\" align=\"center\" bgcolor=\"#044767\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px; background-color: #044767; color: white;\">                            Appointment details                          </td></tr>                        \n\n
                                                                                <tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;\">                            Nominator First Name                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;\">                            $first_name                         </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;\">                           Nominator Last Name                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;\">                           $last_name                      </td></tr>                       \n\n
                                                                                <tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Nominator Email                         </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            $email                         </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Nominator Phone number                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $phone                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            
                                            
                                            Has Nominator nominated himself										</td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            
                                                                                    
                                            $is_self										</td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Nominee First Name                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                          $nominee_first_name                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            
                                                                                    Nominee Last Name                         </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                          $nominee_last_name                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Nominee Email                        </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $nominee_email                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Nominee Phone number                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $nominee_phone                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            
                                                                                    Nominee City                        </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $nominee_city                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Nominee Country                         </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                         
                                                                                    
                                            $nominee_country										</td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Nominee Gender                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $nominee_gender                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Occupation                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $occupation                         </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            About the Nominee                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $about_the_nominee                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Talk Description                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $talk_description                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Category List                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $category_list                          </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Public Speaking                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $public_speaking                         </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            
                                                                                    Online audio or video links</td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $yrls                         </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            
                                                                                    Blog or Article Links</td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $editor_urls                        </td></tr><tr><td width=\"60%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                            Does Nominator know Nominee personally                          </td><td width=\"40%\" align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding: 5px 10px;\">                           $is_personal_contact                         </td></tr><tr></table></td></tr><tr><td align=\"center\" style=\"background-color: #ffffff;\" bgcolor=\"#ffffff\"><table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"max-width:600px;\"><tr><td align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;\"><p style=\"padding-left:35px; font-size: 14px; font-weight: bold; line-height: 18px; color: #333333;\">                        Best,
                                                                                                            <br>                        TEDx Web Development Team                      
                                                                                                            </p></td></tr><tr><td align=\"left\" style=\"font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;\"></td></tr></table></td></tr></table></td></tr></table>\n  
                                            </body>\n
                                        </html>";

//Load Composer's autoloader
require 'vendor/autoload.php';
function tedmail($to,$toname,$body, $subject){

  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
  try {
      //Server settings
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'email-smtp.us-east-1.amazonaws.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = getenv("EMAIL_USERNAME");                 // SMTP username
      $mail->Password = getenv("EMAIL_PASSWORD");                // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom('noreply@tedxaiactr.com', 'TEDx AIACTR');
      $mail->addAddress($to, $toname);     // Add a recipient



      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $subject;
      $mail->Body    = $body;
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
      //echo 'Mail has been sent';
  } catch (Exception $e) {
      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
  }

}
tedmail($user_email,$user_name,$user_body, 'Confirmation From TEDxAIACTR'); // trigger confirmation email to nominator
tedmail(getenv("EMAIL_CC"),$organiser_name,$organiser_body, "New Speaker Nomination by $first_name $last_name");  // triggering email to us for our reference

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#a51e15" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
	<title>TEDxAIACTR</title>
    <link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="external/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="external/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
    <!-- <div class="loader"></div> -->

      <?php include "header.php"; ?>
   <center>
    <div class="thank">
        <div class="fa fa-check-square-o" style="color: #33f23c; font-size: 90 px;"></div>
        <h2>Thank You!</h2>
        <h3>Your submission is recieved and we will contact you soon.</h3>
    </div>
</center>
</center>

    <?php include "includes/footer.php";?>
</body>
</html>
