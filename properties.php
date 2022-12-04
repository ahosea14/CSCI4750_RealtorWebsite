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
        <div class="container" id="propertyContainer"style="min-height: 760px; margin-top: 2.5em">
            
		<script>
		function reveal(number){
			<?php 
			//Capture data from sql database into php arrays
			$addressArray = array();
			$priceArray = array();
			$bedroomsArray = array();
			$bathroomsArray = array();
			$footageArray = array();
			$descriptionArray = array();
			$photoArray = array();
			for($b = 0; $b < sizeOf($properties);$b++){
				array_push($addressArray,$properties[$b]['Address']);
				array_push($priceArray,$properties[$b]['Price']);
				array_push($bedroomsArray,$properties[$b]['Bedrooms']);
				array_push($bathroomsArray,$properties[$b]['Bathrooms']);
				array_push($footageArray,$properties[$b]['SquareFt']);
				array_push($descriptionArray,$properties[$b]['Description']);
				array_push($photoArray,$properties[$b]['Photo']);
			};
			?>

			//pass php arrays into javascript arrays so we can work with the data in javascript dynamically
			var addressArr = <?php echo json_encode($addressArray);?>;
			var priceArr = <?php echo json_encode($priceArray);?>;
			var bedroomsArr = <?php echo json_encode($bedroomsArray);?>;
			var bathroomsArr = <?php echo json_encode($bathroomsArray);?>;
			var footageArr = <?php echo json_encode($footageArray);?>;
			var descriptionArr = <?php echo json_encode($descriptionArray);?>;
			var photoArr = <?php echo json_encode($photoArray);?>;
			
			//append info of property
			infoDisplay = document.getElementById("infoDisplay");			
			infoDisplay.innerHTML = '<div class="col-md-6"> <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="'+ photoArr[number-1] + '"></div>'
			+ '<p>Address:  ' + addressArr[number-1]
			+ '<br>Price:  ' + priceArr[number-1]
			+ '<br>Bedrooms:  ' + bedroomsArr[number-1] 
			+ '<br>Bathrooms:  ' + bathroomsArr[number-1]
			+ '<br>Footage:  ' + footageArr[number-1]
			+ '<br>Description:  ' + descriptionArr[number-1] +'</p>';
			infoDisplay.style.display = "block";
		};
			function initialDisplay(){

				<?php
				$photoArray = array();
				for($b = 0; $b < sizeOf($properties);$b++){
					array_push($photoArray,$properties[$b]['Photo']);
				};?>
				var photoArr = <?php echo json_encode($photoArray);?>;
				var photoNumber = 0;
				var photoSelector = 0;
				var mainContainer =  document.getElementById('propertyContainer');
				numberOfPhotos = Number(<?php echo sizeOf($properties);?>);
				buttonsNeeded = numberOfPhotos;
				numberOfRows = Math.ceil((numberOfPhotos/3));
				buttonSelector = 1;
				mainContainer.innerHTML = "";
				renderString = "";
								//First Row
				for(i = 0; i < numberOfRows; i++) {
					//Displays Image for each property                    
					renderString += '<div class="row propertyRows" style="margin-bottom: 2.0em">';
					for(x=0; x < 3; x++){
						if(numberOfPhotos != 0){
							numberOfPhotos--;
							renderString += '<div class="col-md-4"> <img class="img-fluid img-thumbnail propertyImages" style="max-width: 100%; height: auto" src="'+ photoArr[photoNumber] + '"></div> ';
							photoNumber++;
						}
					}
					renderString += '</div><div class="row propertyRows" style="margin-bottom: 2.0em">';				
					
					for(x=0; x < 3; x++){
						if(buttonsNeeded != 0){
							buttonsNeeded--;
							
							renderString += ' <div class="col-md-4"><button type="button" class="btn btn-primary" onclick="reveal('+ buttonSelector +')" style="width: 100%">Property Info</button></div>';
							buttonSelector++;
						}
					}
					renderString += '</div>';
				}
				renderString += '<div class="row propertyRows" id="infoDisplay" style="display: none; margin-bottom: 2.0em"></div>';
				//innerHTML auto closes brackets so nesting elements has to be done this way
				mainContainer.innerHTML = renderString;
			};
			initialDisplay();
		</script>
			
			
        </div>

    </main>



<?php
    //This will inject the html of the footer file
    include('./footer.php');
?>