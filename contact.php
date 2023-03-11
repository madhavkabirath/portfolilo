<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact-us";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit']))
    {
        $Name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Contact = $_POST['Contact'];
        $Message=$_POST['Message'];

        $sql = "INSERT INTO contact (Name, Email, Contact, Message)
VALUES ('$Name', '$Email', '$Contact','$Message')";

if ($conn->query($sql) === TRUE) {
 
  header("Location: index.html");
} else {
  header("Location: index.html");

}
    }


$conn->close();
?>