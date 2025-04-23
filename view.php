<?php
include 'config.php';

$result = $conn->query("SELECT * FROM students");

echo "<h2>Student Records</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Gender</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['email']}</td>
      <td>{$row['gender']}</td>
    </tr>";
}

echo "</table>";
$conn->close();
?>