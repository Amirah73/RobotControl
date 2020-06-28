


<?php
include_once 'connect.php';


if ($_POST['action']=='r'){
    $sql =" INSERT INTO moves(move)VALUES('R');";}

    else if ($_POST['action']=='l'){
      $sql =" INSERT INTO moves(move)VALUES('L');";}

      else if ($_POST['action']=='f'){
        $sql =" INSERT INTO moves(move)VALUES('F');";}

        else if ($_POST['action']=='b'){
          $sql =" INSERT INTO moves(move)VALUES('B');";}

          else{
            $sql =" INSERT INTO moves(move)VALUES('S');";}

  mysqli_query($conn,$sql);
  header("Location: ../RobotControl/Control.php?signup=success");
