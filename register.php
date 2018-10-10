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
$occupation         =thank%20you.php $_POST['occupation'];
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


?>

<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'email-smtp.us-east-1.amazonaws.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
     $mail->Username = getenv("EMAIL_USERNAME");                 // SMTP username
    $mail->Password = getenv("EMAIL_PASSWORD");                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@tedxaiactr.com', 'TEDx AIACTR');
    $mail->addAddress($nominee_email, $nominee_first_name);     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'subject';
    $mail->Body    = 'hello gyus developers of aiactr';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    ///echo 'Mail has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#a51e15" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>TEDxAIACTR | 2019</title>
    <link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="external/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="external/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>
    <!-- <div class="loader"></div> -->

      <?php include "header.php"; ?>
    <img src="public/images/back.jpg">
</center>

    <?php include "includes/footer.php";?>
</body>
</html>
