<?php
// Fånga upp post med användarnamn och lösenord
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Hämta användarnamn och lösenord
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Kolla om användarnamn och lösenord är korrekt
    if($username == 'admin' && $password == 'password') {
        // Skapa en session
        session_start();
        $_SESSION['username'] = $username;
        // Skicka användaren till startsidan
        header('Location: index.php');
    } else {
        // Om användarnamn och lösenord är fel
        echo 'Fel användarnamn eller lösenord';
    }
}
?>