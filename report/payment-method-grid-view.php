<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/report.css">
    <style>
        .container_ {
            width: 100%;
            margin: auto;
        }

        .table-content {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: left;
        }

        .header {
            font-size: 40px;
            font-weight: 700;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header::after {
            content: '';
            position: relative;
            width: 100px;
            height: 10px;
            border-bottom: 4px solid black;
        }
    </style>
</head>

<body>
    <div class="container_">
        <h1 class="header">Payment Method Report</h1>
        <div class="table-content">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Payment ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Card Number</th>
                        <th>Security Code</th>
                        <th>Card Expiry</th>
                        <th>Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Connection part.
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "vpimsr_db";

                    $conn = mysqli_connect($servername, $username, $password, $database);

                    if (!$conn) {
                        die("Connection was not done successfully! -->" . mysqli_connect_error($conn));
                    } else {
                        $select = "SELECT * FROM paymentMethod";

                        $data = mysqli_query($conn, $select);

                        $row = mysqli_num_rows($data);

                        if ($row != 0) {
                            // $report = mysqli_fetch_assoc($data);

                            while ($report = mysqli_fetch_assoc($data)) {
                                echo "
                                <tr>
                                    <td>" . $report['pay_id'] . "</td>
                                    <td class='name'>" . $report['fname'] . " " . $report['lname'] . "</td>
                                    <td>" . $report['cardNum'] . "</td>
                                    <td>" . $report['securityCode'] . "</td>
                                    <td>" . $report['cardexp'] . "</td>
                                    <td>" . $report['totalamount'] . "</td>
                                </tr>
                            ";
                            }
                        } else {
                            echo "Alert! There are no data inside the database.";
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>