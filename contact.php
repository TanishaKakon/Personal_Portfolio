<?php
  
  if (isset($_POST["submit"])) {
    $name = $_POST['UName'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];

    $mailheader = "From:".$name."<".$email.">\r\n";

    $to = "tanisha2014kabir@gmail.com";

    $mail = mail($to, $subject, $message, $mailheader);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }

  }

?>