<?php
require_once 'config.php';

function getContent($path){
    $path .=DIRECTORY_SEPARATOR;
    $result = [];
    if(file_exists($path)){
        $forbiddenFolders  = ['.', '..'];
        $directoryHandler = opendir($path);

        while (false !== ($entry = readdir($directoryHandler)) ){
            if(!in_array($entry , $forbiddenFolders)){
                $result[] = [
                        'title' => $entry, 
                        'content' => file_get_contents($path . $entry)
                    ];
            }
        }

    }

   return $result;
}
