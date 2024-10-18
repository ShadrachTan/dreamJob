<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="title">
    <h1>STUDENT MANAGEMENT SYSTEM</h1>
  </div>

  <?php $getStudentId = getStudentId($pdo, $_GET['id']); ?>
  <div class="form">
    <form action="core/handleForms.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $getStudentId['id']; ?>">
      <p>
        <label for="firstName">First name</label>
        <input type="text" name="firstName" value="<?php echo $getStudentId['first_name']; ?>" required>
      </p>
      <p>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="<?php echo $getStudentId['last_name']; ?>" required>
      </p>
      <p>
        <label for="age">Age</label>
        <input type="text" name="age" value="<?php echo $getStudentId['age']; ?>" required>
      </p>
      <p>
        <label for="gender">Gender</label>
        <input type="text" name="gender" value="<?php echo $getStudentId['gender']; ?>" required>
      </p>
      <p>
        <label for="yearLevel">Year Level</label>
        <input type="text" name="yearLevel" value="<?php echo $getStudentId['year_level']; ?>" required>
      </p>
      <p>
        <label for="dream">Dream</label>
        <input type="text" name="dream" value="<?php echo $getStudentId['dream']; ?>" required>
      </p>
      <p>
        <label for="religion">Religion</label>
        <input type="text" name="religion" value="<?php echo $getStudentId['religion']; ?>" required>
      </p>
      <div style="text-align: center; margin-top: 50px;">
        <input type="submit" name="editBtn" value="Edit">
      </p>
    </form>
  </div>
</body>
</html>