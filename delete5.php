<?php
include 'db5.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
  $id = intval($_POST["id"]);
  $stmt = $conn->prepare("DELETE FROM student_records WHERE id = ?");
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    header("Location: view.php");
    exit();
  } else {
    echo "Error deleting record.";
  }

  $stmt->close();
  $conn->close();
}
?>
