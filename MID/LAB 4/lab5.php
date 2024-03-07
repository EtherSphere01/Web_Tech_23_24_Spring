<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
            $servername='localhost';
            $database = 'test';
            $username ='root';
            $password ='';
            $conn = new mysqli($servername,$username,$password,$database);
        ?>

<form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Passowrd</th>
            <th colspan = '2'>Button</th>
            <th>Add Info</th>
        </tr>

        <?php
            $query ="select * from lab5";
            $result = mysqli_query($conn,$query);

            $i = 0;
            $k=$result->num_rows;
            while($r = mysqli_fetch_assoc($result)){  
            ?>
            <tr>
                <td>
                    <?php echo $r['s_id'];?>
                </td>
                <td>
                    <?php echo $r['s_name'];?>
                </td>
                <td>
                    <?php echo $r['s_email'];?>
                </td>
                <td>
                    <?php echo $r['s_gender'];?>
                </td>
                <td>
                    <?php echo $r['s_age'];?>
                </td>
                <td>
                    <?php echo $r['s_pass'];?>
                </td>
                <td>
                    <button name='edit' value='<?php echo $r["s_id"];?>'>Edit</button>
                </td>
                <td>
                    <button name='delete' value='<?php echo $r["s_id"]; ?>' > Delete</button>
                </td>

                <?php if($i==0){ ?>
                    <td rowspan='<?php echo $k ?>' align='center'>
                    <button name='add'>Add</button>
                    </td> 
                 <?php } ?>
            </tr>
            <?php $i = $i + 1;  }; 
            ?> 
    </table>
</form>


<?php

// delete operation
    if(isset($_GET["delete"])){
        $id = $_GET["delete"];
        $deletequery = "delete from lab5 where s_id = '$id'";
        mysqli_query($conn,$deletequery);
        ?>
        <!-- <meta HTTP-EQUIV ="Refresh" CONTENT ="0; URL =http://localhost/LAB%205/lab5.php">  -->

  <?php      
    }
// edit operation
    if(isset($_GET["edit"])){
        $id = $_GET["edit"];
        editbutton($id,$conn);
     
    }

    //add operation
    if(isset($_GET["add"])){
        insertinfo($name=null,$id=null,$pass=null,$email=null,$age=null,$gender=null);
    }

    // save operation
    if(isset($_GET["save"])){
        saveinfo($conn);
    }


?>
  <!-- edit form -->
  <?php
      function editbutton($id,$conn){
        $equery ="select * from lab5 where s_id='$id'";
        $eresult = mysqli_fetch_assoc(mysqli_query($conn,$equery));
               
        $name = $eresult['s_name'];   
        $email= $eresult['s_email'];
        $gender= $eresult['s_gender'];
        $age= $eresult['s_age'];
        $pass= $eresult['s_pass'];
        
        insertinfo($name,$id,$pass,$email,$age,$gender);
        
    } 
    ?> 

<!-- information table -->
    <?php
    function insertinfo($name,$id,$pass,$email,$age,$gender){ 
        echo '<p style="font-size:20px; font-weight:600; font-family:verdana;"><u>Information</u></p>';
        ?>

            <form>
            <table>
                <tr>
                    <td>ID </td>
                    <td>
                   : <input type='text' name='id'  value= '<?php echo $id; ?>' >
                    </td>
                </tr>

                <tr>
                    <td>Name</td>
                    <td>
                    : <input type='text' name='name'  value= '<?php echo $name; ?>' >
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                    : <input type='text' name='email'  value= '<?php echo $email ; ?>' >
                    </td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td>
                    : <input type='text' name='gender'  value= '<?php echo $gender ?>' >
                    </td>
                </tr>

                <tr>
                    <td>Age</td>
                    <td>
                    : <input type='text' name='age'  value= '<?php echo $age; ?>' >
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                    : <input type='text' name='pass'  value= '<?php echo $pass; ?>' >
                    </td>
                </tr>
                
            </table>
            <button name = 'save' value = $pass >Save</button>
            </form>
    <?php } ?>


    <!-- save validation and edit save -->
    <?php 
        function saveinfo($conn){

            $name=$_GET['name'];
            $pass=$_GET['pass'];
            $email=$_GET['email'];
            $id=$_GET['id'];
            $age=$_GET['age'];
            $gender=$_GET['gender'];

            if(empty($_GET['name']) || empty($_GET['id']) || empty($_GET['age']) || empty($_GET['gender']) || empty($_GET['email'])||empty($_GET['pass'])){
                insertinfo($name,$id,$pass,$email,$age,$gender);
                echo "Fillup the form";
            }
            else{
                $sql3="select * from lab5 where s_id='$id'";
                $res3=mysqli_query($conn,$sql3);
                if($res3-> num_rows>0)
                {   
                insertinfo($name,$id,$pass,$email,$age,$gender);
                echo "Username Taken";
                }
                else
                {
                    $deletequery1 = "delete from lab5 where s_id = '$id'";
                    mysqli_query($conn,$deletequery1);
                    $insertquery = "INSERT INTO `lab5` (`s_id`, `s_name`, `s_email`, `s_gender`, `s_age`, `s_pass`) VALUES ('$id', '$name', '$email', '$gender', '$age', '$pass');";
                    mysqli_query($conn,$insertquery);

                    ?>
                    <!-- <meta HTTP-EQUIV ="Refresh" CONTENT ="0; URL =http://localhost/LAB%205/lab5.php"> -->
                    <?php
                }
 
               
            }
        }
    ?>


    
</body>
</html>