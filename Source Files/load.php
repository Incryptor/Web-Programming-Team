<?php
$db = new mysqli('sofe2800.cboafkun8gnh.us-east-1.rds.amazon.com', 'admin', 'swagsofe2800', 'lab');

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "SUCCESS" . '<br />';
}

// Query to return data from your database
$result = $db->query("SELECT * FROM sample");

// check if the query succeeded
if (!$result) {
    die('There was an error running the query[' . $db->error . ']');
}

// Display the results of the query for each row
echo "DISPLAYING THE QUERY RESULTS:" . '<br />';
while ($row = $result->fetch_assoc()) {
    echo $row['summoner'] . ', ';
    echo $row['email'] . ', ';
    echo $row['Dropdown'] . ', ';
    echo $row['checkbox'] . ', ';
    echo $row['availability'] . ', ';
    echo $row['description'] . '<br />';
}

// Display the number of rows returned by query
echo 'Total number rows returned: ' . $result->num_rows;


// Close the database connection
$result->free();
$db->close();

?>
