

<div class="fot">
<div class="row">

    <div class="col-4" >
     <ul>

         <li><a href=""><font color="#ffffff">TED</font></a></li>
         <li><a href=""><font color="#ffffff">TEDx</font></a></li>
         <li><a href=""><font color="#ffffff">TED Blog</font></a></li>
     </ul>
     </div>
    <div class="col-4">
                <!--ul class="navbar-nav flex-row ml-md-auto d-md-flex">
            <li class="nav-item media-icons">
                <a class="nav-link" href="https://www.facebook.com/TEDxAIACTR/" target="_blank">
                    <i style="font-size: 24px; color: #ffffff;" class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item media-icons">
                <a class="nav-link" href="https://www.linkedin.com/company/tedxaiactr" target="_blank">
                    <i style="font-size: 24px; color: #ffffff;" class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item media-icons">
                <a class="nav-link" href="https://www.instagram.com/tedxAIACTR/?hl=en" target="_blank">
                    <i style="font-size: 24px; color: #ffffff;" class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
        </ul-->
           <div class="row"> <input type="email" name="email" placeholder="Your Email" id="snackbarEmail">
        <button
        onclick="myFunction()"
        class="btn btn-primary"
        style=" margin-top: 2%; font-size: 20px; background-color: #010101; border-color: #df0024;">Subscribe</button></div>

    </div>
    <div class="col-4" style="padding-left: 5%;">
       <!--font color="#ffffff"> <h4><font color="#ffffff"> Curator</font></h4>
      Dr Kamal Sourav<br>
      <a href="tel:" style="color: white;">
       +917678494023</a>
         </font-->
                 <ul class="navbar-nav flex-row ml-md-auto d-md-flex">
            <li class="nav-item media-icons ">
                <a class="nav-link" href="https://www.facebook.com/TEDxAIACTR/" target="_blank">
                    <i style="font-size: 24px; color: #ffffff;" class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item media-icons">
                <a class="nav-link" href="https://www.linkedin.com/company/tedxaiactr" target="_blank">
                    <i style="font-size: 24px; color: #ffffff;" class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item media-icons">
                <a class="nav-link" href="https://www.instagram.com/tedxAIACTR/?hl=en" target="_blank">
                    <i style="font-size: 24px; color: #ffffff;" class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<br>
<div style="text-align: center;">
    <h6><font color="#ffffff">&copy; This independent TEDx event is operated under license from TED.</font></style></h6>
</div>
</div>
<div id="snackbar">Subscribed Successfully.</div>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
<script>
function myFunction() {
    var nameValue = document.getElementById("snackbarEmail").value;
    document.getElementById("snackbarEmail").value = "";

    $.ajax({
 type: "POST",
 url: "subscribe.php",
 data: {email: nameValue}
});
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
