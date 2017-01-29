<?php 
//Авторизованные пользователи могу добавлять свои статьи - в ту же папку с контентом про тому же принципу.

	$validType = "text/plain";
	$path = '../data/content/'; 
	
	$fileType = $_FILES['userfile']['type'];
	$tmp_path = $_FILES['userfile']['tmp_name'];
	$fileName = $_FILES['userfile']['name'];

	$full_path = $path.$fileName; 

	if ($fileType != $validType) {
			echo("Invalid file type.");
			die;
	} 
   
	
	if($_FILES['userfile']['error'] == 0){
	    if(move_uploaded_file($tmp_path, $full_path)){
	        header("Location: http://{$_SERVER['HTTP_HOST']}/viewer/");
	    }
	    else echo "error";
}
?>