<?php
    if(!isset($username)) {
       $username = '';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 
   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
</head>
<body>
   <div class="container">
      <div class="card">
         <div class="img_container">
               <img src="https://png.pngtree.com/png-vector/20190321/ourlarge/pngtree-vector-users-icon-png-image_856952.jpg" alt=""> 
         </div>
        <form action="theResults.php" method="post">
                  <input type="text" placeholder="Enter your Username" name="user_name" value="<?php echo htmlspecialchars($username)  ?>" id=""> <br>
                  <?php
                   if (isset($name_error)) {
                       ?>
                     <p> <?php
                      echo $name_error  ?>  </p>
                      <?php 
                  }  ?>


                  <input type="password" placeholder="Enter your password" name="user_password" id="">
                     <?php
                        if(isset($password_error)) {
                     ?>  
                        <p> <?php  echo $password_error
                       
                        ?>
                         </p>
                         <?php
                     } 


                     
                     ?>
                  <input type="submit">
        </form>
      </div>
   </div>
</body>
</html>