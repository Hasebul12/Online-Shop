<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Log</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         background-color: #f9f9f9;
         margin: 0;
         padding: 20px;
      }

      h1 {
         color: #333;
         text-align: center;
      }

      form {
         width: 100%;
         max-width: 300px;
         margin: 20px auto;
         padding: 10px;
      }

      input {
         width: 100%;
         padding: 10px;
         margin: 5px 0;
         border: 1px solid #ccc;
         border-radius: 4px;
      }

      button {
         width: 100%;
         background-color: #4CAF50;
         color: white;
         padding: 10px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         margin: 5px 0;
      }

      button:hover {
         background-color: #45a049;
      }

      .error {
         color: red;
         text-align: center;
         margin-top: 10px;
      }
   </style>
</head>

<body>
   <h1>Admin Login page</h1>
    
   <form method="post" action="../Controllers/loginCheckController.php">    
      ID: <input type="text" name="id"><br>
      Password: <input type="password" name="pass"><br>
      <?php
      if(isset($_SESSION['error'])) {
         echo "<div class='error'>" . $_SESSION['error'] . "</div>";
         unset($_SESSION['error']);
      }
      ?>
      <button type="submit">Login</button>
   </form>

</body>
</html>
