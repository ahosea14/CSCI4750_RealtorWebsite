<?php
    //In a real system, host would be replaced with host server
    $dsn ='mysql:host=localhost;dbname=rrg_company_db';  //data connection string
    $username='web_user'; //web_user for end user
    $password='password';//arbitrary password

    /*This login info will be used by the end user, this database login
      Only has the SELECT permission
    */

    
    
    try { //a measure to prevent the user from seeing errors
        $db = new PDO($dsn, $username, $password); //new database object with connection string and login info
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        print $error_message;

        exit();

        /*if the password fails this will give a smaller error message that is more comprehensive than the
        block of text that the user usually gets if this try catch method is not used */
    }


?>