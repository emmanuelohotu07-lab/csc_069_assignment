<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Student Registration</title>
  <link rel="stylesheet" href="student5.css" />
</head>
<body>
  <div class="container">
    <h1>Student Registration</h1>
    <form action="process5.php" method="POST">
      <input type="text" name="fullname" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email" required />
      <input type="text" name="department" placeholder="Department" required />
      <input type="text" name="matric" placeholder="Matric Number" required />
      <button type="submit">Register</button>
      <a href="view.php">See Registered student</a>
    </form>
  </div>
</body>
</html>
