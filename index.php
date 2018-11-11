<!DOCTYPE html>
<html>
<head>
    <meta name="theme-color" content="#a51e15" />
    <meta name="description" content="Want too see this pretty website previews?" />
    <meta property="og:title" content="TEDxAIACTR 2019">
    <meta property="og:image" content="public/images/tedx.jpg">
    <meta property="og:description" content="An endeavour towards disseminating pristine ideas.">
    <meta property="og:url" content="https://tedxaiactr.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>TEDxAIACTR </title>
    <link rel="icon" href="public/images/icon.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="external/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="external/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="loader"></div>

    <?php include "header.php";?>

    <div class="container-fluid">
        <div class="row" id="themeDiv">

            <div id="particles-js">

            </div>
            <div class="col-sm-12">


            <div class="col-sm-12 text-center" id="ted" style="top: 250px">
                <a class="scrollable" href="#about"><span class="banTitle"><span class="boldspan">TED<sup>x</sup></span> AIACTR <span class="black">2019</span></span></a><br><br>
                <a class="hvr-buzz" href="registration.php"><span class="boldspan">
                  <span class="joined">
                    JOIN US
                    </span></span>
                </a>
     </div>
            </div></div>
            <div id="timer" class="col-sm-12">
                <div class="time-units">
                    <p id="days">00</p>
                    <p>days</p>
                </div>
                <div class="time-units">
                    <p id="hours">00</p>
                    <p>hrs</p>
                </div>
                <div class="time-units">
                    <p id="minutes">00</p>
                    <p>min</p>
                </div>
                <div class="time-units">
                    <p id="seconds">00</p>
                    <p>sec</p>
                </div>
            </div>
        </div>


        <div class="row" id="about">
            <div class="card col-sm-12 no-pad col-md-12">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tedx">TED<sup>x</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#aiactr">AIACTR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tedx-aiactr">TED<sup>x</sup> AIACTR</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div id="aiactr" class="tab-pane fade">
                        <!-- <h4 class="card-title">TED</h4> -->
                            <p class="para-tab sizePara" style="text-align: justify;">Established in the year 2001, by the government of the national capital territory of Delhi. The institution is affiliated to the GGSIPU. Institution is ranked at 14th position out of 25 technical institutes in India as per data quest magazine. It is developing as a centre of excellence imparting technical education in the field of engineering.</p>
                        </div>
                        <div id="tedx" class="tab-pane fade in active show">
                        <!-- <h4 class="card-title">TEDx</h4> -->
                            <p class="para-tab sizePara" style="text-align: justify;">TEDx is an independently organized TED event which helps communities enjoy a TED like experience, through live speakers and videos of TED talks. Extensively conducted by leading universities and organizations, TEDx events have seen incredible growth across the globe. A TEDx event aims to make great ideas accessible and spark conversation among the members of the audience. Idea-centric, crisp, 18-minute deliverances by eminent personalities from diverse fields inspire and educate alike. The breaks provide ample time to strike up conversations with other enthusiasts, paving the way for interesting discussions and varied perspectives.</p>
                        </div>
                        <div id="tedx-aiactr" class="tab-pane fade">
                        <!-- <h4 class="card-title">TEDxAIACTR</h4> -->
                            <p class="para-tab sizePara" style="text-align: justify;">Our team has worked tirelessly to deliver one of the highest quality TEDx events in India. TEDxaiactr is going to be held for the first time. So, the organising team is boosted up to make it a success and has put together a revolutionary line up of speakers consisting of artists, celebrities, industrialists, visionaries and motivators.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--div style="width: 100%"><iframe width="100%" height="300" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3501.182691981304!2d77.26583481508312!3d28.654247982409228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x390cfc944ec6b523%3A0xd8bf72d453dbf662!2zQUlBQ1RSLCDgpJfgpYDgpKTgpL4g4KSV4KWJ4KSy4KWL4KSo4KWALCDgpKjgpIgg4KSm4KS_4KSy4KWN4KSy4KWALCDgpKbgpL_gpLLgpY3gpLLgpYAgMTEwMDMx!3m2!1d28.654248!2d77.2680235!5e0!3m2!1shi!2sin!4v1538568164745" width="100%" height="300" frameborder=""0" style="border:0" scrolling="no"></iframe-->

        <?php include "includes/footer.php" ?>

    </div>
	<script type="text/javascript" src="external/js/jquery.min.js"></script>
	<script type="text/javascript" src="external/js/popper.min.js"></script>
	<script type="text/javascript" src="external/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="external/js/angular.min.js"></script>
	<script type="text/javascript" src="public/js/index.js"></script>
    <script type="text/javascript" src="public/js/index.js"></script>

    <script type="text/javascript" src="public/js/particles.min.js"></script>
    <script type="text/javascript" src="public/js/app.js"></script>


</body>
</html>
