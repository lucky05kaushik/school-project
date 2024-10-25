<?php
  $Fullname = $_POST['Full name'];
  $DOB= $_POST['DOB'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $Phone = $_POST['Phone']

  // Create connection
  $conn = new mysqli('localhost', 'root','', 'project' );
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into information(Fullname , DOB , email , password , Phone Number)
          values(? ,? , ? , ? , ?)");
      $stmt->bind_param("sissi", $Fullname $DOB, $email, $password, $Phone);
      $stmt->execute();
      echo "registration Successfully...";
      $stmt->close();
      $conn->close();
  }
?>
