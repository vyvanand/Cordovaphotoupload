<?php
  $path = realpath($_SERVER["DOCUMENT_ROOT"]);
  include("mysql_connection.php");
  $current_date=date("Y-m-d");
  $dirname = "$path/photoupload/assets/user_uploaded_images/"; 
	if ($_FILES)
	{
	    print_r($_FILES);	
	    mkdir ($dirname, 0777, true); 
	    move_uploaded_file($_FILES["file"]["tmp_name"],$dirname."/".$current_date."_".$_FILES["file"]["name"]."");
	    $p_dir="".$dirname."/".$current_date."_".$_FILES["file"]["name"]."";
  }
?>
