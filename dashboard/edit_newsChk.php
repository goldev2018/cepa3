<?php
include "config.php";
include 'sessionchk.php'; 

if ($_FILES["filepdf"]["error"] > 0)
  {
  echo "Error: " . $_FILES["filepdf"]["error"] . "<br />";



  $email = $_SESSION['userid'];
  date_default_timezone_set("Asia/Manila");
  $datetime = date("g:ia  l jS F Y");
  $newsdesc = $_POST['newsdesc'];
  $newsroom_title = $_POST['newsroom_title'];
  $editid = $_POST['editid'];


    $sql = $db->prepare("UPDATE newsroom SET newsroom_desc='$newsdesc', newsroom_title='$newsroom_title', email='$email', newsroom_datetime='$datetime' WHERE id='$editid'");
  if ($sql->execute()) {
echo "<script>alert('Post Successfully.')</script>";
    header("location: edit_news.php");
  }


  }
else
  {
  echo "Upload: " . $_FILES["filepdf"]["name"] . "<br />";
  echo "Type: " . $_FILES["filepdf"]["type"] . "<br />";
  echo "Size: " . ($_FILES["filepdf"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["filepdf"]["tmp_name"];


  $filename =  bin2hex(openssl_random_pseudo_bytes(4));
  $file = $_FILES["filepdf"]["tmp_name"];


 $file1 = $_FILES["filepdf"]["type"];

$path_parts = pathinfo($file1);

$ext = $path_parts['basename'];


     $newsfile = 'newsroomfiles/'.$filename.'.'.$ext.'';
     if(!copy($file,$newsfile))
     {
         echo "failed to copy $file";
     }
     else
     {
         echo "copied $file into $newsfile\n";
     }


  $email = $_SESSION['userid'];
  date_default_timezone_set("Asia/Manila");
  $datetime = date("g:ia  l jS F Y");
  $newsdesc = $_POST['newsdesc'];
  $newsroom_title = $_POST['newsroom_title'];
  $newsroom_type = $_FILES["filepdf"]["type"];
  $editid = $_POST['editid'];
  $existing = $_POST['existing'];

  unlink($existing);

    $sql = $db->prepare("UPDATE newsroom SET newsroom_path='$newsfile', newsroom_desc='$newsdesc', newsroom_title='$newsroom_title', newsroom_type='$newsroom_type', email='$email', newsroom_datetime='$datetime' WHERE id='$editid'");
  if ($sql->execute()) {
echo "<script>alert('Post Successfully.')</script>";
    header("location: edit_news.php");
  }


  }






?>
<!--
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 -->

