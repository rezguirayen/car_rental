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
        <?php include "./utils/menu.php" ?>
        <div>
            <table>
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Rent Price</th>
                    <th>Gear Type</th>
                    <th>Top Speed</th>
                    <th colspan=2>Action</th>
                </thead>
                <tbody>
                    <?php 
                        include "./utils/db_connection.php";
                        $sql = "SELECT * FROM car";
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc()) {
                            $id = $row["id"];
                            $name = $row["name"];
                            $model = $row["model"];
                            $rent_price = $row["rent_price"];
                            $gear_type = $row["gear_type"];
                            $top_speed = $row["top_speed"];
                            
                            echo "
                                <tr>
                                    <td>$id</td>
                                    <td>$name</td>
                                    <td>$model</td>
                                    <td>$ $rent_price</td>
                                    <td>$gear_type</td>
                                    <td>$top_speed Km/h</td>
                                    <td><i class='fa-solid fa-pen-to-square'></i></td>
                                    <td>
                                        <a 
                                        class='confirmation'
                                        href='delete_car.php?id=$id'
                                        >
                                            <i class='fa-solid fa-trash'></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
            <a href="add_car.php" class="l bold">Add New Car</a>
        </div>
        <script type="text/javascript">
        var elems = document.getElementsByClassName('confirmation');
        var confirmIt = function(e) {
            if (!confirm('Are you sure?')) e.preventDefault();
        };
        for (var i = 0, l = elems.length; i < l; i++) {
            elems[i].addEventListener('click', confirmIt, false);
        }
        </script>
    </main>
    <?php
        include "./utils/alert.php";
    ?>
</body>

</html>