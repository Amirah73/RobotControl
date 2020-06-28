
<?php

include_once 'connect.php';

 ?>

<!DOCTYPE html>
<html>
<head>

<title> </title>
<style>
body {
background-color: #455a64;
font-size: 3em;
}



</style>

</head>
<body>



<?php

$sql ="SELECT *
       FROM moves
       ORDER BY id DESC
       LIMIT 1;";
$result=mysqli_query($conn,$sql);


$resultCheck=mysqli_num_rows($result);

if ($resultCheck>0){
      While($row=mysqli_fetch_assoc($result)){
        echo $row['move']."<br>";
      }
}
 ?>


  </body>

  </html>
