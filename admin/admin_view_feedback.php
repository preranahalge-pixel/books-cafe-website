<?php
$conn = new mysqli("localhost", "root", "", "cafe_booking");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User Feedback</title>

<style>

body{
    font-family: Arial, sans-serif;
    background: #f5efe6;
    margin:0;
    padding:30px;
}

h2{
    text-align:center;
    margin-bottom:30px;
    color:#4e342e;
}

table{
    width:80%;
    margin:auto;
    border-collapse: collapse;
    background:white;
    box-shadow:0px 0px 10px rgba(0,0,0,0.2);
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

<h2> User Feedback</h2>

<table>
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Date</th>
</tr>

<?php
while($row=$result->fetch_assoc()){
?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['created_at']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>