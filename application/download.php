<?php 
require_once ('config.php');

$file = $config['content']. DIRECTORY_SEPARATOR . $_GET['file'];

if (file_exists($file)) {
	    header('Content-Description: File Transfer');
	    header('Content-Type: text/plain');
	    header('Content-Disposition: attachment; filename="'.basename($file).'"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($file));
	    readfile($file);
	    exit;
	}

