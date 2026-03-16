<?php
session_start();
$conn = new mysqli("localhost","root","","cafe_booking");

/* check admin login */
if(!isset($_SESSION['admin'])){
    header("Location: /cafe-website/admin/admin_login.php");
}

/* total users */
$user_query = "SELECT COUNT(*) as total_users FROM users";
$user_result = $conn->query($user_query);
$user_data = $user_result->fetch_assoc();

/* total bookings */
$booking_query = "SELECT COUNT(*) as total_bookings FROM table_booking";
$booking_result = $conn->query($booking_query);
$booking_data = $booking_result->fetch_assoc();

/* total feedbacks */
$feedback_query = "SELECT COUNT(*) as total_feedbacks FROM feedback";
$feedback_result = $conn->query($feedback_query);
$feedback_data = $feedback_result->fetch_assoc();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
        font-family: Arial, Helvetica, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 0;
    }

    .dashboard{
        width: 60%;
        margin: 80px auto;
        text-align: center;
    }

    .dashboard h1{
        margin-bottom: 40px;
        color: #333;
    }

    .stats{
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-bottom: 40px;
    }

    .card{
        background: white;
        padding: 30px;
        width: 200px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .card h3{
        margin: 0;
        font-size: 18px;
        color: #555;
    }

    .card p{
        font-size: 28px;
        font-weight: bold;
        color: #3e2723;;
    }

    .view-btn{
        display: inline-block;
        padding: 12px 25px;
        background: #3e2723;;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
    }

    .view-btn:hover{
        background:  #6d4c41;
    }
    </style>
</head>
<body> 

    <div class="dashboard">

        <h1>Admin Dashboard</h1>

        <div class="stats">

            <div class="card">
                <h3>Total Users</h3>
                <p><?php echo $user_data['total_users']; ?></p>
            </div>

            <div class="card">
                <h3>Total Bookings</h3>
                <p><?php echo $booking_data['total_bookings']; ?></p>
            </div>

            <div class="card">
                <h3>Total Feedbacks</h3>
                <p><?php echo $feedback_data['total_feedbacks']; ?></p>
            </div>

        </div>

        <a href="/cafe-website/admin/view_booking.php" class="view-btn">View All Bookings</a>
        <a href="/cafe-website/admin/admin_view_feedback.php" class="view-btn">View All Feedbacks</a>

    </div>
</body>
</html>