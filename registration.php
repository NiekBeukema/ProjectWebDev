<?php

include('connection.php');
$userrole = 0;
if(strpos($_POST['user_role'], '3A9G') !== false) {
    $userrole = 1;
}

if(strpos($_POST['user_role'], '4DM1') !== false) {
    $userrole = 2;
}

if(!empty($_POST['first_name']) ||!empty($_POST['last_name']) ||!empty($_POST['username']) ||!empty($_POST['password']) ||!empty($_POST['plaats']) ||!empty($_POST['straatnaam']) ||!empty($_POST['postcode']) ||!empty($_POST['telefoonnummer']) || !empty($_POST['email'])) {
    $query = $db->query("INSERT INTO gebruiker(user_role, voornaam, achternaam, inlognaam, wachtwoord, plaats, straatnaam, postcode, telefoonnummer, e_mail)
    VALUES ({$userrole}, {$_POST['first_name']}, {$_POST['last_name']}, {$_POST['username']}, {$_POST['password']}, {$_POST['plaats']}, {$_POST['straatnaam']}, {$_POST['postcode']},{$_POST['telefoonnummer']},{$_POST['email']});");
    header('Location: index.php');
}

else {
    echo '<script>$("#error").text("Not all fields were filled in")</script>';
}