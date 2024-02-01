<?php 

declare(strict_types = 1 ); //type declaration

function is_input_empty(string $username, string $pwd, string $email){
    if(empty($username) || empty($pwd) || empty($email)){
        return true;
    }
}

// validating the email with php built-in function
function is_email_valid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } 
}


function is_username_taken(object $pdo, string $username){
    if (get_username($pdo, $username)) {
        return true;
    }
}

function is_email_registered(object $pdo, string $email){
    if (get_email($pdo, $email)) {
        return true;
    }
}
