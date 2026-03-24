<?php
$query = "SELECT * FROM student";
$result = $connection->query($query);

if (!$result) {
die("Database query failed: " . $connection->error);
}
while ($row = $result->fetch_assoc()) {
echo "ID: " . $row['id'] . "<br>";
echo "Name: " . $row['name'] . "<br>";
echo "Email: " . $row['email'] . "<br>";
}

/* $insert_query = "INSERT INTO student (id,name,email,phone,age,gender,address,date,fee) VALUES (13, 'John Doe', 'john.doe@example.com', '123-456-7890', 25, 'Male', '123 Main St', NOW(), 14000)";
 */
if ($connection->query($insert_query) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $insert_query . "<br>" . $connection->error;
}

$update_query = "UPDATE student SET address = 'Baby House' WHERE id = 13";

if ($connection->query($update_query) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error: " . $update_query . "<br>" . $connection->error;
}

$delete_query = "DELETE FROM student WHERE id = 13";
if ($connection->query($delete_query) === TRUE) {
echo "Record deleted successfully";
} else {
echo "Error: " . $delete_query . "<br>" . $connection->error;
}
?>