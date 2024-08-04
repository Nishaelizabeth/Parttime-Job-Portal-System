<?php
include 'conn.php';
if($conn)
{
  echo "connected succesfully";
}
else{

    die ("connection failed:" .$conn->connect_error);
}
$query ="SELECT * FROM company ";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title> Fetch data</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h2 class="display-6 text-center"> COMPANY </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-border text-center">
                                <tr class="bg-dark text-white">
                                   <td> CID</td> 
                                   <td> NAME </td>             
                                   <td> EMAIL </td> 
                                   <td> PROOF </td> 
                                   <td> PASSWORD</td>
                                   <td> Edit </td> 
                                   <td> Delete </td> 
                                </tr>
                                <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?> 
                                    <td><?php echo $row['cid']; ?></td>  
                                    <td><?php echo $row['cname']; ?></td>    
                                    <td><?php echo $row['cemail']; ?></td> 
                                    <td><?php echo $row['cproof']; ?></td> 
                                    <td><?php echo $row['ccpass']; ?></td>
                                    <td><a href="a" class="btn btn-primary-white text-dark">Edit</a></td>
                                    <td><a href="a" class="btn btn-danger">Delete</a></td>      
                                </tr>       
                                <?php   
                                    } 
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>