<?php

require('../Database.php');

$config = require('../config.php');
$db = new Database($config['database']);

if($_POST['first_name'] === '' || $_POST['last_name'] === '' || $_POST['email']==='' || $_POST['password'] === ''){
    echo 'Please fill the required fields';

    return false;
}

$query_str = "INSERT INTO students(first_name, last_name, email, phone,address,password) VALUES (:first_name, :last_name, :email, :phone,:address,:password)";

$db->query($query_str, [
    ':first_name' => $_POST['first_name'],
    ':last_name' => $_POST['last_name'], 
    ':email' => $_POST['email'],
    ':phone' => $_POST['phone'],
    ':address' => $_POST['address'],
    ':password' => md5($_POST['password']),
]);

echo 'success...'; 