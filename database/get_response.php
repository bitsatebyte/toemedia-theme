<?php 
    require_once("config.php");
    if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
    {
     $yourName = $conn->real_escape_string($_POST['name']);
     $yourPhone = $conn->real_escape_string($_POST['phone']);
     $yourEmail = $conn->real_escape_string($_POST['email']);
     $message = $conn->real_escape_string($_POST['message']);
     $sql="INSERT INTO contact_form_info (name, email, phone, message) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$message."')";
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