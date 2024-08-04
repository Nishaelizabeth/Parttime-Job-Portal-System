<?php
include 'conn.php';
if($conn)
{
  echo "connected succesfully";
}
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    $title= $_POST['name'];
    $salary = $_POST['salary'];
    $time=$_POST['time'];
    $location=$_POST['location'];

    $sql = "INSERT INTO jobs(title_company,salary,time,place)  VALUES ('$title','$salary','$time','$location')";
    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
mysqli_close($conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="sscss/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">POST A JOB</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Title & Company Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="salary" id="salary" placeholder="Salary"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="time" id="time" placeholder="Time Period"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="location" id="location" placeholder="Location"/>
                        </div>
                     
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Post"/>
                        </div>
                    </form>
                   
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>