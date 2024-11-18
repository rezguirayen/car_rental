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
    <main class="admin-section">
        <?php include "./utils/menu.php"; ?>
        <div class="flex-1">
            <form action="./utils/insert_car.php" method="post" class="form">
                <div class="v-flx gap-10">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="text" placeholder="Model" name="model" required>
                    <select name="gear_type" required>
                        <option value="Automatic" selected>Automatic</option>
                        <option value="Manual">Manual</option>
                    </select>
                    <input type="number" placeholder="Top Speed" name="top_speed" required>
                    <input type="text" placeholder="Engine" name="engine" required>
                    <input type="number" placeholder="rent_price" name="rent_price" required>
                    <input type="text" placeholder="Description" name="description" required>
                    <select name="stars_count">
                        <option value="0" selected>0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input type="number" placeholder="Rating count" name="rating_count" required>
                    <select name="brand_id">
                        <?php
                            include "./utils/db_connection.php";
                            $sql = "SELECT * FROM brand";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()) {
                                $id = $row["id"];
                                $name = $row["name"];
                                echo "<option value=$id>$name</option>";
                            }
                        ?>
                    </select>
                    <input type="submit">
                </div>
            </form>
        </div>
    </main>
</body>

</html>