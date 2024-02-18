<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

    $servername="localhost";
    $username="root";
    $password = "";
    $database ="webtech";

    $conn = new mysqli($servername,$username,$password,$database);
    $query =  "select * from lab4";
    $res1 = mysqli_query($conn,$query);
    $res = mysqli_query($conn,$query);

    while($r = mysqli_fetch_assoc($res1)){
        echo  $r["s_name"]," ",$r["s_id"];
        echo "<br>";
    }
    ?>
    

    <table border = '1'>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Age</th>
       
    </tr> 
            <?php while($r = mysqli_fetch_assoc($res)){?>
          <tr>
            <td><?php echo $r["s_id"];?></td> 
            <td><?php echo $r["s_name"];?></td>
            <td><?php echo $r["s_email"];?></td> 
            <td><?php echo $r["s_gender"];?></td> 
            <td><?php echo $r["s_age"];?></td>      
        </tr>
          <?php } ?>
    </table>

    

</body>
</html>