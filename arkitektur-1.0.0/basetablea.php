<?php
include 'conn.php';
if($conn)
{
  echo "connected succesfully";
}
else{

    die ("connection failed:" .$conn->connect_error);
}
$query ="SELECT * FROM appli ";
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
                            <h2 class="display-6 text-center"> APPLICATION </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-border text-center">
                                <tr class="bg-dark text-white">
                                   <td> AID</td> 
                                   <td> NAME </td>             
                                   <td> DOB </td> 
                                   <td> GENDER </td> 
                                   <td> EMAIL</td>
                                   <td> PHONE</td>
                                   <td> JOB</td>
                                   <td> COMPANY</td>
                                 
                                   <td> Edit </td> 
                                   <td> Delete </td> 
                                </tr>
                                <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?> 
                                    <td><?php echo $row['appli_id']; ?></td>  
                                    <td><?php echo $row['aname']; ?></td>    
                                    <td><?php echo $row['dob']; ?></td> 
                                    <td><?php echo $row['gender']; ?></td> 
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['job_company']; ?></td>
                                    <td><?php echo $row['companyname']; ?></td>
                                    
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