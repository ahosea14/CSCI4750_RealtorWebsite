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

<body>
       <h1>Properties</h1>
        <hr class="divider">
    <main>
        <div class="container" style="min-height: 760px; margin-top: 2.5em">

            <div class="row propertyRows" style="margin-bottom: 2.0em">
                <div class="col-md-4">
                    <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="images/Property2.jpg">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="images/Property3.jpg">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="images/Property8.jpg">
                </div>
            </div>
            <div class="row propertyRows" style="margin-bottom: 2.0em">
                <div class="col-md-4 ">
                    <button type="button" class="btn btn-primary" onclick="" style="width: 100%">Property Info</button>
                </div>
                <div class="col-md-4 ">
                    <button type="button" class="btn btn-primary" onclick="" style="width: 100%">Property Info</button>
                </div>
                <div class="col-md-4 ">
                    <button type="button" class="btn btn-primary" onclick="" style="width: 100%">Property Info</button>
                </div>
            </div>
            <div class="row propertyRows" style="margin-bottom: 2.0em">
                <div class="col-md-4">
                    <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="images/Property5.jpg">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="images/Property6.jpg">
                </div>
                <div class="col-md-4">
                    <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="images/Property7.jpg">
                </div>
            </div>
            <div class="row propertyRows" style="margin-bottom: 2.0em">
                <div class="col-md-4 ">
                    <button type="button" class="btn btn-primary" onclick="" style="width: 100%">Property Info</button>
                </div>
                <div class="col-md-4 ">
                    <button type="button" class="btn btn-primary" onclick="" style="width: 100%">Property Info</button>
                </div>
                <div class="col-md-4 ">
                    <button type="button" class="btn btn-primary" onclick="" style="width: 100%">Property Info</button>
                </div>
            </div>

        </div>

    </main>


<?php
    //This will inject the html of the footer file
    include('./footer.php');
?>