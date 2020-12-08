<?php
class File{
    
    public static function build_path($path_array) {
    // $ROOT_FOLDER initial
    //$ROOT_FOLDER = "C:/Program Files (x86)/EasyPHP-Devserver-17/eds-www/SLAM4/TD5";
    
    $ROOT_FOLDER = __DIR__."\..";
    $DS = DIRECTORY_SEPARATOR;
    return $ROOT_FOLDER. '\\' .($path_array);
 
    }
}
?>