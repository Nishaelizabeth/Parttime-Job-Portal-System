
<?php
include 'conn.php';
if($conn)
{
  echo "connected succesfully";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name =  $_POST['name'];
    $dob= $_POST['date'];
    $gend=$_POST['ans'];
    $email = $_POST['email'];
    $mobile=$_POST['Mobile'];
    $job=$_POST['prefer'];
    $com=$_POST['company'];
   
    $sql = "INSERT INTO appli(aname,dob,gender,email,phone,job_company,companyname)  VALUES ('$name', '$dob','$gend','$email','$mobile','$job','$com')";
    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
mysqli_close($conn);
 ?>

<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <img src="your-image-url-here.jpg">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="formbold-input-group">
        <label for="name" class="formbold-form-label"> Name </label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-input-group">
        <label for="Birthday" class="formbold-form-label">Date Of Birth</label>
        <input type="date" name="date" id="Birthday" value="Birthday"
        placeholder="Enter your DOB"
        class="formbold-form-input"
        />
        <div class="formbold-input-radio-wrapper">
          <label for="ans" name="gender" class="formbold-form-label">
            Gender
          </label>
  
          <div class="formbold-radio-flex">
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="ans"
                  id="ans"
                />
                Male
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="ans"
                  id="ans"
                />
                Female
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
  
            <div class="formbold-radio-group">
              <label class="formbold-radio-label">
                <input
                  class="formbold-input-radio"
                  type="radio"
                  name="ans"
                  id="ans"
                />
                Other
                <span class="formbold-radio-checkmark"></span>
              </label>
            </div>
          </div>
        </div>

      <div class="formbold-input-group">
        <label for="email" name="email" class="formbold-form-label"> Email </label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
          class="formbold-form-input"
        />
      </div>

      <div class="formbold-input-group">
        <label for="age" name="mob" class="formbold-form-label"> Mobile No. </label>
        <input
          type="text"
          name="Mobile"
          id="Mobile"
          class="formbold-form-input"
        />
      </div>
      <div class="formbold-input-group">
        <label class="formbold-form-label" name="prefer">
          Job & company you prefer?
        </label>

        <select class="formbold-form-select" name="prefer" id="occupation">
          <?php
          include 'conn.php';
          $job = mysqli_query($conn,"SELECT jid,title_company FROM jobs");
          while($j = mysqli_fetch_array($job))
          {
            ?>
          <option value="<?php echo $j['jid'] ?>" ><?php echo $j['title_company'] ?> </option>
          <?php 
          }
          ?>
        </select>
      </div>
      <div class="formbold-input-group">
        <label class="formbold-form-label" name="company">
          Company name
        </label>

        <select class="formbold-form-select" name="company" id="occupation">
          <?php
          include 'conn.php';
          $job = mysqli_query($conn,"SELECT jid,company_name FROM jobs");
          while($j = mysqli_fetch_array($job))
          {
            ?>
          <option value="<?php echo $j['jid'] ?>" ><?php echo $j['company_name'] ?></option>
          <?php 
          }
          ?>
        </select>
      <button class="formbold-btn">Submit</button>
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-form-img {
    margin-bottom: 45px;
  }

  .formbold-input-group {
    margin-bottom: 18px;
  }

  .formbold-form-select {
    width: 100%;
    padding: 12px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }

  .formbold-input-radio-wrapper {
    margin-bottom: 25px;
  }
  .formbold-radio-flex {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }
  .formbold-radio-label {
    font-size: 14px;
    line-height: 24px;
    color: #07074d;
    position: relative;
    padding-left: 25px;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .formbold-input-radio {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  .formbold-radio-checkmark {
    position: absolute;
    top: -1px;
    left: 0;
    height: 18px;
    width: 18px;
    background-color: #ffffff;
    border: 1px solid #dde3ec;
    border-radius: 50%;
  }
  .formbold-radio-label
    .formbold-input-radio:checked
    ~ .formbold-radio-checkmark {
    background-color: #6a64f1;
  }
  .formbold-radio-checkmark:after {
    content: '';
    position: absolute;
    display: none;
  }

  .formbold-radio-label
    .formbold-input-radio:checked
    ~ .formbold-radio-checkmark:after {
    display: block;
  }

  .formbold-radio-label .formbold-radio-checkmark:after {
    top: 50%;
    left: 50%;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #ffffff;
    transform: translate(-50%, -50%);
  }

  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #07074d;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder {
    color: #536387;
  }
  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074d;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
</style>