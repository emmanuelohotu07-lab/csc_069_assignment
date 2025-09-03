<?php
include 'db5.php';
$result = $conn->query("SELECT * FROM student_records");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registered Students</title>
  <link rel="stylesheet" href="student5.css" />
</head>
<body>
  <div class="container">
    <h1>Registered Students</h1>
    <table border="1" cellpadding="10" style="width:100%; background: rgba(255,255,255,0.1); color: #fff;">
      <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Department</th>
        <th>Matric Number</th>
        <th>Action</th>
      </tr>
      <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?= htmlspecialchars($row['fullname']) ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= htmlspecialchars($row['department']) ?></td>
          <td><?= htmlspecialchars($row['matric']) ?></td>
          <td>
            <form method="POST" action="delete5.php" onsubmit="return confirm('Delete this student?');">
              <input type="hidden" name="id" value="<?= $row['id'] ?>" />
              <button type="submit">Delete</button>
            </form>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
