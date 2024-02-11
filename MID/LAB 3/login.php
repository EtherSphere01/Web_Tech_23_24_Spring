<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
  </head>

  <body>
    <fieldset>
      <legend>
        <h2>LOGIN</h2>
      </legend>
      <form method="post">
      <table>
        <tr>
          <td>User Name</td>
          <td>: <input type="text" name = "username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>: <input type="password" name="id"></td>
        </tr>
      </table>
      <button name="submit">Submit</button>
      <button name="reg">Registration</button>
      </form>
    </fieldset>

    <?php 
        if(isset($_POST['submit'])){
            if(empty($_POST['username']) && empty($_POST['id'])){
                echo "<h4 style='color: red; font-family:verdana;'>Username  and Password is empty <h4><br>";
            }
            else if(!empty($_POST['username']) && empty($_POST['id'] )){
                echo "<h4 style='color: red;font-family:verdana;'>Password is empty<h4><br>";
            }
            else if(empty($_POST['username']) && !empty($_POST['id'])){
                echo "<h4 style='color: red;font-family:verdana;'>Username is empty<h4><br>";
            }
            else{
                echo "<h4 style='color: green;font-family:verdana;'>Login successful<h4><br>";
            }
            
        }
        elseif(isset($_POST['reg'])){
            header('location:reg.php');
        }
    ?>



  </body>
</html>