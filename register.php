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
    <div class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark topNav">
        <a class="navbar-brand" href="index.html#themeDiv"><img width="250" src="public/images/TEDxAIACT.png" alt="" title="TEDxAIACTR"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNav" aria-controls="collapseNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapseNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link scrollable" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollable" href="team.html">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollable" href="registration.html">Registration</a>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
                <li class="nav-item media-icons">
                	<a class="nav-link" href="https://www.facebook.com/TEDxAIACTR/">
                		<i class="fa fa-facebook-official" aria-hidden="true"></i>
                	</a>
                </li>
                <li class="nav-item media-icons">
                	<a class="nav-link" href="https://www.linkedin.com/company/13225447/">
                		<i class="fa fa-linkedin-square" aria-hidden="true"></i>
                	</a>
                </li>
                <li class="nav-item media-icons">
                	<a class="nav-link" href="https://www.instagram.com/tedxAIACTR/?hl=en">
                		<i class="fa fa-instagram" aria-hidden="true"></i>
                	</a>
                </li>
        	</ul>
        </div>
    </div><center>
    <img src="public/images/back.jpg">
</center>
 <div class="row" id="footer">
            <div class="col-sm-12 col-md-4">
                <h4>Important Links</h4>
                <a target="_blank" href="https://www.ted.com/">TED</a><br>
                <a target="_blank" href="https://www.ted.com/about/programs-initiatives/tedx-program">TEDx</a><br>
                <a target="_blank" href="https://blog.ted.com/">TED Blog</a>
            </div>
            <div class="col-sm-12 col-md-4">
                <h4>Curator</h4>
                <span>Shashank Narayan</span><br>
                <span>+91-9555691165</span><br>
                <a target="_blank" href="mailto:info@tedxaiactr.com"><i class="fa fa-envelope"></i></a>
                <a target="_blank" href="https://www.facebook.com/narayanshashank"><i class="fa fa-facebook"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/narayanshashank"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="col-sm-12 col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.1869477578434!2d77.2651855650831!3d28.654120532409273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc944ec6b523%3A0xd8bf72d453dbf662!2sAIACTR!5e0!3m2!1shi!2sin!4v1536816080393" height="140" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <h6>&nbsp;&nbsp;&nbsp;&copy; This independent TEDx event is operated under license from TED.</h6>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="external/js/jquery.min.js"></script>
    <script type="text/javascript" src="external/js/popper.min.js"></script>
    <script type="text/javascript" src="external/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="external/js/angular.min.js"></script>
    <script type="text/javascript" src="public/js/index.js"></script>
</body>
</html>
