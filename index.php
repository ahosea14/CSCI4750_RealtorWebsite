<?php
    //This PHP function will just inject the html of the header into this document
    include('./header.php');
?>

<body>
        <div id="navBarDiv">
            <table>
                <tr>
                    <td><a href>Residential Properties</a></td>
                    <td><a href>Realtor Profiles</a></td>
                    <td><a href>Contact</a></td>
                </tr>
            </table>
        </div>
        <div id="headerImageDiv">
            <img src="images/familyGuy.jpg" alt="missing">
        </div>

<?php
    //This will inject the html of the footer file
    include('./footer.php');
?>