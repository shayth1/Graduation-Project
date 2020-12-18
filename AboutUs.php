<?php
include './app.php';

loadHead("About Us");

LoadNavigation();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                <a href = "Home.php" target = "_self"><img src="Images/ProjectLogo.png" width="150"> </a>
                </div>
                <div class="col-lg-4">
                    <h2 style="font-family: Garamond">About Quarantine Partner</h2>
                    <hr>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p>This software aims to monitor the home quarantined patients as the number of patients needing continuous care is increasing rapidly in Jordan. The Patient monitoring system – Quarantine Partner, is used to monitor the patients quarantined at home. </p>
                    <p>This software will ensure the health of the Jordanian citizens as it will participate in the major role in easing the role of the medical team following up on the Covid-19 patients. </p>
                </div>
                <div class="col-lg-6">
                    <p>The system will allow following up on the home quarantined patients on a daily basis and ensure that they are within the allowed location permitted by the Jordanian Government.</p>
                    <p>The medical team will be able to access the patient’s data, check on it and see if the patient is requiring any immediate medical attention that requires them to visit the nearest hospital if needed. As most of the positive-tested patients are in good condition, and only require basic medications and following-up, this will help the medical team focus on the patients with critical health conditions.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <a href="ContactUs.php"><p style="text-align:center">Require further assistance? Contact us!</p></a>
                </div>
            </div>
        </div>   
        
                <div class="col-lg-4">
                <div style="position: relative">
                <p style="bottom: 0; width:100%; text-align: center">
                <img src="Images/Background.png">
                </p>
                </div>
            </div>

        
    </body>
</html>
