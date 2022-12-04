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
    <script>
        //Javascript
        function reveal(elem) {
            var addProperty = document.getElementById('addPropertyListing');
            var addRealtor = document.getElementById('addRealtorProfile');
            var deleteProperty = document.getElementById('deletePropertyListing');
            var deleteRealtor = document.getElementById('deleteRealtorProfile');

            addProperty.style.display = "none";
            addRealtor.style.display = "none";
            deleteProperty.style.display = "none";
            deleteRealtor.style.display = "none";

            elem.style.display = "block";
        }
    </script>
        <h1>Admin Menu</h1>
        <hr class="divider">
    </header>
    <!--End of nav bar-->
    <main>
        <div class="container" style="min-height: 760px">
            <div class="row">
                <div class="text-center">
                    <div class=" btn-group-lg">
                        <button type="button" class="btn btn-primary" onclick="reveal(document.getElementById('addPropertyListing'))">Add Property Listing</button>
                        <button type="button" class="btn btn-primary" onclick="reveal(document.getElementById('addRealtorProfile'))">Add Realtor Profile</button>
                        <button type="button" class="btn btn-primary" onclick="reveal(document.getElementById('deletePropertyListing'))">Delete Property Listing</button>
                        <button type="button" class="btn btn-primary" onclick="reveal(document.getElementById('deleteRealtorProfile'))">Delete Realtor Profile</button>
                    </div>
                </div>

            </div>

            <div id="formHolder" class="container">
                <div class="row">

                    <!--Add Property Form-->
                    <form method = "POST" action="addProperty.php" id="addPropertyListing" style="display: none" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Price</label>
                            <input name ="price" type="number" class="form-control" id="" placeholder="Enter property listing price">
                        </div>
                        <div class="form-group">
                            <label for="">Bedrooms</label>
                            <input name ="bedrooms" type="number" class="form-control" id="" placeholder="Enter number of bedrooms">
                        </div>
                        <div class="form-group">
                            <label for="">Bathrooms</label>
                            <input name ="bathrooms" type="number" class="form-control" id="" placeholder="Enter number of bathrooms">
                        </div>
                        <div class="form-group">
                            <label for="">Square Footage</label>
                            <input name ="footage" type="number" class="form-control" id="" placeholder="Enter square footage of property">
                        </div>
                        <div class="form-group">
                            <p><label for="">Brief Description</label></p>
                            <textarea name ="description" rows="4" style="width:100%" placeholder="Enter a brief description of the property"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input name ="address" type="text" class="form-control" id="" placeholder="Enter address of property" size="4">
                        </div>

                        <div class="form-group">
                            <label for="Property Image">Add Image</label>
                            <input name="photo" type="file" class="form-control-file" id="propertyImage">
                        </div>
                        <button type="submit" name="propertySubmit"class="btn btn-primary">Submit</button>
                    </form>

                    <!--Add Realtor Profile-->

                    <form method="POST" action="addRealtor.php" id="addRealtorProfile" style="display: none" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input name="firstName" type="text" class="form-control" id="" placeholder="Enter the realtor's first name">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input name="lastName" type="text" class="form-control" id="" placeholder="Enter the realtor's last name">
                        </div>
                        <div class="form-group">
                            <p><label for="">Brief Bio</label></p>
                            <textarea name="bio" rows="4" style="width:100%" placeholder="Enter a brief biography"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input name="number" type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Enter the realtor's #">
                        </div>

                        <div class="form-group">
                            <label for="Realtor Image">Add Image</label>
                            <input name="photo" type="file" class="form-control-file" id="realtorImage">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

					<!--Delete Property Form-->
                    <form method = "POST" action="deleteProperty.php" id="deletePropertyListing" style="display: none">
                        
                        <div class="form-group">
                            <label for="">Property ID To Delete</label>
                            <input name="propertyID" type="number" class="form-control" id="" placeholder="Enter property id">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
					 
					<!--Delete Realtor Form-->	
					
					<form method = "POST" action="deleteRealtor.php" id="deleteRealtorProfile" style="display: none">
                        
                        <div class="form-group">
                            <label for="">Realtor ID To Delete</label>
                            <input name="realtorID" type="number" class="form-control" id="" placeholder="Enter realtor id">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                    
					<br><br>

                </div>

            </div>

        </div>

    </main>


<?php
    //This will inject the html of the footer file
    include('./footer.php');
?>