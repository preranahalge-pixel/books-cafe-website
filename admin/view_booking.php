<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: /cafe-website/admin/admin_login.php");
    exit();
}
$conn = new mysqli("localhost", "root", "", "cafe_booking");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM table_booking ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - View Bookings</title>
    <style>
        body {
            font-family: Arial;
            background: #f5efe6;
            padding: 30px;
        }

        button {
            background: #3e2723;;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-bottom: 20px;
            
        }

        a{
            color: white;
            text-decoration: none;
        }
        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background: #3e2723;;
            color: white;
        }

        tr:hover {
            background: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>📋 Table Booking Records</h2>

<button><a href="/cafe-website/admin/logout.php">Logout</a></button>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Date</th>
        <th>Time</th>
        <th>Persons</th> 
        <th>Booked On</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['booking_date']."</td>
                    <td>".$row['booking_time']."</td>
                    <td>".$row['persons']."</td>
                    <td>".$row['created_at']."</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No Bookings Found</td></tr>";
    }
    ?>
</table>

</body>
</html>