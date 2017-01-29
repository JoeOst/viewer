<?php
include_once('session.php');
session_destroy();
header("Location: http://{$_SERVER['HTTP_HOST']}/viewer/");