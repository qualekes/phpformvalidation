<?php
      $username = $_POST['user_name'];
      $password = $_POST['user_password'];


      $password = filter_input(INPUT_POST, 'user_password');
      $password = filter_input(INPUT_POST, 'user_password');

         if (empty($username)) {
            $name_error = 'Plese enter your username';
         } elseif(strlen($username) < 6) {
            $name_error = 'your username needs to have at least 6 letters';
         }

         if (empty($password)) {
            $password_error = 'Please enter your password';
         } elseif (strlen($password) < 5) {
            $password_error = "Your password must have at least 6 letters";
         } 


         if(empty($name_error) && empty($password_error)) {
            include('success.php');
         } else {
            include('index.php');
         }
      

        
?>



