<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VPIMSR - Report</title>
    <link rel="icon" type="image/x-icon" href="src/logo.png" />

    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .data-sub {
            height: 30px;
            padding: 10px;
            border-radius: 4px;
            background-color: #198754;
            color: #fff;
            font-weight: 600;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
        }

        .close-btn {
            height: 30px;
            cursor: pointer;
        }
    </style>

    <!-- JavaScript -->
    <script src="javascript/popup.js" defer></script>
    <script src="javascript/login.js" defer></script>
    <script src="../javascript/enquiry.js" defer></script>
</head>

<body>
    <div class="data-sub">
        <div>
            <?php
            $servername = "localhost:3303";
            $username = "root";
            $password = "";
            $database = "vpimsr_db";

            $conn = mysqli_connect($servername, $username, $password, $database);
            if ($conn) {
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                @$course = $_POST['course-interest'];
                $des = $_POST['des'];

                $data = "INSERT INTO paymentData(fname, mname, lname, mobile, email, course, pdes) VALUES ('$fname', '$mname', '$lname', '$mobile', '$email', '$course','$des')";

                $insert = mysqli_query($conn, $data);

                if ($insert) {
                    echo "Success! Your data inserted.";
                } else {
                    echo "Alert! Your data not inserted.";
                }
            } else {
                echo "Connection was not done successfully.";
            }
            ?>
        </div>
    </div>
</body>

</html>