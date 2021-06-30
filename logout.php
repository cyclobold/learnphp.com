<?php
//1. Start a session
session_start();

//2. empty the session array
$_SESSION = [];

//3. destroy the session
session_destroy();


//4. redirect the user
header("Location: login.php");