<?php
    //This PHP function will just inject the html of the header into this document
    include('./header.php');
    //Accesses Database
    require_once('./user_connection.php');

    //Creates and runs query
    $query = "SELECT * 
              FROM properties 
              ORDER BY PropertyID";

    $statement = $db->prepare($query);
    $statement->execute();
    $properties = $statement->fetchAll();
    $statement->closeCursor();

?>

<body>

    <?php
        include('./navBar.php');
    ?>
       <h1>Properties</h1>
        <hr class="divider">
    <main>
        <div class="container" style="min-height: 760px; margin-top: 2.5em">
            
            <?php
                //First Row
                echo '
                    <div class="row propertyRows" style="margin-bottom: 2.0em">
                ';

                for($i = 1; $i <= sizeOf($properties); $i++) {
                    //Displays Image for each property                    
                    echo '
                    <div class="col-md-4">
                        <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="'.$properties[$i-1]['Photo'].'">
                    </div>
                    ';
                    //Divides each row of images with rows of buttons
                    if ($i % 3 == 0) {
                        //Row of buttons
                        echo '
                        <div class="row propertyRows" style="margin-bottom: 2.0em">
                        ';
                        //Displays Buttons
                        for($j = 0; $j < 3; $j++) {
                            echo '
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" onclick="" style="width: 100%">Property Info</button>
                            </div>
                            ';
                        }
                        echo '</div>';
                    }
                }
                echo '</div>';

            ?>

        </div>

    </main>


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