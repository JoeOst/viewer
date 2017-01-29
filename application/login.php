<?php
require_once ('session.php');
$users = require_once('../data/users.php');

foreach ($users as $user) {
    if ( ($user['login'] == $_POST['username'])
        && ($user['password'] == $_POST['password'])) {
        $_SESSION['auth'] = $user['login'];
    }
}
header("Location: http://{$_SERVER['HTTP_HOST']}/viewer/");