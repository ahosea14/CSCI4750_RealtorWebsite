<?php
    //This PHP function will just inject the html of the header into this document
    include('./header.php');
?>

<body>
<?php
    //This will inject the html from the navBar file
    include('./navBar.php');
?>
    <header>
        <div>
            
        </div>
        <h1>
            <img src="generic_office.jpg" alt="Real Realty Group Building">
            <br><br>
            Contact Our Office
        </h1>
    </header>

    <main>
        <div class="container">
            <hr class="divider">

            <div class="row">
                <div class="col-auto contact">
                Number:<br>
                    &emsp;931-867-5309 <br>
                Email:<br>
                    &emsp;contactus@realrealtygroup.com <br>
                Address:<br>
                    &emsp;867 Real Address Rd. <br>
                    &emsp;Clarksville, TN 37043<br>
                <br><br>
                Realtor Contact Information can be found in Realtor Profiles.
                </div>
            </div>
        </div>
    </main>


<?php
    //This will inject the html of the footer file
    include('./footer.php');
?>