<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <title>Dashboard</title>
</head>

<body>
    <?php
        session_start();
    ?>
    <main class="h-flx gap-50 admin-section">
        <?php include "./utils/menu.php"; ?>
        <div>
            <table>
                <thead>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Car</th>
                    <th>From Address</th>
                    <th>To Address</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </thead>
                <tbody>
                    <?php 
                        include "./utils/db_connection.php";
                        $sql = "SELECT r.id as id, u.first_name as first_name, u.last_name as last_name, u.email as email, u.phone as phone, c.name as car, r.from_address as from_address, r.to_address as to_address, r.begin_date as begin_date, r.end_date as end_date
                            FROM rent r, user u, car c 
                            WHERE r.user_id = u.id AND r.car_id = c.id;
                        ";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            $id = $row["id"];
                            $first_name = $row["first_name"];
                            $last_name = $row["last_name"];
                            $email = $row["email"];
                            $phone = $row["phone"];
                            $car = $row["car"];
                            $from_address = $row["from_address"];
                            $to_address = $row["to_address"];
                            $begin_date = $row["begin_date"];                            
                            $end_date = $row["end_date"];                            
                            echo "
                                <tr>
                                    <td>$id</td>
                                    <td>$first_name</td>
                                    <td>$last_name</td>
                                    <td>$email</td>
                                    <td>$phone</td>
                                    <td>$car</td>
                                    <td>$from_address</td>
                                    <td>$to_address</td>
                                    <td>$begin_date</td>
                                    <td>$end_date</td>
                                </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php
        include "./utils/alert.php";
    ?>
</body>

</html>