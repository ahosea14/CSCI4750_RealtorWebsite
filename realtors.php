<?php
    //This PHP function will just inject the html of the header into this document
    include('./header.php');
?>
<body>
    <!--Nav bar-->
<?php
    //This will inject the html from the navBar file
    include('./navBar.php');
?>
    <!--End of nav bar-->
    <!---header saying our team-->
    <header>
        <h1>Our Team</h1>
    </header>
    <!--end of header-->
    <main>
        <!--- probably need to rewrite this to not hard code the three realtors into this-->
        <div class="container">
            <hr class="divider">

            <!-- Peter -->
            <div class="row">
                <div class="col-md-3">
                    <img class="realtorImage" src="images/Peter.jpg">
                </div>

                <div class="col-md-3 desc">
                    <ul>
                        <li><span class="profile-name" id="peter_griffin_name">Peter Griffin</span></li>
                        <br>
                        <li>
                            <span class="profile-desc" id="peter_griffin_desc">
                                Peter is by far one of the most "trusting" employees. He will make sure you have at
                                least two walls and a roof.
                            </span>
                        </li>
                        <br>
                        <li>
                            Contact info:<br>
                            <span class="profile-contact" id="peter_griffin_email">GPeter@hotmail.com</span>
                            <span class="profile-contact" id="peter_griffin_phone">(555)124-0987</span>
                        </li>
                    </ul>

                </div>

            </div>

            <hr class="divider">

            <!-- Stewie -->
            <div class="row row-spacer">
                <div class="col-md-3">
                    <img class="realtorImage" src="images/Stewie.jpg">
                </div>
                <div class="col-md-3 desc">
                    <ul>
                        <li><span class="profile-name" id="stewie_griffin_name">Stewie Griffin</span></li>
                        <br>
                        <li>
                            <span class="profile-desc" id="stewie_griffin_desc">
                                Stewie is by far our best employee. He may do things that aren't entirely ethical
                                but he gets the job done.
                            </span>
                        </li>
                        <br>
                        <li>
                            Contact info:<br>
                            <span class="profile-contact" id="stewie_griffin_email">YaBoyStwewie@yahoo.com</span>
                            <span class="profile-contact" id="stewie_griffin_phone">(555)420-6969</span>
                        </li>
                    </ul>

                </div>
            </div>

            <hr class="divider">

            <!-- Cleveland -->
            <div class="row row-spacer">
                <div class="col-md-3">
                    <img class="realtorImage" src="images/Cleveland.jfif">
                </div>
                <div class="col-md-3 desc">

                    <ul>
                        <li><span class="profile-name" id="cleveland_brown_name">Cleveland Brown</span></li>
                        <br>
                        <li>
                            <span class="profile-desc" id="cleveland_brown_desc">
                                Cleveland is a great employee. He can sell a house. Very monotone, though.
                            </span>
                        </li>
                        <br>
                        <li>
                            Contact info:<br>
                            <span class="profile-contact" id="cleveland_brown_email">MoustacheBrown@gmail.com</span>
                            <span class="profile-contact" id="cleveland_brown_phone">(555)124-0987</span>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="divider">
            <!---End of rework section-->
        </div>
    </main>

<?php
    //This will inject the html of the footer file
    include('./footer.php');
?>