<?php
// Fånga upp post med användarnamn och lösenord
if(isset($_POST['android']) && isset($_POST['password'])) {
    // Hämta användarnamn och lösenord
  
    
    $android = $_POST['android'];
    $password = $_POST['password'];
}
else
{
    echo "Ingen post";
}   
?>