<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - VPIMSR</title>
  <link rel="icon" type="image/x-icon" href="src/logo.png" />
  <style>
    * {
      font-family: 'segoe UI', sans-serif;
    }

    body {
      height: 95vh;
    }

    .master-cont {
      text-align: center;
      width: 50%;
      box-shadow: 10px 11px 20px 6px rgba(0, 0, 0, 0.21);
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 50px;
      border-radius: 8px;
    }

    .phpexe {
      margin-top: 20px;
    }

    a {
      text-decoration: none;
      color: black;
      transition: all 0.3s;
    }

    input[type="submit"],
    button {
      background-color: transparent;
      border: 1px solid #333;
      width: 150px;
      padding: 10px 0;
      margin: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s;
    }

    input[type="submit"]:hover,
    button:hover {
      background-color: #333;
      color: white;
    }

    button:hover a {
      color: white;
    }
  </style>
</head>

<body>
  <div class="master-cont">

    <h1>Admin Page</h1>
    <form method="post">
      <h2>Database & Tables</h2>
      <input type="submit" name="button1" class="button" value="create database" />
      <input type="submit" name="button2" class="button" value="create tables" />

      <hr>

      <h2>Reports</h2>
      <a href="report/Enquiry_form_grid_view.php" target="_blank"><button type="button" class="button">enquiry_form</button></a>
      <a href="report/payment-method-grid-view.php" target="_blank"><button type="button" class="button">payment_method</button></a>
      <br>
      <a href="report/payment-data-grid-view.php" target="_blank"><button type="button" class="button">payment_info</button></a>
      <a href="report/feedback_grid_view.php" target="_blank"><button type="button" class="button">feedback_form</button></a>

    </form>
    <div class="phpexe">
      <?php
      function create_db()
      {
        $servername = "localhost:3303";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password);
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE if not exists vpimsr_db";
        if (mysqli_query($conn, $sql)) {
          echo "Database created successfully with the name vpimsr_db";
        } else {
          echo "Error creating database: " . mysqli_error($conn);
        }
        mysqli_close($conn);
      }



      function create_tbl()
      {
        $servername = "localhost:3303";
        $username = "root";
        $password = "";
        $dbname = "vpimsr_db";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        // Enquiry Table
        $sql = "CREATE TABLE IF NOT EXISTS enquiry_form (
          fname VARCHAR(100),
          mname VARCHAR(100),
          lname VARCHAR(100),
          eadd VARCHAR(255),
          ecity VARCHAR(20),
          estate VARCHAR(20),
          epin VARCHAR(10),
          emobile VARCHAR(20),
          ecell VARCHAR(20),
          eemail VARCHAR(30),
          egender VARCHAR(20),
          edob VARCHAR(20),
          eaadhar VARCHAR(15),
          ecourse VARCHAR(30),
          edes VARCHAR(255)
        );";

        if (mysqli_query($conn, $sql)) {
          echo "Table enquiry_form created successfully<br>";
        } else {
          echo "Error creating table: " . mysqli_error($conn);
        }


        // Feedback Table
        $sql2 = "CREATE TABLE IF NOT EXISTS feedback (
          fname VARCHAR(30), 
          ui VARCHAR(30), 
          stability VARCHAR(30), 
          likely VARCHAR(30), 
          suggestion VARCHAR(255)
        );";

        if (mysqli_query($conn, $sql2)) {
          echo "Table feedback created successfully<br>";
        } else {
          echo "Error creating table: " . mysqli_error($conn);
        }


        // payment data
        $sql3 = "CREATE TABLE IF NOT EXISTS paymentData (
          pay_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
          fname VARCHAR(50), 
          mname VARCHAR(50), 
          lname VARCHAR(50), 
          mobile varchar(50), 
          email varchar(200), 
          course varchar(30), 
          pdes varchar(300)
        );";

        if (mysqli_query($conn, $sql3)) {
          echo "Table paymentData created successfully<br>";
        } else {
          echo "Error creating table: " . mysqli_error($conn);
        }


        // Payment method 
        $sql4 = "CREATE TABLE IF NOT EXISTS paymentMethod (
          pay_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
          fname VARCHAR(50), 
          lname VARCHAR(50), 
          cardNum NUMERIC, 
          securityCode NUMERIC,
          cardexp varchar(50), 
          totalamount NUMERIC
        );";

        if (mysqli_query($conn, $sql4)) {
          echo "Table paymentMethod created successfully<br>";
        } else {
          echo "Error creating table: " . mysqli_error($conn);
        }



        mysqli_close($conn);
      }

      if (array_key_exists('button1', $_POST)) {
        create_db();
      } else if (array_key_exists('button2', $_POST)) {
        create_tbl();
      }

      ?>
    </div>
  </div>
</body>

</html>