<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result-> num_rows > 0){
    echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Year</th>
        <th>Dept</th>
    </tr>";

// Output data of each row in table format
while($row = $result->fetch_assoc()) {
    echo "<tr>
                    <td>" . $row["ID"] . "</td>
                    <td>" . $row["Name"] . "</td>
                    <td>" . $row["year"] . "</td>
                    <td>" . $row["Dept"] . "</td>
            </tr>";
}
        echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
