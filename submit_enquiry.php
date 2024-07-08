<html>
<head>
<title> Form </title>
</head>
<body>
<h2> Form Submit Succesfully.</h2>
<?php
include 'db_connect.php';

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $location = $_POST['location'];
    $purpose = $_POST['purpose'];

    try {
        $sql = "INSERT INTO enquiries (first_name, last_name, email, mobile, city, location, purpose) 
                VALUES (:first_name, :last_name, :email, :mobile, :city, :location, :purpose)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':purpose', $purpose);

        $stmt->execute();

        echo "Enquiry submitted successfully!";
    } catch (PDOException $e) {
        echo 'Submission failed: ' . $e->getMessage();
    }
}
?>
</body>
</html>
