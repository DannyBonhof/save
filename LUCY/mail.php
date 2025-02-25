<?php

$email = readline("voer e-mailadres in = ");

$username = explode("@", $email);

if(isset($username[1])){
echo "username: ". $username[0];

} else {
    echo "email is incorrect";
}






?>