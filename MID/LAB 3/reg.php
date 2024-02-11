<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration</title>
  </head>

  <body>
    <fieldset>
      <legend>
        <h2>Registration</h2>
      </legend>
      <form method="post">
      <table>
        <tr>
          <td>Full Name</td>
          <td>: <input type="text" name = "fullname"></td>
        </tr>
        <tr>
          <td>User Name</td>
          <td>: <input type="text" name = "username"></td>
        </tr>
        <tr>
          <td>Email ID</td>
          <td>: <input type="email" name = "email"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>: <input type="password" name="pass"></td>
        </tr>
      </table>
      <button name="reg">Registration</button>
      <button name="login">Login</button>
      </form>
    </fieldset>
    <?php 
        if(isset($_POST['reg'])){
            if(empty($_POST['fullname']) or empty($_POST['username']) or empty($_POST['email']) or empty($_POST['pass'])){
                echo "<h4 style='color: red;font-family:verdana;'>Please fill up the form </h4><br>";
            }
            else{
                echo "<h4 style='color: green;font-family:verdana;'>Successfully filled up<h4><br>";
            }
    
        }
        elseif(isset($_POST['login'])){
            header('location:login.php');
        }
    ?>



  </body>
</html>