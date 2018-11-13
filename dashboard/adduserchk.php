<?php
include "config.php";
include 'sessionchk.php'; 

if ($_FILES["filepdf"]["error"] > 0)
  {
  echo "Error: " . $_FILES["filepdf"]["error"] . "<br />";


  $username = $_POST['username'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $position = $_POST['position'];
  $hashpass = md5($password);

  $sql = $db->prepare("INSERT INTO login (email, password, usertype, fullname, position) VALUES ('$username', '$hashpass', 'admin', '$fullname', '$position')");
  if ($sql->execute()) {
    header("location: adduser.php");
  }


  }
else
  {
  $username = $_POST['username'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $position = $_POST['position'];
  $hashpass = md5($password);


              $imageType = $_FILES["filepdf"]["type"];


              $image = $_FILES['filepdf']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
                    if(substr($imageType,0,5) == "image")
                        {

  $sql = $db->prepare("INSERT INTO login (email, password, usertype, fullname, image, position) VALUES ('$username', '$hashpass', 'admin', '$fullname', '$imgContent', '$position')");
  if ($sql->execute()) {
    header("location: adduser.php");
  }


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

