<?php

if(isset($_FILES['upload'])){
	$file_name = explode(".",$_FILES['upload']['name']);
    $newfilename = round(microtime(true)) . '.' . end($file_name);

    $filen = $_FILES['upload']['tmp_name']; 
    //$con_images = "uploaded/".$_FILES['upload']['name'];
    $con_images = $newfilename;
    move_uploaded_file($filen, $con_images );
    $url = "http://www.masiko.local/public/uploads/".$con_images;
    // $url = "http://192.168.0.116/uploads/".$con_images;
    // http://localhost/public/uploads/


	$funcNum = $_GET['CKEditorFuncNum'] ;
	   // Optional: instance name (might be used to load a specific configuration file or anything else).
	$CKEditor = $_GET['CKEditor'] ;
	   // Optional: might be used to provide localized messages.
	$langCode = $_GET['langCode'] ;
	    
	   // Usually you will only assign something here if the file could not be uploaded.
	$message = '';
	echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
	// echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url');</script>";

}
?>
