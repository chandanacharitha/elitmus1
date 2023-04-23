<!DOCTYPE HTML>  
<html>
<head>
  <title>Sign Up Form</title>
  <style>
    body {
      margin: 5px;
      font-size: 25px;
    }
    
    h3 {
      font-size: 30px;
      font-weight: bold;
    }
    
    button {
      background-color: black;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
    }
    
    button:hover {
      background-color: grey;
    }
    
    p {
      font-weight: bold;
      font-size: 20px;
      color:white;
      text-align:center;
    }
    
    input {
      font-size: 20px;
      padding: 10px;
      border-radius: 5px;
      border: none;
      width: 100%;
      margin-bottom: 10px;
    }
    
    #top{
      padding:3px;
        width:100%;
        height:30%;
        background-color:black;
    }

    
  </style>
</head>

<body>  
  <center>
    <div id="top">
        <p>WELCOME</p>
    </div>
    <div>
    <?php
    $servername="localhost";
    $username='root';
    $password='';
    $dbname='project';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn){
      die("Connection failed: " . mysqli_connect_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST["name"];
      $email = $_POST["email"];
      $pass = $_POST["pass"];
    
      // Check if any of the fields are empty
      if (empty($name) || empty($email) || empty($pass)) {
        echo "<h3>Please fill in all the fields.No field should be left empty.</h3>";
      } else {
        // Validate the email field
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "<h3>The email address is incorrect.</h3>";
        } else {
          $sql="INSERT INTO userdata VALUES('$name','$email','$pass')";
          if (mysqli_query($conn,$sql)){
            echo "<h3>Your details have been recorded!</h3>";
          } else {
            echo "Error: " . mysqli_error($conn);
          }
        }
      }
    }
    
    function test_input($x) {
      $x = trim($x);
      $x = stripslashes($x);
      $x = htmlspecialchars($x);
      return $x;
    }
    ?>
    <button onclick="location.href='filehandle.html'">BACK</button>
    <button onclick="location.href='login.php'">LOGIN</button>
</div>