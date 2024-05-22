<?php 
session_start(); //necessary for sessions

$_SESSION['user_name'] = 'John Doe';

require('function.php');

require('router.php');

// require ('Database.php');

// $config = require ('config.php');

// $db = new Database($config['database']);




