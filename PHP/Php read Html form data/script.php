<?php 

//process.php

//verify the form was actually submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // 2. Read and clean the data to protect against Cross-Site Scripting (XSS)
        $username = htmlspecialchars($_POST["username"]);
        $email = htmlspecialchars($_POST["user_email"]);

        // 3. Use the data (e.g., echo it, save to database, or email it)
        echo "Your username is = $username";


    }
?>