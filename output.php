<?php 

 $_POST;
 $_GET;
 $_SERVER;

 if($_SERVER["REQUEST_METHOD"] == "POST"){
     
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password1"];
    $confirm_password = $_POST["confirm-password"];
 }

  
 /*
 if(trim($username)){
    echo "Username is ". $username. "<br>";
 }
 else{
    echo "Username is empty <br>";
 }

 if(trim($email)){
    echo "Email is ". $email. "<br>";
   
}
   else{
    echo "email is empty <br>";
   
}

if(trim($password)){
    echo "Password is ". $password. "<br>";
   }
   else{
    echo "Password is empty <br>";
     
   }


   if(trim($confirm_password)){
    echo "ConfirmPassword is ". $confirm_password. "<br>";

   }
   else{
    echo "Confirm password is empty <br>";
      
   }
    */

   function test($fieldName)
   {
   if(trim($fieldName) != ""){
    echo  "Field Name is Not Empty"; 
   }
   else{
    echo "Field name". $fieldName. "is empty <br>";
   }
   }



?>