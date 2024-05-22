<?php
require ('../Database.php');

$config = require ('../config.php');
$db = new Database($config['database']);


if($_POST['body'] === ''){
    echo 'Please fill the note fields';
    die();
}

$query_string = 'INSERT into notes(body, student_id) values (:body, :student_id)';

$db->query($query_string, [
    ':body' => $_POST['body'], 
    ':student_id' => 7 
]);
