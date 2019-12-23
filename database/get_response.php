<?php 
    require_once("connection.php");
    if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
    {
     require_once("../mail/contact_me.php");

     $yourName = $conn->real_escape_string($_POST['name']);
     $yourPhone = $conn->real_escape_string($_POST['phone']);
     $yourEmail = $conn->real_escape_string($_POST['email']);
     $comments = $conn->real_escape_string($_POST['message']);
     $sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
     if(!$result = $conn->query($sql)){
     die('There was an error running the query [' . $conn->error . ']');
     }
     else
     {
     echo "Thank you! We will contact you soon";
     }
     }
     else
     {
     echo "Please fill Name and Email";
     }
     ?>