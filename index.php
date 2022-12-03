<?php
    //This PHP function will just inject the html of the header into this document
    include('./header.php');
    require_once('./user_connection.php')
?>

<body>
<?php
    //This will inject the html from the navBar file
    include('./navBar.php');
?>
        <div id="headerImageDiv">
            <img src="images/familyGuy.jpg" alt="missing">
        </div>

<?php
    //This will inject the html of the footer file
    include('./footer.php');
?>