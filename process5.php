<?php
include 'db5.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = trim($_POST["fullname"]);
  $email = trim($_POST["email"]);
  $department = trim($_POST["department"]);
  $matric = trim($_POST["matric"]);

  if (empty($fullname) || empty($email) || empty($department) || empty($matric)) {
    die("All fields are required.");
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
  }

  $stmt = $conn->prepare("INSERT INTO student_records (fullname, email, department, matric) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $fullname, $email, $department, $matric);

  if ($stmt->execute()) {
    echo "Student registered successfully.";
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>
