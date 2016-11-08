<?php
$db = new mysqli('sofe2800.cboafkun8gnh.us-east-1.rds.amazonaws.com', 'admin', 'swagsofe2800', 'lab');

// TODO You must process the POST data from the form and then set the variables
// below to be inserted in the database

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
  echo "SUCCESS";
}

// Insert sample data into the database
$sql = $db->prepare("INSERT INTO sample(summoner, email, passwrd, Dropdown, checkbox, " .
                    "availability, description) VALUES (?, ?, ?, ?, ?, ?, ?)");

// These should be retrieved from POST variables
$name = "Jon";
$email = "jon@test.com";
$insecure_pass = "test123"; // This password needs to be securely hashed
$dropdown = "Option 1"; // This is one of the dropdown selection options
$checkbox = 0;  // This is a boolean value 0 or 1
$radio = 2;   // This is an integer value
$message = "This is a sample message."; // The text area content

// Securely hash the password
$password = password_hash($insecure_pass, PASSWORD_DEFAULT);

// Bind the parameters to the SQL query above, s is a string i is an integer
$sql->bind_param("ssssiis", $name, $email, $password, $dropdown, $checkbox, $radio, $message);

// Execute the query, inserting the data
$sql->execute();

// Close the connection
$sql->close();
$db->close();

?>
