<?php
// Fånga upp post med användarnamn och lösenord
if(isset($_POST['hannes']) && isset($_POST['password'])) {
        session_start();
        $_SESSION['username'] = $username;
        // Skicka användaren till startsidan
        header('Location: ushlubnushlu.php');
    } else {
        // Om användarnamn och lösenord är fel
        echo 'Fel användarnamn eller lösenord';
    }
}
?>