<?php
require '../dbconfig.php';
$info=json_decode(file_get_contents("php://input"));
if(count($info)>0)
{
    $username=mysqli_real_escape_string($mysqli,$info->username);
      $phone=mysqli_real_escape_string($mysqli,$info->phone);
        $password=mysqli_real_escape_string($mysqli,md5($info->password));
          $time=mysqli_real_escape_string($mysqli,$info->time);
          $query="INSERT INTO registeration(username, phone, password, time) VALUES ('$username', '$phone', '$password', '$time')";
          if(mysqli_query($mysqli, $query))
          {
           echo "data inserted";
          }
          else{
              echo "failed";
          }
}
else{
    echo "count error";
}
?>