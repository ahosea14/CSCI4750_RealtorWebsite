<?php
    //In a real system, host would be replaced with host server
    $dsn ='mysql:host=localhost;dbname=rrg_company_db';  //data connection string
    $username='web_user';
    $password='password';

    //connecting to the database
    
    try { //a preventative measure to prevent the user from seeing errors
        $db = new PDO($dsn, $username, $password); //new database object with connection string and login info
         //print "Successful in connecting to database <br>\n";
        //if the connection fails it will show an error, likely a "fatal error"
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        print $error_message;

        include('eg009b_database_error.php');

        exit();

        /*if the password fails this will give a smaller error message that is more comprehensive than the
        block of text that the user usually gets if this try catch method is not used */
    }


?>