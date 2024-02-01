<?php 

ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode', 1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);


session_start();


if (!isset($_SESSION["last_regeneration"])) { //checks if the session id exists
    // regenerate_session_id();
    session_regenerate_id();
    $_SESSION["last_regeneration"] = time();
} else{
    $interval = 60 * 30; //it updates or changes the session id after every 30mins.
    if (time() - $_SESSION["last_regeneration"] >= $interval) {
        // regenerate_session_id();
        session_regenerate_id();
        $_SESSION["last_regeneration"] = time();
    }
}


